"use strict";

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable("itens_pedidos", {
      order_item_id: {
        type: Sequelize.STRING,
        primaryKey: true,
        allowNull: false,
      },
      order_id: {
        type: Sequelize.STRING,
        allowNull: false,
        references: {
          model: "pedidos",
          key: "order_id",
        },
        onUpdate: "CASCADE",
        onDelete: "CASCADE",
      },
      sku: {
        type: Sequelize.STRING,
        allowNull: false,
        references: {
          model: "produtos",
          key: "sku",
        },
        onUpdate: "CASCADE",
        onDelete: "CASCADE",
      },
      quantity_purchased: {
        type: Sequelize.INTEGER,
        allowNull: false,
      },
    });
  },

  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable("itens_pedidos");
  },
};
