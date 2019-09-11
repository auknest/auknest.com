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
 
router.post('/', upload.array('profile', 2), function (req, res, next) {
    var parm=req.query;

    console.log("avtar file......", req.body);
    // req.file is the `avatar` file
    // req.body will hold the text fields, if there were any
    res.end();
  });
 
// router.post('/', function(req, res) {


  module.exports=router;