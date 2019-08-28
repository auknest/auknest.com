var con = require('../../db_config');
var express = require('express');
var router = express.Router();


router.post('/', (req, res) => {
    console.log("@@@@@@@@@@@");
    // console.log(req.body.data);
    var c= [{
        name:req.body.data[0].name,
        id:req.body.data[0].id,
    },
    {
        name:req.body.data[1].name,
        id:req.body.data[1].id,
    },
   
];
console.log(c);
var cs =[];
 cs.push(c);
res.send(cs);
} );
module.exports=router;