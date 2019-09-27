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
    if (req.body.pro_type =="pg") {
        table = "pgdetails";  
        values ={   "att_bath": req.body.att_bath,
        "att_bal":req.body.att_bal,
        "com_area":req.body.com_area,
        "parking":req.body.parking,
        "pg_amenities":req.body.pg_amenities,
        "gen_amenities":req.body.gen_amenities,
        "pg_rules":req.body.pg_rules,
     };
      }
      if (req.body.pro_type =="flat") {
          table = "flatdetails";  
          values ={   "flat_type": req.body.flat_type,
          "flat_room_type":req.body.flat_room_type,
          "flat_for":req.body.flat_for,
          "non_veg_allowed":req.body.non_veg_allowed,
          "floor_no":req.body.floor_no,
          "total_floor":req.body.total_floor,
          "property_age":req.body.property_age,
          "expected_rent":req.body.expected_rent,
          "security_amt":req.body.security_amt,
          "avl_frm":req.body.avl_frm,
          "amt_nogotiable":req.body.amt_nogotiable,
          "maintainance":req.body.maintainance,
          "descr":req.body.descr,
       };
      }
    var values =req.body;

    var sql ='INSERT INTO '+table+' SET ?';
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