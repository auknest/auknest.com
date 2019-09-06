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

var getstud1 = require('./routes/getstud');
var protype = require('./routes/postapi/post_property_type');
var propertytype = require('./routes/postapi/post_pro_type');
var pro_pg_who_I = require('./routes/postapi/post_pg_who_I');//To Insert the property owner type info
var pro_loc = require('./routes/postapi/post_pro_location');//To insert the location details 



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
app.use('/getstud', getstud1);
app.use('/post_property_type', protype);
app.use('/post_pro_type', propertytype); // To insert the property type into database
app.use('/post_pg_who_I', pro_pg_who_I); // To insert the property Owner type into database
app.use('/post_pro_location', pro_loc); //To insert the loaction details


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