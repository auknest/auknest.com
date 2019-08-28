var express = require('express');
var app = express();


// Display all users
app.get('/getstud', (request, response) => {
    pool.query('SELECT * FROM users', (error, result) => {
        if (error) throw error;
 
        response.send(result);
    });
});
module.exports = app;
