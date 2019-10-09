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
  console.log("files.............", req);

       try {
        console.log("files.............", req.files.length);

         var table;
         var file=[];
         console.log("file.............", req.files.length);

           for(var i=0; i<req.files.length;i++)
           {
            file.push(req.files[i].filename);
           }
           
           console.log(file);
           file= file.toString();

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
          
           var sql = 'UPDATE ' +table+' SET ' +img_type+'=? WHERE pro_id=? AND pro_type=?';
           console.log("SQL....",sql);
            con.query(sql, [[file], req.body.pro_id, req.body.pro_type], function (error, results, fields) {
                if (error) {
                    console.log("Failed to insert the Person type", error)
                }
                else {
                     console.log("Data inserted into table property multiple images upload api sucessfully...");
                      res.end();

                }
            });
        
        }
    catch(Exception) {

            console.log("within  catche");
            console.log(Exception);
    }
    res.end();
  });

  module.exports=router;