const Cliente = require("../models/cliente");

module.exports = {
  async criarCliente(req, res) {
    try {
      const { cpf, buyer_name, buyer_email, buyer_phone_number } = req.body;

      const cliente = await Cliente.findOne({ where: { cpf } });

      if (cliente) {
        res.status(401).json({ error: `CPF ${cpf} já cadastrado!` });
      } else {
        const cliente = await Cliente.create({
          cpf,
          buyer_name,
          buyer_email,
          buyer_phone_number,
        });

        res.status(200).json({ message: `Cliente ${cpf} criado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao criar cliente.", details: error.message });
    }
  },
  async atualizarCliente(req, res) {
    try {
      const { cpf } = req.params;
      const { buyer_name, buyer_email, buyer_phone_number } = req.body;

      const cliente = await Cliente.findOne({ where: { cpf } });

      if (!cliente) {
        res.status(401).json({ error: `CPF ${cpf} não encontrado!` });
      } else {
        const cliente = await Cliente.update(
          { buyer_name, buyer_email, buyer_phone_number },
          { where: { cpf } }
        );

        res
          .status(200)
          .json({ message: `Cliente ${cpf} atualizado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao atualizar cliente.", details: error.message });
    }
  },
  async listarClientes(req, res) {
    try {
      const clientes = await Cliente.findAll();

      if (!clientes) {
        res.status(401).json({ message: "Não há nenhum cliente!" });
      } else {
        res.status(200).json({ clientes });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao listar clientes.", details: error.message });
    }
  },
  async deletarCliente(req, res) {
    try {
      const { cpf } = req.params;

      const cliente = await Cliente.findOne({ where: { cpf } });

      if (!cliente) {
        res.status(401).json({ error: `CPF ${cpf} não encontrado!` });
      } else {
        await Cliente.destroy({ where: { cpf } });
        res
          .status(200)
          .json({ message: `Cliente ${cpf} deletado com sucesso.` });
      }
    } catch (error) {
      res
        .status(400)
        .json({ error: "Erro ao deletar cliente.", details: error.message });
    }
  },
};
