var con = require('../../db_config');
// var common = require('./common');
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
    values={
      "property_for": req.body.property_for,
      "pro_id": req.body.pro_id,
      "pro_type" : req.body.pro_type,
      "date": req.body.date,
      "property_age": req.body.property_age,
      "floor_no": req.body.floor_no,
      "onerk": req.body.onerk,
      "onebhk": req.body.onebhk,
      "twobhk": req.body.twobhk,
      "threebhk": req.body.threebhk,
      "fourbhk": req.body.fourbhk,
      "park": req.body.park,
      "com_bath": req.body.com_bath,
      "com_kitchen": req.body.com_kitchen,
      "ofc_room": req.body.ofc_room,
      "care_room": req.body.care_room,
      "store_room": req.body.store_room,
      "power_bakup": req.body.power_bakup,
      "water_supply": req.body.water_supply,     
      "gate_security": req.body.gate_security,
      "lift": req.body.lift
    }
    var sql = "INSERT INTO buildownerdetails SET ?";
    var sql1 = "SELECT pro_id FROM buildownerdetails WHERE pro_id='"+req.body.pro_id+"'";
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
    var sql2 = "UPDATE buildownerdetails SET ? "+cond;
    
    try {
      con.query(sql1, function(error, results, fields){
        console.log("Result ...................", results.length);
        if(results.length>0){
          con.query(sql2, values, function(error, results, fields) {
            if (error) {
                console.log("Failed to Update the building  property details", error)
            }
            else {
                console.log("Data Updated into table buildownerdetails table sucessfully...");
                  res.end();
            }
          });
        }
        else{
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
      });
    }
    catch(Excepetion) {
      console.log("within  catche");
      console.log(Exception);
    }
    res.end();
});
module.exports=router;