var con =require('../../db_config');
var express= require('express');
var router= express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.post('/', function(req, res) {
console.log("Into build owner property details api.......");
    var table, values;
    var sql = "INSERT INTO buildownerdetails SET ?";
    try {
      con.query(sql, values, function(error, results, fields) {

      if (error) {
          console.log("Failed to insert the building  property details", error)
      }
      else {
          console.log("Data inserted into table buildownerdetails table sucessfully...");
            res.end();
      }
      });
    }
    catch(Excepetion) {
      console.log("within  catche");
      console.log(Exception);
    }
    res.end();

});
module.exports=router;