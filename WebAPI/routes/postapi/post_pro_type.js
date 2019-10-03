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

// var values =req.body;
    var url_parm=req.body.url_parm;
    var values;
    console.log("In Property type API...", req.body);

    try {
            cond=" WHERE pro_id='"+req.body.pro_id+"' ";
            if(req.body.status==1) {
                console.log("Into Update query");
                 values={
                    "pro_type":req.body.pro_type,
                    "status":req.body.status
                }
                var sql="UPDATE property SET ?" +cond;
            }
            else {
                console.log("Into Insert query");
                values=req.body;
                var sql ='INSERT INTO property SET ?';
            
            }
            console.log(sql);
            console.log(values);
            con.query(sql, values, function (error, results, fields) {
                if (error) {
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
