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
            for(var i=0;i<result.length;i++){
              if(result!=''){
                if(result[i].profile_img!=null){
                    console.log(result[0].profile_img.toString());
                    result[i].profile_img=JSON.parse(result[i].profile_img.toString());
                }
                if(result[i].hall_img!=null){
                    result[i].hall_img=JSON.parse(result[i].hall_img.toString());
                }
                if(result[i].bedroom_img!=null){
                    result[i].bedroom_img=JSON.parse(result[i].bedroom_img.toString());
                }
                if(result[i].washroom_img!=null){
                    result[i].washroom_img=JSON.parse(result[i].washroom_img.toString());
                }
                if(result[i].balcony_img!=null){
                    result[i].balcony_img=result[i].balcony_img?JSON.parse(result[i].balcony_img.toString()):null;
                }
                if(result[i].other_img!=null){
                    result[i].other_img=result[i].other_img?JSON.parse(result[i].other_img.toString()):null;
                }    
              
                }
            }
            
            // }

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
