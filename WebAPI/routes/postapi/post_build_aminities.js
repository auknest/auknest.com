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
    console.log("post build amenities...........", req.body);
    var table, values;
    values={
        "lights":req.body.lights,
        "fans":req.body.fans,
        "geysers":req.body.geysers,
        "curtains":req.body.curtains,
        "descr":req.body.descr
    };
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
    
    var sql = "UPDATE buildownerdetails SET ? "+cond;
    console.log("sql.......", sql);
    con.query(sql, values, function(error, results, fields) {
        if(error) {
            console.log("Failed to insert the Pg / flat aminities property details", error)
        }
        else {
            console.log("Data inserted into table Pg / flat aminities property details api sucessfully...");
             res.end();
       }
    });
});

module.exports=router;