const { Router } = require("express");

// CONTROLLERS
const clienteController = require("./controller/clienteController");
const produtoController = require("./controller/produtoController");
const pedidoController = require("./controller/pedidoController");
const itensPedidoController = require("./controller/itensPedidoController");
const cargaController = require("./controller/cargaController");
const pedidoOrdenadoController = require("./controller/pedidoOrdenadoController");
const estoqueController = require("./controller/estoqueController");

const router = Router();

// ROTAS CLIENTE
router.post("/criar-cliente", clienteController.criarCliente);
router.put("/atualizar-cliente/:cpf", clienteController.atualizarCliente);
router.get("/listar-clientes", clienteController.listarClientes);
router.delete("/deletar-cliente/:cpf", clienteController.deletarCliente);

// ROTAS PRODUTO
router.post("/criar-produto", produtoController.criarProduto);
router.put("/atualizar-produto/:sku", produtoController.atualizarProduto);
router.get("/listar-produtos", produtoController.listarProdutos);
router.delete("/deletar-produto/:sku", produtoController.deletarProduto);

// ROTAS PEDIDO
router.post("/criar-pedido", pedidoController.criarPedido);
router.put("/atualizar-pedido/:order_id", pedidoController.atualizarPedido);
router.get("/listar-pedidos", pedidoController.listarPedidos);
router.delete("/deletar-pedido/:order_id", pedidoController.deletarPedido);

// ROTAS ITENSPEDIDO
router.post("/criar-itensPedido", itensPedidoController.criarItensPedido);
router.put(
  "/atualizar-itensPedido/:order_item_id",
  itensPedidoController.atualizarItensPedido
);
router.get("/listar-itensPedidos", itensPedidoController.listarItensPedidos);
router.delete(
  "/deletar-itensPedido/:order_item_id",
  itensPedidoController.deletarItensPedido
);

// ROTAS CARGA
router.post("/processar-carga", cargaController.processarCarga);

// ROTAS PERDIDO ORDENADO
router.get(
  "/listar-pedidosOrdenados",
  pedidoOrdenadoController.listarPedidosOrdenados
);
router.post(
  "/inserir-pedidosOrdenados",
  pedidoOrdenadoController.inserirPedidosOrdenados
);

// ROTAS ESTOQUE
router.post("/criar-estoque", estoqueController.criarEstoque);
router.put("/atualizar-estoque/:sku", estoqueController.atualizarEstoque);
router.get("/listar-estoque", estoqueController.listarEstoque);
router.delete("/deletar-estoque/:sku", estoqueController.deletarEstoque);
router.put("/realizar-pedido/:order_id", estoqueController.realizarPedido);

module.exports = router;
