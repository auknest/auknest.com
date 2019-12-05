var con =require('../../db_config');
var express= require('express');
var router= express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.get('/', (req,res) =>{

    console.log("Into  get notification api");
    console.log(req.query);
    var u_id=req.query.uid;

    // var cond= "WHERE date";
    // var sql="SELECT * FROM in_properties WHERE u_id='"+req.query+"' ORDER BY date DESC";
    var sql="SELECT * FROM in_properties GROUP BY id HAVING uid="+u_id+" ORDER BY date DESC";

    console.log(sql);
    con.query(sql, (error, result) =>{
            if(error) {
                console.log("Failed to fetch the interested property details", error)
            }
            else {
                console.log("Data fetched from interested propertit table api sucessfully...");
           }
        res.send(result);
    });
 

});
module.exports = router; 