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

    var sql ="SELECT "+req.body.img_type+" FROM "+table+" WHERE pro_id='"+req.param('pro_id')+"'";
    console.log("sql...", sql);
    con.query(sql, (error, result) =>{
      var img_type2=req.body.img_type;
          if(req.body.img_type=="profile_img"){
            var img_type1=result[0].profile_img;
          }
          if(req.body.img_type=="hall_img"){
            var img_type1=result[0].hall_img;
          } 
          if(req.body.img_type=="bedroom_img"){
            var img_type1=result[0].bedroom_img;
          }
          if(req.body.img_type=="washroom_img"){
            var img_type1=result[0].washroom_img;
          }
          if(req.body.img_type=="balcony_img"){
            var img_type1=result[0].balcony_img;
          }
          if(req.body.img_type=="other_img"){
            var img_type1=result[0].other_img;
          }
        console.log("image type 1..............", JSON.parse(img_type1));
        
      var re=JSON.parse(img_type1);
      var a=req.body.imgname+',';
      console.log("repalec string....",a);
      if(re.includes(a)){
        var ret = re.replace(a,'');


        console.log("return tru.........", ret);
      }
      else {
        var ret = re.replace(req.body.imgname,'');
        console.log("return false.........", ret);
      }
      // // re.toString();
      // console.log("SELECT query result image name...........", re);
      // // var imagename1=JSON.stringify(req.body.imgname);
      // var imagename1=req.body.imgname.toString();

      // console.log("repace image name.........", imagename1);

      // if(re.includes("'"+imagename1+"'"+",")){
      //   var ret = re.replace(imagename1+",",'')
      //   console.log("replaced string is last string...........", ret);


      // }else{
       
      //   var idx = re.indexOf(imagename1);
      //   if (idx != -1) re.splice(idx, 1);



      //   console.log("replaced string is last string without comma...........", re);
      // }
      
      var sql1 = 'UPDATE ' +table+' SET '+req.body.img_type+'=? WHERE pro_id="'+req.param('pro_id')+'" AND pro_type="'+req.param('pro_type')+'"';
      console.log("sql1...", sql1);
      var t=JSON.stringify(re);
      console.log("t...", t);

      con.query(sql1,t, function (error, results, fields) {
        if (error) {
            console.log("Failed to insert the Person type", error)
        }
        else {
             console.log("Data inserted into table property multiple images upload api sucessfully...");
              }
     });

     });
          res.send(req.body.imgname);
    // var cond= "WHERE pro_id='"+req.param('pro_id')+"'";
    // var sql="SELECT * FROM "+table+" "+cond;
    // console.log(sql);
    // con.query(sql, (error, result) =>{
        
    //   if (error) throw error;
    //   var re=JSON.parse(result[0].profile_img.toString());
    //   re=JSON.stringify(re);
    //   console.log("profile image...........", re);

    //   if(re==req.body.profile_img){
    //     console.log("compaire suceess");
    //   }
    //   var sql1= "UPDATE pgdetails SET profile_img=NULL";
    //   console.log(sql1);
    //   con.query(sql1, (error, result) =>{
    //     if (error) throw error;

    //       res.send(result);

    //   });

    //   });
      
});
module.exports = router; 
