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

    var sql="UPDATE property SET property_status="+req.query.property_status+" WHERE pro_id='"+req.query.pro_id+"'";
    con.query(sql, (error, result) =>{

        if (error) {
               console.log("Failed to updatethe Property from the property table", error)
           }
       else {
           console.log("Updated the property table");
           res.end();
           }
   });
    res.end();
});

module.exports=router;