'use strict';
module.exports = (sequelize, DataTypes) => {
  const photo = sequelize.define('photo', {
    name: DataTypes.STRING,
    url: DataTypes.STRING,
    like_amount: DataTypes.INTEGER
  }, {});
  photo.associate = function(models) {
    // associations can be defined here
  };
  return photo;
};