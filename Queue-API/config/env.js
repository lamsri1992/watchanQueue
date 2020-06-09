const env = {
    database: '23736',
    username: 'postgres',
    password: 'watchan',
    host: '172.20.55.254',
    dialect: 'postgres',
    port: '5432',
    pool: {
      max: 5,
      min: 0,
      acquire: 30000,
      idle: 10000
    }
  };
  
  module.exports = env;