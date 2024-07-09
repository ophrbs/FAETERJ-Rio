const { Model, DataTypes } = require("sequelize");

class PedidosOrdenados extends Model {
  static init(sequelize) {
    super.init(
      {
        order_id: {
          type: DataTypes.STRING,
          primaryKey: true,
          allowNull: false,
        },
        total_order_value: {
          type: DataTypes.DECIMAL(10, 2),
          allowNull: false,
        },
        disponibilidade: {
          type: DataTypes.BOOLEAN,
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
  }
}

module.exports = PedidosOrdenados;
