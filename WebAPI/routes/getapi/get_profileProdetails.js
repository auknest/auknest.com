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
    //If body parameter getting.
    if(req.query.pro_id){
        var cond="WHERE p1.pro_type='"+req.query.pro_type+"' AND (p1.u_id='"+req.query.u_id+"' AND p1.pro_id='"+req.query.pro_id+"')";
        var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
    }
    else {
    var cond= "WHERE p2.pro_type='"+req.query.pro_type+"' AND p2.u_id='"+req.query.u_id+"'";
    var sql="SELECT p1.*, p2.* FROM "+table+" AS p1 LEFT JOIN property AS p2 ON p2.pro_id=p1.pro_id "+cond;

    }
    try {
       
        console.log(sql);
        con.query(sql, (error, result) =>{
            
            if (error) throw error;
            if(result!=''){
                if(result[0].profile_img!=null){
                    console.log(result[0].profile_img.toString());
                    result[0].profile_img=JSON.parse(result[0].profile_img.toString());
                }
                if(result[0].hall_img!=null){
                    result[0].hall_img=JSON.parse(result[0].hall_img.toString());
                }
                if(result[0].hall_img!=null){
                    result[0].bedroom_img=JSON.parse(result[0].bedroom_img.toString());
                }
                if(result[0].hall_img!=null){
                    result[0].washroom_img=JSON.parse(result[0].washroom_img.toString());
                }
                if(result[0].hall_img!=null){
                    result[0].balcony_img=result[0].balcony_img?JSON.parse(result[0].balcony_img.toString()):null;
                }
                if(result[0].hall_img!=null){
                    result[0].other_img=result[0].other_img?JSON.parse(result[0].other_img.toString()):null;
                }
    
            // console.log("profile image...........", result[0].balcony_img);
    
            res.send(result);
            }

            //res.send(result);
          
        });
    }
    catch(Expression)
    {
        console.log("Into catche Profile pg/Flat details api");
        console.log(Exception);
    }
});
module.exports = router; 
