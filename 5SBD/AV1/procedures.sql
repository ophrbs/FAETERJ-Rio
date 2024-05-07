-- PROCEDURES

-- Preencher Clientes
INSERT INTO Clientes (cpf, buyer_name, buyer_email, buyer_phone_number)
SELECT DISTINCT cpf, buyer_name, buyer_email, buyer_phone_number
FROM carga_temp
WHERE cpf NOT IN (SELECT cpf FROM clientes);

-- Preencher Produtos
INSERT INTO Produtos (sku, product_name, currency, item_price)
SELECT DISTINCT sku, product_name, currency, item_price
FROM carga_temp
WHERE sku NOT IN (SELECT sku FROM produtos);

-- Preencher Pedidos
INSERT INTO Pedidos (order_id, purchase_date, payments_date, cpf, ship_service_level, recipient_name, ship_address_1, ship_address_2, ship_address_3, ship_city, ship_state, ship_postal_code, ship_country, ioss_number)
SELECT DISTINCT order_id, purchase_date, payments_date,  cpf, ship_service_level, recipient_name, ship_address_1, ship_address_2, ship_address_3, ship_city, ship_state, ship_postal_code, ship_country, ioss_number
FROM carga_temp
WHERE order_id NOT IN (SELECT order_id FROM pedidos);

-- Preencher ItensPedido
INSERT INTO ItensPedido (order_id, order_item_id, sku, quantity_purchased)
SELECT DISTINCT order_id, order_item_id, sku, quantity_purchased
FROM carga_temp
WHERE order_id IN (SELECT order_id FROM Pedidos);

-- Ordenar Pedidos por Valor
INSERT INTO PedidosOrdenados (order_id, total_order_value)
SELECT ItensPedido.order_id, SUM(Produtos.item_price * ItensPedido.quantity_purchased) AS total_order_value
FROM ItensPedido
JOIN Produtos
ON ItensPedido.sku = Produtos.sku
GROUP BY ItensPedido.order_id
ORDER BY total_order_value DESC;

-- Limpar tabela carga_temp
DELETE FROM carga_temp;