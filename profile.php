<?php include 'menu.html';?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="./js/jquery.loadTemplate-1.4.4.min.js"></script>

<style>
/* body {
  margin: 0;
  font-family: "Lato", sans-serif;
} */

.sidebar {
  margin-top: 0px;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
    <div>
</div>
<div>
<div class="sidebar">
  <a>Details</a>
  <a id="defaultOpen" onclick="openCity(event, 'info')" class="tablinks" >Basic Profile</a>
  <a onclick="openCity(event, 'PG');loadProducts('pg')" class="tablinks" >Posted PG</a>
  <a  onclick="openCity(event, 'flats')" class="tablinks" >Posted Flats</a>
  <a onclick="openCity(event, 'build')" class="tablinks" >Posted building</a>
  <a  onclick="openCity(event, 'pg-pg')" class="tablinks" >Posted PG-PG</a>
  <a onclick="openCity(event, 'properties')" class="tablinks">Intersted properties</a>

</div>
</div>
<div class="content">
<div id="info" class="tabcontent">
  <h3>Edit Your profile</h3>
  <div class="row">
        <div class="col-xs-4 col-md-2 col-lg-2">
            <label for="name">NAME</label>
        </div>
        <div class="col-xs-8 col-md-6 col-lg-6">
            <input id="name" class="form-control" type="text">
        </div>
 </div>
 <br>
 <div class="row">
        <div class="col-xs-4 col-md-2 col-lg-2">
            <label for="name">EMAIL</label>
        </div>
        <div class="col-xs-8 col-md-6 col-lg-6">
            <input  id="email" class="form-control" type="text" readonly>
        </div>
 </div>
 <br>
 <div class="row">
        <div class="col-xs-4 col-md-2 col-lg-2">
            <label for="name">PHONE NUMBER</label>
        </div>
        <div class="col-xs-8 col-md-6 col-lg-6">
            <input id="phone" class="form-control" type="text">
        </div>
 </div>
 <br>
 <div class="width-eighty m-auto">
            <center>
            <button id="ajax-save-profile" class="btn-property back-color-yellow red-font">Save &amp; Profile</button>
            </center>
</div>
</div>
<div id="PG" class="tabcontent">

</div>
<div id="flats" class="tabcontent">
  <h3>L</h3>
  <p>London the capital city of England.</p>
</div>
<div id="build" class="tabcontent">
  <h3>London</h3>
  <p>Lo is the capital city of England.</p>
</div>
<div id="pg-pg" class="tabcontent">
  <h3>London</h3>
  <p>Lon is the capital city of England.</p>
</div>
<div id="properties" class="tabcontent">
  <h3>London</h3>
  <p>Lond is the capital city of England.</p>
</div>
</div>

</body>
</html>
<script>
var details = [];

function loadProductDetails(product) {
	$(".container").loadTemplate(
		$("#prodTemplt"), product, {append:true}
	);
}

function loadProducts(type) {
  var parm=window.location.search.substring(1);
  var url_parm = parm ? parm : '';
  var protype=type;
	//get data from server..
	$.ajax({
		url:"http://localhost:3000/get_profileProdetails?type="+protype+"&"+url_parm,
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
			console.log(res);
		// /	details = res.productInfo;
			for (var i = 0; i < res.length; i++) {
        // loadProductDetails(res[i]);
        var yyyy="<div class=\"mb-tb-5per\">"+
        "<div class=\"row\">"+
        "<div class=\"col-sm-3 col-md-3 col-lg-3\">"+
        "</div>"+
        "<div class=\"col-sm-8 col-md-8 col-lg-8\">"+
            "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important\">"+
                "<div class=\"row\">"+
                    "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">"+
                        res[i].pro_type+"&nbsp; for &nbsp;<span id=\"pg_for\">"+res[i].pg_for+"</span><br>"+
                        "<span id=\"result\"></span>"+

                        "<span>"+res[i].pro_locality+","+res[i].pro_city+"</span>"+
                    "</div>"+
                "</div>"+
                "<hr style=\"margin-top:0px !important\">"+
                "<div class=\"row\">"+
                    "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                        "<span>Room Type</span><br>"+
                        "<span id=\"room_type\" class=\"bold\">"+res[i].pg_room_type+"</span>"+
                    "</div>"+
                    "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                        "<span>Rent</span><br>"+
                        "<span id=\"rent\" class=\"bold\">"+res[i].expected_rent+"/- </span>"+
                    "</div>"+
                    "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                        "<span>Deposite</span><br>"+
                        "<span id=\"deposite\" class=\"bold\">"+res[i].security_amt+"/-</span>"+
                    "</div>"+
                "</div>"+
                "<hr style=\"margin-top:0px !important\">"+
                "<div class=\"row\">"+
                        "<div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 center\">"+
                            "<img class=\"profile_img img-responsive\" src=\"\">"+
                        "</div>"+
                        "<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">"+
                            "<div class=\"row\">"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Preffered</span><br>"+
                                    "<span id=\"pg_available\">"+res[i].pg_available+"</span>"+
                                "</div>"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Posted On</span><br>"+
                                    "<span>"+res[i].avl_frm+"</span>"+
                                "</div>"+
                            "</div>"+
                        "<hr style=\"margin-top:0px !important\">"+
                          "<div class=\"row\">"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Food Facility<span><br>"+
                                    "<span id=\"food_included\">"+res[i].food_included+"<span>"+
                                "</div>"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Gate closing time</span><br>"+
                                    "<span>"+res[i].get_close_time+"</span>"+
                                "</div>"+
                           "</div>"+
                      "</div>"+
                          "<hr>"+
                          "<br>"+
                            "<div class=\"row\">"+
                                "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                    "<p class=\"red-font center\">Status</p>"+
                                "</div>"+
                                "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                    "<a href=\"\./postProperty\/pgalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                "</div>"+
                                "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                    "<button class=\"w-100per center red-font back-color-yellow pd-5per\">Delete</button>"+
                                "</div>"+
                        "</div>"
                        

;   
        // This is id"+res[i].pro_id+"</div>";
         $('#PG').append(yyyy);


			}
		},
		error: function(err) {
			console.log("Error");
			$(".errorBlock").show();
			$(".loadingBlock").hide();
			$(".maskBlock").hide();
		}
	});

	console.log("finished ajax call");
	
}

// loadProducts();



$(document).ready(function(){
  var parm=window.location.search.substring(1);
  var url_parm = parm ? parm : '';
  $.ajax({
    type:"GET",
    url:"http://localhost:3000/get_profile?"+url_parm,
    data:"",
    success : function(response) {
            console.log('Sucess In AJAX profile api...');
            console.log(response);
            $('#name').val(response[0].name); 
            $('#email').val(response[0].email); 
            $('#phone').val(response[0].phone); 
            },
        error: function() {
            console.log('Error In AJAX...');
            },    


  });

  //Onclick Posted profile details.
    $('#ajax-save-profile').click(function(e) {
      e.preventDefault();
      var postserverData={
        "name":$('#name').val(),
        "phone":$('#phone').val()
      };
      console.log("serverdata......", postserverData);
      $.ajax({
        type:"POST",
        url:"http://localhost:3000/POST_profile?"+url_parm,
        data:postserverData,
        success : function(response) {
                console.log('Sucess In AJAX profile post api...');
                console.log(response);
                // $('#name').val(response[0].name); 
                // $('#email').val(response[0].email); 
                // $('#phone').val(response[0].phone); 
                },
        error: function() {
                console.log('Error In AJAX...');
                },    
      });
    });
  });

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>