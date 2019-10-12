var con = require('../db_config');
var passport = require('passport')
  , LocalStrategy = require('passport-local').Strategy;
  //,FacebookStrategy = require('passport-facebook').Strategy;
  var session = require('express-session')
 
exports.local = function(){ return passport.use(new LocalStrategy({
    usernameField: 'email',
    passwordField: 'pass'
  },
  function(username, password, done) {
      console.log("User name and pass");
      console.log(username, password);
      // fetch user from db 
      var sql="SELECT u_id,email,password FROM users WHERE email='"+username+"' AND password="+password;
      console.log(sql);
      con.query(sql, (error, result) =>{

        if (!error){
          // console.log("result.........", result);
           done(null,result[0]);

        
   
    //         if(result.length>0){
                //result[0] ==> {"id":"1", "username":"Test","password":"sk34567","age":"23"}
    //             done(null,result[0]);
    //         }else{
    //             done(null,false,{"message":"user not found in db"});
    //         }            
        }else{
             done(null,false);
        }
    });    
        //logic of pass encryption
      // if(password == "12345"){
        //Succes to be passed as done(err, status, message)
        //status true/data is success/true
        //status false/0 undefined is failed/false
        // done(null,{ "id":"1","Successfull":"test"});
      // }else{
          //not authenticated
        // done(null, false);
      // }
    // User.findOne({ username: username }, function(err, user) {
    //   if (err) { return done(err); }
    //   if (!user) {
    //     return done(null, false, { message: 'Incorrect username.' });
    //   }
    //   if (!user.validPassword(password)) {
    //     return done(null, false, { message: 'Incorrect password.' });
    //   }
    //   return done(null, user);
    // });
  }
));
}

// exports.fb = function(){
//     return passport.use(new FacebookStrategy({
//         clientID: "FACEBOOK_APP_ID",
//         clientSecret: "FACEBOOK_APP_SECRET",
//         callbackURL: "http://www.example.com/auth/facebook/callback"
//       },
//       function(accessToken, refreshToken, profile, done) {
       
//       }
//     ));
// }