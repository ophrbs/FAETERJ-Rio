const Pedido = require("../models/pedido");

module.exports = {
  async criarPedido(req, res) {
    try {
      const {
        order_id,
        purchase_date,
        payments_date,
        cpf,
        ship_service_level,
        recipient_name,
        ship_address_1,
        ship_address_2,
        ship_address_3,
        ship_city,
        ship_state,
        ship_postal_code,
        ship_country,
        ioss_number,
      } = req.body;

      const pedido = await Pedido.findOne({ where: { order_id } });

      if (pedido) {
        res.status(401).json({ error: `Pedido ${order_id} já cadastrado.` });
      } else {
        const pedido = await Pedido.create({
          order_id,
          purchase_date,
          payments_date,
          cpf,
          ship_service_level,
          recipient_name,
          ship_address_1,
          ship_address_2,
          ship_address_3,
          ship_city,
          ship_state,
          ship_postal_code,
          ship_country,
          ioss_number,
        });

        res.status(200).json({
          message: `Pedido ${order_id} criado com sucesso.`,
        });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao criar pedido.", details: error.message });
    }
  },

  async atualizarPedido(req, res) {
    try {
      const { order_id } = req.params;
      const {
        purchase_date,
        payments_date,
        cpf,
        ship_service_level,
        recipient_name,
        ship_address_1,
        ship_address_2,
        ship_address_3,
        ship_city,
        ship_state,
        ship_postal_code,
        ship_country,
        ioss_number,
      } = req.body;

      const pedido = await Pedido.findOne({ where: { order_id } });

      if (!pedido) {
        res.status(401).json({ error: `Pedido ${order_id} não encontrado.` });
      } else {
        const pedido = await Pedido.update(
          {
            purchase_date,
            payments_date,
            cpf,
            ship_service_level,
            recipient_name,
            ship_address_1,
            ship_address_2,
            ship_address_3,
            ship_city,
            ship_state,
            ship_postal_code,
            ship_country,
            ioss_number,
          },
          { where: { order_id } }
        );

        res
          .status(200)
          .json({ message: `Pedido ${order_id} atualizado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao atualizar pedido.", details: error.message });
    }
  },

  async listarPedidos(req, res) {
    try {
      const pedidos = await Pedido.findAll();

      if (!pedidos) {
        res.status(401).json({ message: "Não há nenhum pedido cadastrado!" });
      } else {
        res.status(200).json({ pedidos });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao listar pedidos.", details: error.message });
    }
  },

  async deletarPedido(req, res) {
    try {
      const { order_id } = req.params;

      const pedido = await Pedido.findOne({ where: { order_id } });

      if (!pedido) {
        res.status(401).json({ error: `Pedido ${order_id} não encontrado.` });
      } else {
        await Pedido.destroy({ where: { order_id } });
        res
          .status(200)
          .json({ message: `Pedido ${order_id} deletado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao deletar pedido.", details: error.message });
    }
  },
};
