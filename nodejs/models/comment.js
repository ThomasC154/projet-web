'use strict';
module.exports = (sequelize, DataTypes) => {
  const comment = sequelize.define('comment', {
    text: DataTypes.TEXT
  }, {});
  comment.associate = function(models) {
    // associations can be defined here
  };
  return comment;
};