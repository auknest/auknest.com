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

    console.log("Into  get property type api");
    console.log(req.param);

    var cond= "WHERE pro_id='"+req.param('pro_id')+"'";
    var sql="SELECT * FROM property "+cond;
    console.log(sql);
    con.query(sql, (error, result) =>{
        
        if (error) throw error;

        res.send(result);
    });
 

});
module.exports = router; 
