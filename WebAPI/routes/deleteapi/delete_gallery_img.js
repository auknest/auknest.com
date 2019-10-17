var con =require('../../db_config');
var express= require('express');
var router= express.Router();

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });

router.delete('/', (req,res) =>{

    console.log("Into delete profile image api");
    console.log(req.query);
    console.log(req.body);

    var table;
    if(req.param('pro_type')=="pg"){
        table="pgdetails";
    }
    if(req.param('pro_type')=="flat"){
        table="flatdetails";
    }
    if(req.param('pro_type')=="pgTopg"){
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
      var re=JSON.parse(result[0].profile_img.toString());
      re=JSON.stringify(re);
      console.log("profile image...........", re);

      if(re==req.body.profile_img){
        console.log("compaire suceess");
      }
      var sql1= "UPDATE pgdetails SET profile_img=NULL";
      console.log(sql1);
      con.query(sql1, (error, result) =>{
        if (error) throw error;

          res.send(result);

      });

          // res.send(result);
      });
      
});
module.exports = router; 
