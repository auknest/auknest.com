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

  console.log("Into profile details api");
  var cond=" WHERE u_id='"+req.query['u_id']+"'";
  var sql="SELECT name, email,phone FROM users "+cond;
  console.log(sql);
  con.query(sql, (error, result) =>{
        console.log("result......", result[0]);
        if (error) throw error;
        res.send(result);
  });


});
module.exports=router;