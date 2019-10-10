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
    try {
      
        console.log("Into Insert login details");
        values=req.body;

        var sql ='INSERT INTO users SET ?';
        console.log(sql);
        console.log("values........", values);
        con.query(sql, values, function (error, results, fields) {
            if (error) {
                console.log(error);
                console.log("Failed to insert the Property type")
            }
            else {
                 console.log("Data inserted into table property sucessfully...");
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
