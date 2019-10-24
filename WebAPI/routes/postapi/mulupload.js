var con =require('../../db_config');
var express= require('express');
var router= express.Router();
var multer  = require('multer');
var upload = multer({ dest: 'uploads/' });

//Handel the cross browser issue. 
router.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
  });
  console.log(".....................start......");
//Need variable to categories images like a.jpg, b.jpg ... are the hall images.
router.post('/', upload.array('imgs', 50), function (req, res, next) {

       try {
        console.log("files.............", req.files.length);

         var table;
        var multiplefiles=[];

        for(var j=0; j<req.files.length; j++){
         var keyname=req.files[j].originalname;
         keyname=keyname.replace(/\s/g,'');  
          multiplefiles.push(keyname+':'+ req.files[j].filename); 
        
        }
        console.log("file name.............", multiplefiles);
           var img_type = req.body.img_type;
          
           if(req.body.pro_type =="pg") {
             table="pgdetails";
           }
           if(req.body.pro_type =="flat") {
            table="flatdetails";
          }
          if(req.body.pro_type =="building") {
            table="buildownerdetails";
          }
          if(req.body.pro_type =="pg_to_pg") {
            table="pgtopgdetails";
          }
          if(req.body.pro_type =="roomate") {
            table="roomate";
          }
          var val=JSON.stringify(multiplefiles);
          var sql1='SELECT '+img_type+' FROM '+table+' WHERE pro_id="'+req.body.pro_id+'" AND pro_type="'+req.body.pro_type+'"';
          var sql = 'UPDATE ' +table+' SET ' +img_type+'=? WHERE pro_id=? AND pro_type=?';
          console.log("sql1......", sql1);
          console.log("sql......", sql);

          con.query(sql1, (error, result) =>{
            if(img_type=='hall_img'){
              var blobdata=JSON.parse(result[0].hall_img);
            }
            if(img_type=='bedroom_img'){
              var blobdata=JSON.parse(result[0].bedroom_img);
            } if(img_type=='washroom_img'){
              var blobdata=JSON.parse(result[0].washroom_img);
            } if(img_type=='balcony_img'){
              var blobdata=JSON.parse(result[0].balcony_img);
            }
            else {
              // var blobdata='';
              console.log("img_type is null");
            }
            console.log("result of 1 select query", result);
            if(blobdata!=null){
              console.log("blobdata ....", blobdata.length);
              console.log("multiplefiles ....", multiplefiles);

              // var jsonArray1 = blobdata.concat(multiplefiles);
              var jsonArray1 =blobdata + ',' + multiplefiles;

              var jsonArray=JSON.stringify(jsonArray1);
              console.log("json array1", JSON.stringify(jsonArray1));
              con.query(sql, [jsonArray, req.body.pro_id, req.body.pro_type], function (error, results, fields) {
                if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property multiple images upload api sucessfully...");
                      res.end(JSON.stringify(jsonArray1));

                }
            });
            }
            else {
                con.query(sql, [val, req.body.pro_id, req.body.pro_type], function (error, results, fields) {     
                 console.log("val...............", val);
                  if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property multiple images upload api sucessfully...");
                      res.end(val);
                }
             });
            }
          });         
        }
    catch(Exception) {
            console.log("within  catche");
            console.log(Exception);
    }
    res.end(multiplefiles.toString());
  });

  module.exports=router;