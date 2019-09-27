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
    console.log("Into get pg short details api");
    console.log(req.param('pro_id'));
    var cond= "WHERE pro_id='"+req.param('pro_id')+"' AND pro_type='"+req.param('pro_type')+"'";

    var sql ="SELECT * FROM pgdetails "+cond;
    console.log(sql);

    con.query(sql, (error, result) =>{
        if (error) throw error;
        result[0].profile_img=result[0].profile_img.toString();
        console.log("result profile...........", result);

        res.send(result);
    });
    
});
module.exports = router; 
