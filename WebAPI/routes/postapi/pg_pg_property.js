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
console.log("Into pg to pg property details api.......");
    var table, values;
    // values = {
      
    // }
    values = req.body;
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
    var sql = "UPDATE pgTopgdetails SET ?"+cond;
    try {
      con.query(sql, values, function(error, results, fields) {

      if (error) {
          console.log("Failed to insert the pg to pg property details", error)
      }
      else {
          console.log("Data inserted into table pgTopgdetails table sucessfully...");
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