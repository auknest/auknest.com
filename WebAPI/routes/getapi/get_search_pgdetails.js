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

    console.log("Into  get property profile details type api");
    console.log(req.query);
    var table;
    if(req.query.pro_type=='pg'){
        table="pgdetails";
        var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p2.pg_for='"+req.query.pg_for+"' AND (p1.pro_address LIKE '%"+req.query.loc+"%' AND p2.expected_rent BETWEEN '"+req.query.min+"' AND '"+req.query.max+"'))";
    }
    if(req.query.pro_type=='flat'){
        table="flatdetails";
        var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p2.flat_room_type='"+req.query.flat_room_type+"' AND (p1.pro_address LIKE '%"+req.query.loc+"%' AND p2.expected_rent BETWEEN '"+req.query.min+"' AND '"+req.query.max+"'))";
    }
    if(req.query.pro_type=='building'){
        table="buildownerdetails";
		var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p1.pro_locality LIKE '%"+req.query.loc+"%' AND p2.expected_rent BETWEEN '"+req.query.min+"' AND '"+req.query.max+"')";

    }
    if(req.query.pro_type=='pg_to_pg'){
        table="pgtopgdetails";
		var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p1.pro_locality LIKE '%"+req.query.loc+"%' AND p2.expected_rent BETWEEN '"+req.query.min+"' AND '"+req.query.max+"')";


    }
    //If body parameter getting.
        // var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p1.pro_address LIKE '%"+req.query.loc+"%' AND p2.expected_rent BETWEEN '"+req.query.min+"' AND '"+req.query.max+"')";
        var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
    try { 
        console.log(sql);
        con.query(sql, (error, result) =>{
            
            if (error) throw error;
            res.send(result);
          
        });
    }
    catch(Expression)
    {
        console.log("Into catche Profile pg/Flat details api");
        console.log(Exception);
    }
});
module.exports = router; 
