
var con = require('../db_config');
var express = require('express');
var router = express.Router();


console.log("...........................getstudbaher");

//rest api to get all results
router.get('/',(request, response) => {
	console.log("...........................getstud");

   con.query('SELECT * FROM employee', (error, results) => {
	  if (error) {
		console.log(".........................if");
		console.log(error);
	  }

	  console.log(".........................else");

	   response.send(results);

	  
	})
});
module.exports = router;
