var con = require('../../db_config');
var express = require('express');
var app = require('../../app');
var router = express.Router();

//Handel the cross browser issue. 
// router.use(function(req, res, next) {
//     res.header("Access-Control-Allow-Origin", "*");
//     res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
//     next();
//   });

router.post('/',(req, res) => {

    var values =req.body;
    console.log("In Property Who I API...", values);

    try {
            var sql ='INSERT INTO property SET ?';
            con.query(sql, values, function (error, results, fields) {
                if (error) {
                    console.log("Failed to insert the Person type")
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
