'use strict';
module.exports = (sequelize, DataTypes) => {
  const cart = sequelize.define('cart', {
    total_price: DataTypes.INTEGER,
    date: DataTypes.DATE,
    valid: DataTypes.BOOLEAN
  }, {});
  cart.associate = function(models) {
    // associations can be defined here
  };
  return cart;
};