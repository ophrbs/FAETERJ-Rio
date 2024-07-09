const ItensPedido = require("../models/itensPedido");

module.exports = {
  async criarItensPedido(req, res) {
    try {
      const { order_item_id, order_id, sku, quantity_purchased } = req.body;

      const itensPedido = await ItensPedido.findOne({
        where: { order_item_id },
      });

      if (itensPedido) {
        res
          .status(401)
          .json({ error: `Item de pedido ${order_item_id} já cadastrado!` });
      } else {
        const itensPedido = await ItensPedido.create({
          order_item_id,
          order_id,
          sku,
          quantity_purchased,
        });

        res.status(200).json({
          message: `Item de pedido ${order_item_id} criado com sucesso.`,
        });
      }
    } catch (error) {
      res
        .status(400)
        .json({
          error: "Erro ao criar item de pedido.",
          details: error.message,
        });
    }
  },

  async atualizarItensPedido(req, res) {
    try {
      const { order_item_id } = req.params;
      const { order_id, sku, quantity_purchased } = req.body;

      const itensPedido = await ItensPedido.findOne({
        where: { order_item_id },
      });

      if (!itensPedido) {
        res
          .status(401)
          .json({ error: `Item de pedido ${order_item_id} não encontrado!` });
      } else {
        const itensPedido = await ItensPedido.update(
          {
            order_id,
            sku,
            quantity_purchased,
          },
          { where: { order_item_id } }
        );

        res
          .status(200)
          .json({
            message: `Item de pedido ${order_item_id} atualizado com sucesso.`,
          });
      }
    } catch (error) {
      res
        .status(400)
        .json({
          error: "Erro ao atualizar item de pedido.",
          details: error.message,
        });
    }
  },

  async listarItensPedidos(req, res) {
    try {
      const itensPedido = await ItensPedido.findAll();

      if (!itensPedido) {
        res.status(401).json({ error: "Não há nenhum item de pedido!" });
      } else {
        res.status(200).json({ itensPedido });
      }
    } catch (error) {
      res
        .status(400)
        .json({
          error: "Erro ao listar itens de pedido.",
          details: error.message,
        });
    }
  },

  async deletarItensPedido(req, res) {
    try {
      const { order_item_id } = req.params;

      const itensPedido = await ItensPedido.findOne({
        where: { order_item_id },
      });

      if (!itensPedido) {
        res
          .status(401)
          .json({ error: `Item de pedido ${order_item_id} não encontrada!` });
      } else {
        await ItensPedido.destroy({ where: { order_item_id } });
        res
          .status(200)
          .json({
            message: `Item de pedido ${order_item_id} deletado com sucesso.`,
          });
      }
    } catch (error) {
      res
        .status(400)
        .json({
          error: "Erro ao deletar item de pedido.",
          details: error.message,
        });
    }
  },
};
