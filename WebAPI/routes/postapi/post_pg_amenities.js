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
    var values ={   "att_bath": req.body.att_bath,
                    "att_bal":req.body.att_bal,
                    "com_area":req.body.com_area,
                    "parking":req.body.parking,
                    "pg_amenities":req.body.pg_amenities,
                    "gen_amenities":req.body.gen_amenities,
                    "pg_rules":req.body.pg_rules,
                 };
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";

    var sql = "UPDATE pgdetails SET ? "+cond;
    console.log("sql.......", sql);
    con.query(sql, values, function(error, results, fields) {
        if(error) {
            console.log("Failed to insert the Pg aminities property details", error)
        }
        else {
            console.log("Data inserted into table Pg aminities property details api sucessfully...");
             res.end();
       }
        
    });

});

module.exports=router;