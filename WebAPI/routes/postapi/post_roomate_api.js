var con = require('../../db_config');
var express = require('express');
var router = express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.post('/',(req, res) => {
 
  var timestamp=Math.floor(new Date().getTime()/1000.0);
  console.log("timestamp...", timestamp);
  // var dateUTC = new Date(timestamp * 1000);
  // var dateUTC = dateUTC.getTime() 
  // var dateIST = new Date(dateUTC);
  
  //date shifting for IST timezone (+5 hours and 30 minutes) Used for the get time api
  // dateIST.setHours(dateIST.getHours() + 5); 
  // dateIST.setMinutes(dateIST.getMinutes() + 30);
  // console.log("min..............", dateIST);


  values = {
    "r_descr":req.body.r_descr,
    "time":timestamp,
    "u_id":"1",
    "user_name":req.body.user_name,
  };
  var sql ='INSERT INTO roomate SET ?';
console.log("sql......", sql);
  try {
        con.query(sql, values, function (error, results, fields) {
          if (error) {
              console.log("Failed to insert the roomate details")
          }
          else {
              console.log("Data inserted into table roomate sucessfully...");
                res.end();

          }
      });
  }
  catch(Exception) {

    console.log("within  catche");
    console.log(Exception);
} 
    res.end();
  });
  module.exports=router;