'use strict';
module.exports = (sequelize, DataTypes) => {
  const campus = sequelize.define('campus', {
    name: DataTypes.STRING
  }, {});
  campus.associate = function(models) {
    // associations can be defined here
  };
  return campus;
};