const Sequelize = require("sequelize");
const configDB = require("../config/database");

// MODELS
const Cliente = require("../models/cliente");
const Produto = require("../models/produto");
const Pedido = require("../models/pedido");
const ItensPedido = require("../models/itensPedido");
const PedidoOrdenado = require("../models/pedidoOrdenado");
const Estoque = require("../models/estoque");

const connection = new Sequelize(configDB);

// INIT
Cliente.init(connection);
Produto.init(connection);
Pedido.init(connection);
ItensPedido.init(connection);
PedidoOrdenado.init(connection);
Estoque.init(connection);

// FK
Pedido.associate(connection.models);
ItensPedido.associate(connection.models);
PedidoOrdenado.associate(connection.models);

module.exports = connection;
