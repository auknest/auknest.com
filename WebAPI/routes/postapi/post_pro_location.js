var con = require('../../db_config');
var express= require('express');
var router = express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

  router.post('/', (req, res) => {
    var values = {  pro_city:req.body.pro_city,
                    pro_locality:req.body.pro_locality,
                    pro_address:req.body.pro_address,
                    pro_name:req.body.pro_name 
                };
                console.log("..........values" +values);

    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";

    console.log(req.body);
    try {
        var sql = "UPDATE property SET ? "+cond;

        console.log("sql.......", sql);
        con.query(sql, values, function(error, results, fields) {
            if (error) {
                console.log("Failed to insert the Person type", error)
            }
            else {
                 console.log("Data inserted into table property location api sucessfully...");
                  res.end();
            }
        });

    }
    catch(Exception) {

        console.log("within  post_loaction api catche");
        console.log(Exception);
    }    
res.end();
  });
  module.exports=router;
