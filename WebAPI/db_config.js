var mysql = require('mysql');

var con = mysql.createConnection({
  // Hostinger Server Credentials
    // host: "185.224.138.152",
    // user: "u344703846_root",
    // password: "root123",
    // database: "u344703846_volta",

  // Localhost Credentials
    host:'localhost',
    user:'root',
    password:"",
    database:"e",
    
  // Hostripples Server Credentials
    // host:"india5.ownmyserver.com",// Host name
    // user:"innoluti_root", // Mysql username
    // password:"zlNQjeOR(3~v", // Mysql password
    // database:"innoluti_testing", // Database name
});
con.connect(function(err) {
    if (err){
      console.log("Error in connnect",err);
    }else {
      console.log("Connected to database .........!");
    }
  });
  // con.end(function(err) {
  //   if (err) {
  //     return console.log('error:' + err.message);
  //   }
  //   console.log('Close the database connection.');
  // });
  con.on('error', function(err) {
    console.log("On db error");
    console.log(err.code);
    console.log(err);
    if(err.code=='PROTOCOL_CONNECTION_LOST') {
      console.log("inside recon");
      con.destroy();
      // con.end();

    }
  });
 

module.exports=con; 
