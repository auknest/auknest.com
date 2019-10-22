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
           
            var sql ='UPDATE ' +table+' SET profile_img=? WHERE pro_id=? AND pro_type=?';
            console.log("sql.......", sql);
            console.log("file.........",req.file);
            var file=[];
            var filebase= req.file.filename;
            var filekey=req.file.originalname;
            filekey=filekey.replace(/\s/g,'');  
            file.push(filekey+':'+filebase); 

            // file=[
            //       [filekey]:filebase
            // ];
            file=JSON.stringify(file);
            console.log("single image file..........", file);
            con.query(sql, [[file], req.body.pro_id, req.body.pro_type], function (error, results, fields) {
              console.log("sql.......", sql);

                if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property single upload api sucessfully...");
                      // res.end('aaaaaa');
                      res.end(filekey+':'+filebase);

                }
            });
        }
    catch(Exception) {

            console.log("within  catche");
            console.log(Exception);
    }
    res.end(filekey+':'+filebase);
  });
 
// router.post('/', function(req, res) {


  module.exports=router;