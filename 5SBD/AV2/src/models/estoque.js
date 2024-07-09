const { Model, DataTypes } = require("sequelize");

class Estoque extends Model {
  static init(sequelize) {
    super.init(
      {
        sku: {
          type: DataTypes.STRING,
          primaryKey: true,
          allowNull: false,
        },
        quantity: {
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
}

module.exports = Estoque;
