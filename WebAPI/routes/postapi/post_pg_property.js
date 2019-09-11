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
    var values =req.body;

    var sql ='INSERT INTO pgdetails SET ?';
    console.log("sql.......", sql);
    con.query(sql, values, function(error, results, fields) {
        if(error) {
            console.log("Failed to insert the Pg property details", error)
        }
        else {
            console.log("Data inserted into table Pg property details api sucessfully...");
             res.end();
       }
        
    });

});

module.exports=router;