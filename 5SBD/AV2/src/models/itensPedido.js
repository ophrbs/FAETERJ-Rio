const { Model, DataTypes } = require("sequelize");

class ItensPedido extends Model {
  static init(sequelize) {
    super.init(
      {
        order_item_id: {
          type: DataTypes.STRING,
          primaryKey: true,
          allowNull: false,
        },
        order_id: {
          type: DataTypes.STRING,
          allowNull: false,
          references: {
            model: "pedidos",
            key: "order_id",
          },
          onUpdate: "CASCADE",
          onDelete: "CASCADE",
        },
        sku: {
          type: DataTypes.STRING,
          allowNull: false,
          references: {
            model: "produtos",
            key: "sku",
          },
          onUpdate: "CASCADE",
          onDelete: "CASCADE",
        },
        quantity_purchased: {
          type: DataTypes.INTEGER,
          allowNull: false,
        },
      },
      {
        sequelize,
        timestamps: false,
      }
    );
  }

  static associate(models) {
    this.belongsTo(models.Pedido, { foreignKey: "order_id", as: "pedido" });
    this.belongsTo(models.Produto, { foreignKey: "sku", as: "produto" });
  }
}

module.exports = ItensPedido;
