-- CRIAÇÃO DE TABELAS

-- Criar tabela 'carga_temp'
CREATE TABLE carga_temp (
    order_id VARCHAR(50),
    order_item_id VARCHAR(50),
    purchase_date DATETIME,
    payments_date DATETIME,
    buyer_email VARCHAR(255),
    buyer_name VARCHAR(255),
    cpf VARCHAR(11),
    buyer_phone_number VARCHAR(20),
    sku VARCHAR(50),
    product_name VARCHAR(255),
    quantity_purchased INT,
    currency VARCHAR(10),
    item_price DECIMAL(10, 2),
    ship_service_level VARCHAR(50),
    recipient_name VARCHAR(255),
    ship_address_1 VARCHAR(255),
    ship_address_2 VARCHAR(255),
    ship_address_3 VARCHAR(255),
    ship_city VARCHAR(255),
    ship_state VARCHAR(50),
    ship_postal_code VARCHAR(10),
    ship_country VARCHAR(50),
    ioss_number VARCHAR(50)
);

-- Criar tabela 'Clientes'
CREATE TABLE Clientes (
    cpf VARCHAR(11) PRIMARY KEY,
    buyer_name VARCHAR(255),
    buyer_email VARCHAR(255),
    buyer_phone_number VARCHAR(20)
);

-- Criar tabela 'Produtos'
CREATE TABLE Produtos (
    sku VARCHAR(50) PRIMARY KEY,
    product_name VARCHAR(255),
    item_price DECIMAL(10, 2),
    currency VARCHAR(10)
);

-- Criar tabela 'Pedidos'
CREATE TABLE Pedidos (
    order_id VARCHAR(50) PRIMARY KEY,
    purchase_date DATETIME,
    payments_date DATETIME,
    cpf VARCHAR(11),  -- Chave estrangeira para Clientes
    ship_service_level VARCHAR(50),
    recipient_name VARCHAR(255),
    ship_address_1 VARCHAR(255),
    ship_address_2 VARCHAR(255),
    ship_address_3 VARCHAR(255),
    ship_city VARCHAR(255),
    ship_state VARCHAR(50),
    ship_postal_code VARCHAR(10),
    ship_country VARCHAR(50),
    ioss_number VARCHAR(50),
    FOREIGN KEY (cpf) REFERENCES Clientes(cpf)
);

-- Criar tabela 'ItensPedido'
CREATE TABLE ItensPedido (
    order_item_id VARCHAR(50) PRIMARY KEY,
    order_id VARCHAR(50),  -- Chave estrangeira para Pedidos
    sku VARCHAR(50),  -- Chave estrangeira para Produtos
    quantity_purchased INT,
    FOREIGN KEY (order_id) REFERENCES Pedidos(order_id),
    FOREIGN KEY (sku) REFERENCES Produtos(sku)
);

-- Criar tabela 'PedidosOrdenados'
CREATE TABLE PedidosOrdenados (
    order_id VARCHAR(50),
    total_order_value DECIMAL(10,2),
    disponibilidade BIT,
    FOREIGN KEY (order_id) REFERENCES Pedidos(order_id)
);

-- Criar tabela 'Estoque'
CREATE TABLE Estoque (
	sku VARCHAR(50),
	quantity INT,
);
