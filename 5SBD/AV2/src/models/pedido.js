const { Model, DataTypes } = require("sequelize");

class Pedido extends Model {
  static init(sequelize) {
    super.init(
      {
        order_id: {
          type: DataTypes.STRING,
          primaryKey: true,
          allowNull: false,
        },
        purchase_date: {
          type: DataTypes.DATE,
          allowNull: false,
        },
        payments_date: {
          type: DataTypes.DATE,
          allowNull: false,
        },
        cpf: {
          type: DataTypes.STRING,
          allowNull: false,
          references: {
            model: "clientes",
            key: "cpf",
          },
          onUpdate: "CASCADE",
          onDelete: "CASCADE",
        },
        ship_service_level: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        recipient_name: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ship_address_1: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ship_address_2: {
          type: DataTypes.STRING,
          allowNull: true,
        },
        ship_address_3: {
          type: DataTypes.STRING,
          allowNull: true,
        },
        ship_city: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ship_state: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ship_postal_code: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ship_country: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        ioss_number: {
          type: DataTypes.STRING,
          allowNull: true,
        },
      },
      {
        sequelize,
        timestamps: false,
      }
    );
  }

  static associate(models) {
    this.belongsTo(models.Cliente, { foreignKey: "cpf", as: "cliente" });
  }
}

module.exports = Pedido;
