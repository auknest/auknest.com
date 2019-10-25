var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

var session = require('express-session')



var passport = require("passport");

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');



var app = express();
app.use(express.json());

//var express = require('express');

//Get API
var getstud1 = require('./routes/getstud');
var getprotype = require('./routes/getapi/get_pro_type');
var getproshortdetails = require('./routes/getapi/get_pro_shortdetails');
var getpropgFlatPgtopgdetails= require('./routes/getapi/get_pro_pgFlatPgtopg_details');
var getroomate = require('./routes/getapi/get_roomfinder');
var getprofile = require('./routes/getapi/get_profile');
var profiledetails = require('./routes/getapi/get_profileProdetails'); //To update the profile  details. 
var getadminpgdetail = require('./routes/getapi/get_alladmin_pgdetails');
var getadminuserdetail = require('./routes/getapi/get_total_user');
var getuserinfo =require('./routes/getapi/get_user_info');


//Post api
var protype = require('./routes/postapi/post_property_type');
var propertytype = require('./routes/postapi/post_pro_type');
var pro_pg_who_I = require('./routes/postapi/post_pg_who_I');//To Insert the property owner type info
var pro_loc = require('./routes/postapi/post_pro_location');//To insert the location details 
var pro_pg_details = require('./routes/postapi/post_pg_property');//To insert the property details 
var pro_pg_amenities = require('./routes/postapi/post_pg_amenities');//To insert the property details 
var uploadgallery = require('./routes/postapi/upload');//To insert single img the gallery pages 
var uploadmulgallery = require('./routes/postapi/mulupload'); //To insert multiple image the gallery pages 
var pgtopgproperty = require('./routes/postapi/pg_pg_property'); //To insert pg to pg proprty details. 
var pgtopgaminities = require('./routes/postapi/post_pg_pg_aminities'); //To insert pg to pg proprty details. 
var buildproperty = require('./routes/postapi/post_build_property'); //To insert building proprty details. 
var buildaminities = require('./routes/postapi/post_build_aminities'); //To insert building aminities details. 
var roomate = require('./routes/postapi/post_roomate_api'); //To insert building aminities details. 
var login = require('./routes/postapi/post_login'); //To insert login details. 


//Delete api
var deleteimg = require('./routes/deleteapi/delete_gallery_img');
var deletepro = require('./routes/deleteapi/deleteproperty');

//Update api
var updatepro=require('./routes/updateapi/update_property_status');

var bodyParser = require('body-parser');
var multer  = require('multer');
var upload = multer({ dest: '/uploads/'});

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
//Session intialize
app.use(session({
  secret: 'keyboard cat',
  resave: true,
  saveUninitialized: true,
  cookie: { secure: false }
}));

app.use(passport.initialize());
app.use(passport.session());

//Add stratergy to passport you can add multiple startegies
var passStartegies = require("./passport_init/stratergies.js");
passStartegies.local();
//passStartegies.fb();

passport.serializeUser(function(user, done) {
  //user ===> {"id":"1", "username":"Test","password":"sk34567","age":"23"}
  console.log("hello serial",user);
//save id in session to be used in deserialized
  done(null, user.u_id);
});

passport.deserializeUser(function(id, done) {
  //id is fetched from session saved from serialized 
  //db query using unique id
  //con.query(sql, (error, result) =>{
        
    //     if (!error){
    //         if(result.length>0){
                //result[0] ==> {"id":"1", "username":"Test","password":"sk34567","age":"23"}
    //             done(null,result[0]);
    //         }else{
    //             done(null,false,);
    //         }            
    //     }else{
    //         done(error,false);
    //     }
    // });    
  console.log("hello deserial",id);
  //db query to fetch frm id 
  done(null, {"u_id":id});
});

app.use(express.json());


//Login-> passport stratagies-> get login form data->
app.post('/login', passport.authenticate('local', { successRedirect: '/abc', failureRedirect: 'http://localhost/auknest.com/auknest.com/index.php?uid=0', failureFlash: false }));

app.get("/abc",isValidate, function(req, res, next){
  
  console.log("Fetching user data");
  console.log(req.user);
  console.log("Is user authenticated ",req.isAuthenticated())
  if(req.isAuthenticated()==true){
  res.redirect("http://localhost/auknest.com/auknest.com/index.php?uid="+req.user.u_id);
  }
  // res.json({"hey":"welcome"});
});



app.get("/logout", function(req, res){
     req.logout();
     res.json({"user":"logged out"});
});

function isValidate(req, res, next){
  if(req.isAuthenticated()){
    console.log("authentication middleware");
    return next();
  }
  //change to any url to be redirect when use is not logged in
  return res.redirect('http://localhost/auknest.com/auknest.com/');
}

app.get("/efg", function(req, res, next){
  console.log(req);
  res.json({"hey":"not logged in"});
});
app.use('/index', indexRouter);
app.use('/users', usersRouter);
//Get API
app.use('/getstud', getstud1);
app.use('/get_pro_type', getprotype);//To get the basic property details
app.use('/get_pro_shortdetails', getproshortdetails); //get property short details
app.use('/get_pro_pgFlatPgtopg_details', getpropgFlatPgtopgdetails); //get property short details
app.use('/get_roomfinder', getroomate);
app.use('/get_profile', getprofile);
app.use('/get_profileProdetails', profiledetails); //To insert the profile details
app.use('/get_alladmin_pgdetails', getadminpgdetail); //To insert the profile details
app.use('/get_total_user', getadminuserdetail); //To insert the profile details
app.use('/get_user_info', getuserinfo); //To insert the profile details



//Post API
app.use('/post_property_type', protype);
app.use('/post_pro_type', propertytype); // To insert the property type into database
app.use('/post_pg_who_I', pro_pg_who_I); // To insert the property Owner type into database
app.use('/post_pro_location', pro_loc); //To insert the loaction details
app.use('/post_pg_property', pro_pg_details); //To insert the property details
app.use('/post_pg_amenities', pro_pg_amenities); //To insert the property amenities
app.use('/upload', uploadgallery); //To insert the gallery pages
app.use('/mulupload', uploadmulgallery); //To insert multiple images the gallery pages
app.use('/pg_pg_property', pgtopgproperty); //To insert the pg to pg property
app.use('/post_pg_pg_aminities', pgtopgaminities); //To insert the pg to,pg aminities
app.use('/post_build_property', buildproperty); //To insert the build property
app.use('/post_build_aminities', buildaminities); //To insert the building aminities
app.use('/post_roomate_api', roomate); //To insert the roomate details
app.use('/post_login', login); //To insert the login details


//delete api
app.use('/delete_gallery_img', deleteimg); //To insert the building aminities
app.use('/deleteproperty', deletepro); //To delete the property

//Update api
app.use('/update_property_status', updatepro); //To update the property


// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

//Handel the cross browser issue. 
app.use(function(req, res, next) {
  res.header("Access-Control-Allow-Origin", "*");
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
  next();
});
// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
// module.exports = app.router;