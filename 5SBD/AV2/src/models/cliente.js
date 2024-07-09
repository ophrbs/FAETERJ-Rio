const { Model, DataTypes } = require("sequelize");

class Cliente extends Model {
  static init(sequelize) {
    super.init(
      {
        cpf: {
          type: DataTypes.STRING,
          primaryKey: true,
          allowNull: false,
        },
        buyer_name: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        buyer_email: {
          type: DataTypes.STRING,
          allowNull: false,
        },
        buyer_phone_number: {
          type: DataTypes.STRING,
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

module.exports = Cliente;
