var con = require('../../db_config');
var express = require('express');
// var app = require('../../app');
var router = express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.post('/',(req, res) => {

    var values ={pro_person:req.body.pro_person};
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
     console.log("values......." +values);
       try {
            var sql ='UPDATE property SET ?'+cond;
            console.log("sql.......", sql);
            con.query(sql, values, function (error, results, fields) {
                if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property who I api sucessfully...");
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
