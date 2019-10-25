var con =require('../../db_config');
var express= require('express');
var router= express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.delete('/', (req,res) =>{

    if(req.query.pro_type=="pg"){
        table="pgdetails";
    }
    if(req.query.pro_type=="flat"){
        table="flatdetails";
    }
    if(req.query.pro_type=="pgTopg"){
        table="pgtopgdetails";
    }
    if(req.query.pro_type=="building"){
        table="buildownerdetails";
    }
    var sql ="DELETE FROM "+table+" WHERE pro_id='"+req.query.pro_id+"'";
    con.query(sql, (error, result) =>{
        if (error) {
            console.log("Failed to delete the Property from the details table", error)
        }
        else {
            var sql2="DELETE FROM property WHERE pro_id='"+req.query.pro_id+"'";
            con.query(sql2, (error, result) =>{

                 if (error) {
                        console.log("Failed to delete the Property from the property table", error)
                    }
                else {
                    console.log("Deleted the property");
                    res.end();
                    }
            });

        }

    });
    res.end();
});
module.exports = router; 
