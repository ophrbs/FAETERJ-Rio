const Estoque = require("../models/estoque");
const ItensPedido = require("../models/itensPedido");
const Pedido = require("../models/pedido");
const PedidoOrdenado = require("../models/pedidoOrdenado");
const { Sequelize } = require("sequelize");

module.exports = {
  async criarEstoque(req, res) {
    try {
      const { sku, quantity } = req.body;

      const estoque = await Estoque.findOne({ where: { sku } });

      if (estoque) {
        res.status(401).json({ error: `SKU ${sku} já cadastrado no estoque!` });
      } else {
        const estoque = await Estoque.create({
          sku,
          quantity,
        });

        res.status(200).json({
          message: `Item ${sku} do estoque criado com sucesso.`,
        });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao criar estoque.", details: error.message });
    }
  },

  async atualizarEstoque(req, res) {
    try {
      const { sku } = req.params;
      const { quantity } = req.body;

      const estoque = await Estoque.findOne({ where: { sku } });

      if (!estoque) {
        res
          .status(401)
          .json({ error: `SKU ${sku} não encontrado no estoque!` });
      } else {
        const estoque = await Estoque.update({ quantity }, { where: { sku } });

        res.status(200).json({
          message: `Item ${sku} do estoque atualizado com sucesso.`,
        });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao atualizar estoque.", details: error.message });
    }
  },

  async listarEstoque(req, res) {
    try {
      const estoque = await Estoque.findAll();

      if (!estoque) {
        res.status(401).json({ error: "Não há itens no estoque!" });
      } else {
        res.status(200).json({ estoque });
      }
    } catch (error) {
      res.status(400).json({
        error: "Erro ao listar itens de estoque.",
        details: error.message,
      });
    }
  },

  async deletarEstoque(req, res) {
    try {
      const { sku } = req.params;

      const estoque = await Estoque.findOne({ where: { sku } });

      if (!estoque) {
        res
          .status(401)
          .json({ error: `SKU ${sku} não encontrado no estoque!` });
      } else {
        await Estoque.destroy({ where: { sku } });
        res
          .status(200)
          .json({ message: `Item ${sku} do estoque deletado com sucesso!` });
      }
    } catch (error) {
      res.status(400).json({
        error: "Erro ao deletar item do estoque.",
        details: error.message,
      });
    }
  },

  async realizarPedido(req, res) {
    try {
      const { order_id } = req.params;

      // Verifica se há algum pedido na tabela PedidosOrdenados com disponibilidade falsa
      const pedidoOrdenado = await PedidoOrdenado.findOne({
        where: {
          order_id,
          disponibilidade: false,
        },
      });

      if (pedidoOrdenado) {
        return res.status(400).json({
          error: `Pedido com order_id ${order_id} não tem disponibilidade no estoque.`,
        });
      }

      // Calcular a quantidade total comprada para cada SKU com base no pedido específico
      const quantidadeComprada = await ItensPedido.findAll({
        attributes: [
          "sku",
          [
            Sequelize.fn("SUM", Sequelize.col("quantity_purchased")),
            "total_quantity_purchased",
          ],
        ],
        where: { order_id },
        group: ["sku"],
      });

      const quantidadeCompradaPorSKU = quantidadeComprada.map((item) => ({
        sku: item.sku,
        total_quantity_purchased: item.getDataValue("total_quantity_purchased"),
      }));

      // Atualizar a quantidade no estoque subtraindo a quantidade comprada
      await Promise.all(
        quantidadeCompradaPorSKU.map(async (item) => {
          const [numUpdated] = await Estoque.update(
            {
              quantity: Sequelize.literal(
                `quantity - ${item.total_quantity_purchased}`
              ),
            },
            {
              where: { sku: item.sku },
            }
          );
        })
      );

      await Pedido.destroy({ where: { order_id } });

      res.status(200).json({ message: "Estoque atualizado com sucesso!" });
    } catch (error) {
      res.status(400).json({ error: error.message });
    }
  },
};
