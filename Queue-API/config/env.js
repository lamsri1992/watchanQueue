const env = {
    database: 'beta',
    username: 'postgres',
    password: 'ura6ubyny',
    host: '172.20.55.10',
    dialect: 'postgres',
    port: '5433',
    pool: {
      max: 5,
      min: 0,
      acquire: 30000,
      idle: 10000
    }
  };
  
  module.exports = env;