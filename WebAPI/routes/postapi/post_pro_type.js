var con = require('../../db_config');
var express = require('express');
var router = express.Router();

router.post('/',(req, res) => {
    console.log("In Property type API...");
    var values = {
        pro_type:req.body.pro_type
    }
    var sql ='INSERT INTO property SET ?';
    con.query(sql, values, function (error, results, fields) {
        if (error) {
            console.log("Failed to insert the Property type" +err);
            res.sendStatus(500);
            return;
        }
        else {
            console.log("Data inserted into table property sucessfully...");
            res.sendStatus(200);
        }
    });

    res.end();


});
module.exports=router;