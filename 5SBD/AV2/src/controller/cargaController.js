const Cliente = require("../models/cliente");
const Produto = require("../models/produto");
const Pedido = require("../models/pedido");
const ItensPedido = require("../models/itensPedido");

module.exports = {
  async processarCarga(req, res) {
    try {
      const { body } = req;

      for (const item of body) {
        // PREENCHER CLIENTE
        let cliente = await Cliente.findOne({ where: { cpf: item.cpf } });
        if (!cliente) {
          cliente = await Cliente.create({
            cpf: item.cpf,
            buyer_name: item.buyer_name,
            buyer_email: item.buyer_email,
            buyer_phone_number: item.buyer_phone_number,
          });
        }

        // PREENCHER PRODUTO
        let produto = await Produto.findOne({ where: { sku: item.sku } });
        if (!produto) {
          produto = await Produto.create({
            sku: item.sku,
            product_name: item.product_name,
            item_price: item.item_price,
            currency: item.currency,
          });
        }

        // PREENCHER PEDIDO
        let pedido = await Pedido.findOne({
          where: { order_id: item.order_id },
        });
        if (!pedido) {
          pedido = await Pedido.create({
            order_id: item.order_id,
            purchase_date: item.purchase_date,
            payments_date: item.payments_date,
            cpf: item.cpf,
            ship_service_level: item.ship_service_level,
            recipient_name: item.recipient_name,
            ship_address_1: item.ship_address_1,
            ship_address_2: item.ship_address_2,
            ship_address_3: item.ship_address_3,
            ship_city: item.ship_city,
            ship_state: item.ship_state,
            ship_postal_code: item.ship_postal_code,
            ship_country: item.ship_country,
            ioss_number: item.ioss_number,
          });
        }

        // PREENCHER ITENSPEDIDO
        let itensPedido = await ItensPedido.findOne({
          where: { order_item_id: item.order_item_id },
        });
        if (!itensPedido) {
          itensPedido = await ItensPedido.create({
            order_item_id: item.order_item_id,
            order_id: item.order_id,
            sku: item.sku,
            quantity_purchased: item.quantity_purchased,
          });
        }
      }

      res.status(200).json({ message: "Carga processada com sucesso!" });
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao processar carga.", details: error.message });
    }
  },
};
