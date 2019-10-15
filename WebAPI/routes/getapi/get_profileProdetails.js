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
    if(req.query.type=='pg'){
        table="pgdetails";
    }
    //If body parameter not getting.
    var cond= "WHERE p1.pro_type='"+req.query.type+"' AND p1.u_id='"+req.query.u_id+"'";
    //If body parameter getting then 
    // var cond="WHERE p1.pro_type='"+req.query.type+"' AND (p1.u_id='"+req.query.u_id+"' AND pro_id='"+req.body.pro_id+"'";
    try {
       
        var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN pgdetails AS p2 ON p1.u_id=p2.u_id "+cond;
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
