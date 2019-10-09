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

  console.log("query data.........",req.query);
  var sql;
  if(req.query.id){
     sql ="SELECT * FROM roomate WHERE u_id="+req.query.u_id+" AND id="+req.query.id;
  }
  else {
   sql ="SELECT * FROM roomate ORDER BY time DESC";
  }
  
  console.log("Sql...........", sql);
  con.query(sql, (error, result) => {
    if (error) throw error;
    res.send(result);

  });    
});

module.exports = router; 
