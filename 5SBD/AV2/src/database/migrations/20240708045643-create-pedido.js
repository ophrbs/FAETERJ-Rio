"use strict";

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable("pedidos", {
      order_id: {
        type: Sequelize.STRING,
        primaryKey: true,
        allowNull: false,
      },
      purchase_date: {
        type: Sequelize.DATE,
        allowNull: false,
      },
      payments_date: {
        type: Sequelize.DATE,
        allowNull: false,
      },
      cpf: {
        type: Sequelize.STRING,
        allowNull: false,
        references: {
          model: "clientes",
          key: "cpf",
        },
        onUpdate: "CASCADE",
        onDelete: "CASCADE",
      },
      ship_service_level: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      recipient_name: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ship_address_1: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ship_address_2: {
        type: Sequelize.STRING,
        allowNull: true,
      },
      ship_address_3: {
        type: Sequelize.STRING,
        allowNull: true,
      },
      ship_city: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ship_state: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ship_postal_code: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ship_country: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      ioss_number: {
        type: Sequelize.STRING,
        allowNull: true,
      },
    });
  },

  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable("pedidos");
  },
};
