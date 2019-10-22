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

    console.log("Into  get pg/flat/building/pg to pg details api");
    console.log(req.param('pro_id'));

    // console.log(req.params("pro_id"));
    var table;
    if(req.param('pro_type')=="pg"){
        table="pgdetails";
    }
    if(req.param('pro_type')=="flat"){
        table="flatdetails";
    }
    if(req.param('pro_type')=="pg_to_pg"){
        table="pgtopgdetails";
    }
    if(req.param('pro_type')=="building"){
        table="buildownerdetails";
    }

    var cond= "WHERE pro_id='"+req.param('pro_id')+"'";
    var sql="SELECT * FROM "+table+" "+cond;
    console.log(sql);
    

    con.query(sql, (error, result) =>{
        
        if (error) throw error;
        console.log(result[0].profile_img.toString());
        result[0].profile_img=JSON.parse(result[0].profile_img.toString());
        result[0].hall_img=JSON.parse(result[0].hall_img.toString());
        result[0].bedroom_img=JSON.parse(result[0].bedroom_img.toString());
        result[0].washroom_img=JSON.parse(result[0].washroom_img.toString());
        result[0].balcony_img=result[0].balcony_img?JSON.parse(result[0].balcony_img.toString()):null;
        result[0].other_img=result[0].other_img?JSON.parse(result[0].other_img.toString()):null;

        console.log("profile image...........", result[0].balcony_img);

        res.send(result);
    });
 });
module.exports = router; 
