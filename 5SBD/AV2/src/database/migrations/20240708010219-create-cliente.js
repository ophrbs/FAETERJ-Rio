"use strict";

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable("clientes", {
      cpf: {
        type: Sequelize.STRING,
        primaryKey: true,
        allowNull: false,
      },
      buyer_name: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      buyer_email: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      buyer_phone_number: {
        type: Sequelize.STRING,
        allowNull: false,
      },
    });
  },

  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable("clientes");
  },
};
