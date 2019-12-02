<?php
session_start();    
// echo session_id();
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../css/style.css">

<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/mobileview.css">
<link rel="stylesheet" href="../css/tablet.css">
<link rel="stylesheet" href="../css/desktop.css">


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https:/auknest.com/js/auk.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>

<body >
          
    <!-- Yellow header -->
    <div class="yellow_header" >
    <div style="float: right; display:flex;" >
       <p class="mb-15 pd-l-1 txt-white"> Find out <span style="color:blue"> What's new</span> </p>
        <div id="loginbtn">
          <button class= "mb-7 signInbtn "  onclick="showLogin()">SignIn</button>
        </div>
        
        <div class="col-xs-10" id="profileinfo" style="display:none">
          <img class="hidden-xs mb-7 pd-l-1" style="border-radius:50%;height:40px; float:right" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
          <!-- <p  class ="mb-7 pd-l-1" id="profilename"> ABC </p> -->
            <div class ="mb-7 pd-l-1" style="float: right; display:flex;">
              <a class="dropdown-toggle" id="profilename" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span id ="user_name"></span>
              <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="profilename">
                <li><a href="#" onclick=profile()>Profile</a></li>
                <li><a onclick=logout() href="#">Logout</a></li>
              </ul>
            </div>  
        </div>
        <script>
        $(document).ready(function(){
          var username=sessionStorage.getItem('user_name');
          if(username) {
                  $('#loginbtn').hide();
                  $('#profileinfo').show();
          }
          $('#user_name').html(sessionStorage.getItem('user_name'));
        });
          function logout(){
            sessionStorage.removeItem('u_id');
            sessionStorage.removeItem('user_status');
            window.location="http://localhost/auknest.com/auknest.com/index.php"
          }
        function profile(){
          console.log("Into profile..........");
          var profile_uid=sessionStorage.getItem("u_id");
          // var user_name=sessionStorage.getItem("user_name");

          console.log("Profile uid..........***", profile_uid);
          window.location="http://localhost/auknest.com/auknest.com/profile.php?u_id="+profile_uid;

        }
        </script>
      
        <!-- mobile img header -->
        <div class="shake mb-15">
        <div><img class="element" src="https://auknest.com/img/40 by 40.png"></div>
        </div>
    </div>
</div>
            <!-- White Menu Bar -->

            <div class="row" >
              
                    <div style="position: sticky; top:0; z-index:600; background:white">
                      <div class="row back-color-white">
                        <div class="col-sm-12 col-md-2 col-lg-2 back-color-white">
                         <center><img class="img-responsive" src="../img/Auk nest.jpg"/></center>
                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-10 back-color-white">
                          <div class="topnav mb-0-0" id="myTopnav" >
                                <a class= "a-txt" href="#myTopnav" class="active">HOME</a>
                                <a class= "a-txt" href="#about">ABOUT US</a>
                                <a class= "a-txt" href="#contact">WHY US?</a>
                                <!-- <a class= "a-txt" href="#about">HELP</a> -->
                                <a class= "a-txt" href="../roommateFinder/findOrPost.php">ROOMMATE FINDER</a>
                                <a href="#about"><img class="img-over-img1" src ="../img/button 170 by 70.png"/></a>
                                <a href="#about"><img class="img-over-img2" src ="../img/button yellow 170by 70.png"/></a>
                                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                                </a>
                          </div>
                        </div>
                      </div>
                  </div>
<!-- White menu -->



  
<style type="text/css">
			/********* Menu Bar Css  **********/
.topnav {
  /* overflow: hidden; */
  margin-top: 2%;
  }
  #myTopnav{
    position: sticky; 
    top:0px; 
    z-index: 100;
  }
  @media only screen and (min-width: 769px) and (max-width:1024px) {

    .topnav a {
	float: left;
	display: block;
	color: #00517e;
	text-align: center;
	padding: 14px 8px;
	text-decoration: none;
	font-size: 14px;
	font-weight: bold;
  }
  .a-txt {
    float: left;
	display: block;
	color: #3f2bfe;
	text-align: center;
	padding: 20px 20px;
	text-decoration: none;
	font-size: 15px;
	font-weight: bold;
  }
}
@media only screen and (min-width: 1025px) and (max-width:1600px) {
  .topnav a {
	float: left;
	display: block;
	color: #00517e;
	text-align: center;
	padding: 14px 22px;
	text-decoration: none;
	font-size: 14px;
	font-weight: bold;
  }
  .a-txt {
    float: left;
	display: block;
	color: #3f2bfe;
	text-align: center;
	padding: 20px 20px;
	text-decoration: none;
	font-size: 15px;
	font-weight: bold;
  }
}
   .topnav a:hover {
	text-decoration: none;
	color: #3f2bfe;
  } 
  
  .topnav a .active {
	color: #921d75;
	text-decoration: none;
  }
  
  .topnav .icon {
	display: none;
  }
</style> 