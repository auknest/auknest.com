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
  
//Need variable to categories images like a.jpg, b.jpg ... are the hall images.
router.post('/', upload.single('avatar'), function (req, res, next) {


// router.post('/', upload.array('profile', 1), function (req, res, next) {
    // var parm=req.query;

    console.log("avtar file......", req.body);
    
   
       try {
         var table;
              if(req.body.pro_type =="pg") {
                table="pgdetails";
              }
              if(req.body.pro_type =="flat") {
              table="flatdetails";
            }
            var sql ='UPDATE '+table+' SET profile_img=? WHERE pro_id=? AND pro_type=?';
            var file=[];
            file=req.file.filename;
            console.log("single image file..........", file);
            con.query(sql, [[file], req.body.pro_id, req.body.pro_type], function (error, results, fields) {
              console.log("sql.......", sql);

                if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property single upload api sucessfully...");
                      res.end();

                }
            });
        }
    catch(Exception) {

            console.log("within  catche");
            console.log(Exception);
    }

    // req.file is the `avatar` file
    // req.body will hold the text fields, if there were any
    res.end();
  });
 
// router.post('/', function(req, res) {


  module.exports=router;