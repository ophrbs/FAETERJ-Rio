const PedidoOrdenado = require("../models/pedidoOrdenado");
const ItensPedido = require("../models/itensPedido");
const Produto = require("../models/produto");
const { Sequelize } = require("sequelize");

module.exports = {
  async listarPedidosOrdenados(req, res) {
    try {
      const pedidoOrdenado = await PedidoOrdenado.findAll({
        order: [["total_order_value", "DESC"]],
      });

      if (!pedidoOrdenado) {
        res.status(401).json({ error: "Não há nenhum pedido!" });
      } else {
        res.status(200).json({ pedidoOrdenado });
      }
    } catch (error) {
      res.status(400).json({
        error: "Erro ao listar pedido ordenados.",
        details: error.message,
      });
    }
  },
  async inserirPedidosOrdenados(req, res) {
    try {
      // Consulta para calcular total_order_value para cada order_id
      const pedidosComTotal = await ItensPedido.findAll({
        attributes: [
          "order_id",
          [
            Sequelize.fn(
              "SUM",
              Sequelize.literal(
                "produto.item_price * ItensPedido.quantity_purchased"
              )
            ),
            "total_order_value",
          ],
          [
            Sequelize.literal(`(
                SELECT MIN(e.quantity >= ItensPedido.quantity_purchased)
                FROM estoques e
                WHERE e.sku = ItensPedido.sku
              )`),
            "is_available",
          ],
        ],
        include: [
          {
            model: Produto,
            as: "produto",
            attributes: [],
          },
        ],
        group: ["ItensPedido.order_id"],
      });

      // Inserir os resultados calculados em PedidosOrdenados
      await PedidoOrdenado.bulkCreate(
        pedidosComTotal.map((pedido) => ({
          order_id: pedido.order_id,
          total_order_value: pedido.getDataValue("total_order_value"),
          disponibilidade: pedido.getDataValue("is_available") === 1,
        }))
      );

      res.status(200).json({
        message: `Pedidos ordenados com sucesso!`,
      });
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao ordenar pedidos.", details: error.message });
    }
  },
};
