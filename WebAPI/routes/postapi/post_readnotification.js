var con =require('../../db_config');
var express= require('express');
var router= express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.post('/', (req,res) =>{

  console.log("Into profile details api");
  console.log(req.body);

  var cond=" WHERE pro_id='"+req.body['pro_id']+"'";
  var values=req.body;
  var sql="UPDATE notification SET not_status=1" +cond; 
  console.log(sql);
  console.log(values);
  try {
    con.query(sql, values, function (error, results, fields) {
        if (error) {
            console.log("Failed to insert the Property type")
        }
        else {
            console.log("Data updated into table users sucessfully...");
            res.end();
        }
        });
    }
  catch(Exception) {
        console.log("within  post_profile catche");
        console.log(Exception);
  } 
});
module.exports=router;