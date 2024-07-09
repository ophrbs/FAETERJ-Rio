"use strict";

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable("pedidos_ordenados", {
      order_id: {
        type: Sequelize.STRING,
        primaryKey: true,
        allowNull: false,
        references: {
          model: "pedidos",
          key: "order_id",
        },
        onUpdate: "CASCADE",
        onDelete: "CASCADE",
      },
      total_order_value: {
        type: Sequelize.DECIMAL(10, 2),
        allowNull: false,
      },
      disponibilidade: {
        type: Sequelize.BOOLEAN,
        allowNull: false,
      },
    });
  },

  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable("pedidos_ordenados");
  },
};
