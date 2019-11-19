'use strict';
module.exports = (sequelize, DataTypes) => {
  const article = sequelize.define('article', {
    name: DataTypes.STRING,
    price: DataTypes.INTEGER,
    description: DataTypes.TEXT
  }, {});
  article.associate = function(models) {
    // associations can be defined here
  };
  return article;
};