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
    console.log("Into  get all pg details for admin api");
    console.log(req.query);
    
    var table;
    if(req.query.pro_type=='pg'){
        table="pgdetails";
    }
    if(req.query.pro_type=='flat'){
        table="flatdetails";
    }
    if(req.query.pro_type=='building'){
        table="buildownerdetails";
    }
    if(req.query.pro_type=='pg_to_pg'){
        table="pgtopgdetails";
    }
    if(req.query.property_status!=''){
        if(req.query.property_status=='1')//TO show the auknest verified property like PG / FLAT...
        {
            console.log("....Into property auknest verified");
            if(req.query.loc){
                var cond="WHERE p1.pro_locality='"+req.query.loc+"' AND p1.property_status=1";
            }
            else{
            var cond="WHERE 1=1 AND p1.property_status=1";
            }
            var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
            
        }
        if(req.query.property_status=='2')//TO show the featchered verified property like PG / FLAT...
        {
            if(req.query.loc){
                var cond="WHERE p1.pro_locality='"+req.query.loc+"' AND p1.property_status=2";
            }
            else{
            var cond="WHERE 1=1 AND p1.property_status=2";
            }
            var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
        }
        if(req.query.property_status=='0')//TO show the unverified property like PG / FLAT...
        {
            if(req.query.loc){
                var cond="WHERE p1.pro_locality='"+req.query.loc+"' AND p1.property_status=0";
            }
            else{
            var cond="WHERE 1=1 AND p1.property_status=3";
            }
            var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
        }
    }
    else{
        if(req.query.loc){
            var sql="SELECT p1.*, p2.* FROM "+table+" AS p1 LEFT JOIN property AS p2 ON p2.pro_id=p1.pro_id WHERE p2.pro_locality='"+req.query.loc+"'";
        }
        else{
        var sql="SELECT p1.*, p2.* FROM "+table+" AS p1 LEFT JOIN property AS p2 ON p2.pro_id=p1.pro_id ";
        }
    }
    console.log(sql);
    con.query(sql, (error, result) =>{
        
        if (error) throw error;
        console.log("result length to send the row count.......", result.length);
        res.send(result);
    });
});
module.exports = router;