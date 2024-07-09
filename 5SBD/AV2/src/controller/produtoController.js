const Produto = require("../models/produto");

module.exports = {
  async criarProduto(req, res) {
    try {
      const { sku, product_name, item_price, currency } = req.body;

      const produto = await Produto.findOne({ where: { sku } });

      if (produto) {
        res.status(401).json({ error: `SKU ${sku} já cadastrado.` });
      } else {
        const produto = await Produto.create({
          sku,
          product_name,
          item_price,
          currency,
        });

        res.status(200).json({
          message: `Produto com SKU ${sku} criado com sucesso.`,
        });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao criar produto.", details: error.message });
    }
  },
  async atualizarProduto(req, res) {
    try {
      const { sku } = req.params;
      const { product_name, item_price, currency } = req.body;

      const produto = await Produto.findOne({ where: { sku } });

      if (!produto) {
        res
          .status(401)
          .json({ error: `Produto com SKU ${sku} não encontrado.` });
      } else {
        const produto = await Produto.update(
          { product_name, item_price, currency },
          { where: { sku } }
        );

        res
          .status(200)
          .json({ message: `Produto com SKU ${sku} atualizado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao atualizar produto.", details: error.message });
    }
  },
  async listarProdutos(req, res) {
    try {
      const produtos = await Produto.findAll();

      if (!produtos) {
        res.status(401).json({ error: "Não há nenhum produto cadastrado." });
      } else {
        res.status(200).json({ produtos });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao listar produtos.", details: error.message });
    }
  },
  async deletarProduto(req, res) {
    try {
      const { sku } = req.params;

      const produto = await Produto.findOne({ where: { sku } });

      if (!produto) {
        res
          .status(401)
          .json({ error: `Produto com SKU ${sku} não encontrado.` });
      } else {
        await Produto.destroy({ where: { sku } });
        res
          .status(200)
          .json({ message: `Produto com SKU ${sku} deletado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao deletar produto.", details: error.message });
    }
  },
};
