var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');



var app = express();
app.use(express.json());

var express = require('express');

//Get API
var getstud1 = require('./routes/getstud');
var getproshortdetails = require('./routes/getapi/get_pro_shortdetails');

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

app.use(express.json());

app.use('/index', indexRouter);
app.use('/users', usersRouter);
//Get API
app.use('/getstud', getstud1);
app.use('/get_pro_shortdetails', getproshortdetails); //get property short details

//Post API
app.use('/post_property_type', protype);
app.use('/post_pro_type', propertytype); // To insert the property type into database
app.use('/post_pg_who_I', pro_pg_who_I); // To insert the property Owner type into database
app.use('/post_pro_location', pro_loc); //To insert the loaction details
app.use('/post_pg_property', pro_pg_details); //To insert the property details
app.use('/post_pg_amenities', pro_pg_amenities); //To insert the property amenities
app.use('/upload', uploadgallery); //To insert the gallery pages
app.use('/mulupload', uploadmulgallery); //To insert multiple images the gallery pages
app.use('/pg_pg_property', pgtopgproperty); //To insert the gallery pages



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