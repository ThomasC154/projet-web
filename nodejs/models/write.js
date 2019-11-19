'use strict';
module.exports = (sequelize, DataTypes) => {
  const write = sequelize.define('write', {
    writes: DataTypes.BOOLEAN
  }, {});
  write.associate = function(models) {
    // associations can be defined here
  };
  return write;
};