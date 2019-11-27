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

    console.log("Into  get filter pg data api");
    console.log("res............",req.query);
    console.log("re............",req.query);
    var table, c="";
    var loc=req.query['pro_locality'];
    if(req.query.pro_type=='pg'){
        table="pgdetails";
        delete req.query['pro_locality'];
        delete req.query['pro_type'];
            for (var propName in req.query) {
                console.log("name..........", propName);
                if(propName=='minbudget' || propName=='maxbudget'  ){
                    var minrent=req.query['minbudget'];
                    var maxrent=req.query['maxbudget'];
                    delete req.query['minbudget'];
                    delete req.query['maxbudget'];

                    c+=" AND expected_rent BETWEEN "+minrent+" AND "+maxrent;

                }
                else{
                console.log("result...........", "p1."+propName+"="+req.query[propName]);
                c+=" AND p2."+propName+"='"+req.query[propName]+"'";
                }
        
        }
        var cond= "WHERE p1.pro_type='pg' AND p1.pro_locality='"+loc+"'"+c;
        console.log("cond................", cond);
    }
    if(req.query.pro_type=='flat'){ 
        table="flatdetails";
        delete req.query['pro_locality'];
        delete req.query['pro_type'];
            for (var propName in req.query) {
                console.log("name..........", propName);
                if(propName=='minbudget' || propName=='maxbudget'  ){
                    var minrent=req.query['minbudget'];
                    var maxrent=req.query['maxbudget'];
                    delete req.query['minbudget'];
                    delete req.query['maxbudget'];

                    c+=" AND expected_rent BETWEEN "+minrent+" AND "+maxrent;

                }
                else{
                console.log("result...........", "p1."+propName+"="+req.query[propName]);
                c+=" AND p2."+propName+"='"+req.query[propName]+"'";
                }
        
        }
        var cond= "WHERE p1.pro_type='flat' AND p1.pro_locality='"+loc+"'"+c;
        console.log("cond................", cond);
    }//end of if flat
    if(req.query.pro_type=='building'){
        table="buildownerdetails";
        delete req.query['pro_locality'];
        delete req.query['pro_type'];
            for (var propName in req.query) {
                console.log("name..........", propName);
                if(propName=='minbudget' || propName=='maxbudget'  ){
                    var minrent=req.query['minbudget'];
                    var maxrent=req.query['maxbudget'];
                    delete req.query['minbudget'];
                    delete req.query['maxbudget'];

                    c+=" AND expected_rent BETWEEN "+minrent+" AND "+maxrent;

                }
                else{
                console.log("result...........", "p1."+propName+"="+req.query[propName]);
                c+=" AND p2."+propName+"='"+req.query[propName]+"'";
                }
        
        }
        var cond= "WHERE p1.pro_type='building' AND p1.pro_locality='"+loc+"'"+c;
        console.log("cond................", cond);
    }//end if building 
    if(req.query.pro_type=='pg_to_pg'){
        table="buildownerdetails";
        delete req.query['pro_locality'];
        delete req.query['pro_type'];
            for (var propName in req.query) {
                console.log("name..........", propName);
                if(propName=='minbudget' || propName=='maxbudget'  ){
                    var minrent=req.query['minbudget'];
                    var maxrent=req.query['maxbudget'];
                    delete req.query['minbudget'];
                    delete req.query['maxbudget'];

                    c+=" AND expected_rent BETWEEN "+minrent+" AND "+maxrent;

                }
                else{
                console.log("result...........", "p1."+propName+"="+req.query[propName]);
                c+=" AND p2."+propName+"='"+req.query[propName]+"'";
                }
        
        }
        var cond= "WHERE p1.pro_type='pg_to_pg' AND p1.pro_locality='"+loc+"'"+c;
        console.log("cond................", cond);
    }//end if building 
    //If body parameter getting.
        var sql="SELECT p1.*, p2.* FROM property AS p1 LEFT JOIN "+table+" AS p2 ON p1.pro_id=p2.pro_id "+cond;
    try { 
        console.log(sql);
        con.query(sql, (error, result) =>{
            
            if (error) throw error;
            res.send(result);
          
        });
    }
    catch(Expression)
    {
        console.log("Into catche Profile pg/Flat details api");
        console.log(Exception);
    }
});
module.exports = router; 
