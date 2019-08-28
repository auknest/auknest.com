var mysql = require('mysql');

var con = mysql.createConnection({
  // host: "185.224.138.152",
  // user: "u344703846_root",
  // password: "root123",
  // database: "u344703846_volta",

  host:'localhost',
  user:'root',
  passeord:"",
  database:"e",
});
con.connect(function(err) {
    if (err) throw err;
    else {
      console.log("Connected to database .........!");
    }
  });
  con.on('error', function(err) {
    console.log(err.code);
  });

module.exports=con;