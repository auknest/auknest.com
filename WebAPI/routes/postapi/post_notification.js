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
      var sql ='INSERT INTO notification SET ?';
    console.log("sql.......", sql);
    console.log("req body.........", req.body );
      var sql1="Update users SET n_count=n_count+1";
    con.query(sql, req.body, function(error, results, fields) {
        con.query(sql1,"", function(error, results, fields) {
       
            if(error) {
                console.log("Failed to insert user notification count details", error)
            }
            else {
                console.log("Data inserted into table user notification count api sucessfully...");
           }
        });

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