'use strict';
module.exports = (sequelize, DataTypes) => {
  const participate = sequelize.define('participate', {
    participates: DataTypes.BOOLEAN
  }, {});
  participate.associate = function(models) {
    // associations can be defined here
  };
  return participate;
};