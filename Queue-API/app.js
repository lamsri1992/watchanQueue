// import express & define port = 3000
const express = require('express');
const app = express();
const port = 3000;
// set use body json
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
// add route
const blogRoute = require('./routes/queue');

app.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});

app.use('/', blogRoute);
// set port & run server
app.listen(port);