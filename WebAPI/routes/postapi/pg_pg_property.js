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
console.log("One rk ",req.body);
    var table, values;
    console.log("........", req.body);
    // var onerk=req.body.onerk.toString();
    values = {
        "build_type": req.body.build_type,
        "pro_id": req.body.pro_id,
        "pro_type" : req.body.pro_type,
        "floor_no":req.body.floor_no,
        "gate_security":req.body.gate_security,
        "lift":req.body.lift,
        "pg_capacity":req.body.pg_capacity,
        "stay_no":req.body.stay_no,                             
        "rent_per_person":req.body.rent_per_person,
        "deposite":req.body.deposite,
        "park":req.body.park,
        "com_area":req.body.com_area,
        "com_bath":req.body.com_bath,
        "com_kitchen":req.body.com_kitchen,
        "ofc_room":req.body.ofc_room,
        "care_room":req.body.care_room,
        "store_room":req.body.store_room,
        "power_bakup":req.body.power_bakup,
        "water_supply":req.body.water_supply,
        "onerk":req.body.onerk,
        "onebhk":req.body.onebhk,
        "twobhk":req.body.twobhk,
        "threebhk":req.body.threebhk,
        "fourbhk":req.body.fourbhk,
        "lease":req.body.lease,
        "selling":req.body.selling 
    }
    // values = req.body;
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
    var sql = "INSERT INTO pgtopgdetails SET ?";
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