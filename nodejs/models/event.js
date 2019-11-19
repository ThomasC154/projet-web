'use strict';
module.exports = (sequelize, DataTypes) => {
  const event = sequelize.define('event', {
    name: DataTypes.STRING,
    date: DataTypes.DATE,
    location: DataTypes.STRING,
    price: DataTypes.INTEGER,
    description: DataTypes.TEXT,
    validated: DataTypes.BOOLEAN
  }, {});
  event.associate = function(models) {
    // associations can be defined here
  };
  return event;
};