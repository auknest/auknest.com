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
    console.log("Within the pg to pg aminities api");
    var table, values;
    values = {
        "TV":req.body.TV,
        "DTH":req.body.DTH,
        "Sofa":req.body.Sofa,
        "Shoe_rak":req.body.Shoe_rak,
        "Wifi":req.body.Wifi,
        "Curtains":req.body.Curtains,
        "CCTV":req.body.CCTV,
        "Double_Locker":req.body.Double_Locker,
        "CenterTable":req.body.CenterTable,
        "Buckets_and_mug":req.body.Buckets_and_mug,
        "Single_Locker":req.body.Single_Locker,
        "Bed_mattress_and_bedsheet":req.body.Bed_mattress_and_bedsheet,
        "descr":req.body.descr
    }
    var cond = " WHERE pro_id='"+req.body.pro_id+"' AND pro_type='"+req.body.pro_type+"'";
    var sql = "UPDATE pgtopgdetails SET ? "+cond;
    console.log("sql.......", sql);
    try {
        con.query(sql, values, function(error, results, fields) {
            if(error) {
                console.log("Failed to insert the Pg / flat aminities property details", error)
            }
            else {
                console.log("Data inserted into table Pg / flat aminities property details api sucessfully...");
                res.end();
            }
            
        });
    }
catch(Exception) {
    console.log("Whiin catche");
    console.log(Exception);
}

});

module.exports=router;