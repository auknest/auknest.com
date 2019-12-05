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
  background-color: #00517e;
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

@media screen and (max-width: 768px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
  .mb_a{
		padding:0px;
	}
    
}

@media screen and (max-width: 600px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .box-outline {
    	width:100%;
	}
    .sidebar a {
		padding: 2px 16px;
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
  <a  onclick="openCity(event, 'flats');loadProducts('flat')" class="tablinks" >Posted Flats</a>
  <a onclick="openCity(event, 'building');loadProducts('building')" class="tablinks" >Posted building</a>
  <a  onclick="openCity(event, 'pg_to_pg');loadProducts('pg_to_pg')"class="tablinks" >Posted PG-PG</a>
  <a onclick="openCity(event, 'properties'); loadproperty()" class="tablinks">Intersted properties</a>

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
            <button id="ajax-save-profile" class="btn-property back-color-yellow red-font">Save Profile</button>
            </center>
</div>
</div>
<div id="PG" class="tabcontent">

</div>
<div id="flats" class="tabcontent">
 
</div>
<div id="building" class="tabcontent">
  
</div>
<div id="pg_to_pg" class="tabcontent">
  
</div>
<div id="properties" class="tabcontent">
<div class="table-responsive" style="overflow-x:visible!important">
<table class="table table-striped table-bordered table-condensed">
<thead>
<tr style="background-color:#428bca;color:white">
<th>Your Property</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Date</th>
</tr>
</thead>
<tbody id="i_properties">
<!--<tr>
<td><a href="/property/2-BHK-apartment-for-rent-in-Hinjewadi-pune-for-rs-21000/ff8081816a49a376016a49d7c00f1533/detail">2 BHK For Rent in AukNest , Hinjewadi</a></td>
<td>vivek</td>
<td>+918770291108</td>
<td>abc123987@gmail.com</td>
<td>Sep 5, 2019 4:00:54 PM</td>
</tr>
<tr>
<td><a href="/property/2-BHK-apartment-for-rent-in-Hinjewadi-pune-for-rs-21000/ff8081816a49a376016a49d7c00f1533/detail">2 BHK For Rent in AukNest , Hinjewadi</a></td>
<td>Jyotika Bishnoi</td>
<td>+917073210760</td>
<td>jyotikasb97@gmail.com</td>
<td>Sep 5, 2019 2:37:53 PM</td>
</tr>
<tr>
<td><a href="/property/2-BHK-apartment-for-rent-in-Hinjewadi-pune-for-rs-21000/ff8081816a49a376016a49d7c00f1533/detail">2 BHK For Rent in AukNest , Hinjewadi</a></td>
<td>Abhi Shah</td>
<td>+918200158273</td>
<td>abhi6597@yahoo.com</td>
<td>Sep 4, 2019 4:50:15 PM</td>
</tr> -->
</tbody></table>
</div>
  <h3>London</h3>
  <p>Lond is the capital city of England.</p>
</div>
</div>

</body>
</html>
<script>
var details = [];

function loadproperty(){
    console.log("Into the intersted property block");
    $.ajax({
		url:"http://localhost:3000/get_interst_property?uid='"+sessionStorage.getItem("u_id")+"'",
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
            console.log(res);
            for (var i = 0; i < res.length; i++) {
                // var d=new Date(res[i].date);
                // var formattedDate = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear();
                var time= res[i].date;
                var r= JSON.parse(res[i].date);
                var d=new Date(r);
                console.log("............", d.toDateString());
            
                var interst='<tr>'+
                            '<td><a href="/property/2-BHK-apartment-for-rent-in-Hinjewadi-pune-for-rs-21000/ff8081816a49a376016a49d7c00f1533/detail">2 BHK For Rent in AukNest , Hinjewadi</a></td>'+
                            '<td>'+res[i].name+'</td>'+
                            '<td>'+res[i].mobile+'</td>'+
                            '<td>'+res[i].mail+'</td>'+
                            '<td>'+d.toLocaleString()+'</td>'+
                            '</tr>';
                $('#i_properties').append(interst);
            }

        },
        error: function(err) {
            console.log("Error");
        },
    });
}
function loadProductDetails(product) {
	$(".container").loadTemplate(
		$("#prodTemplt"), product, {append:true}
	);
}

function loadProducts(type) {
  var parm=window.location.search.substring(1);
  var url_parm = parm ? parm : '';
  var protype=type;
  //For appending firstly removes the content inside it
    $('#PG').empty();
    $('#flats').empty();
    $('#building').empty();
    $('#pg_to_pg').empty();
			
	//get data from server..
	$.ajax({
		url:"http://localhost:3000/get_profileProdetails?pro_type="+protype+"&"+url_parm,
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
			console.log(res);
    // /	details = res.productInfo;
			for (var i = 0; i < res.length; i++) {
                if(res[i].status=='0'){
                    res[i].status="Unverified";            
                }
                if(res[i].status=='1'){
                    res[i].status="AUK Verified";            
                }
                if(res[i].status=='2'){
                    res[i].status="Fet Verified";            
                }

        if(res[i].pro_type=='pg'){
          
          var yyyy="<div class=\"mb-tb-5per\">"+
          "<div class=\"row\">"+
          "<div class=\"col-sm-3 col-md-3 col-lg-3\">"+
          "</div>"+
          "<div class=\"col-sm-8 col-md-8 col-lg-8\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type+"&nbsp; for &nbsp;<span id=\"pg_for\">"+res[i].pg_for+"</span><br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Room Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\">"+res[i].pg_room_type+"</span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">"+res[i].expected_rent+"/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
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
                                      "<span>Available On</span><br>"+
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
                                      "<span>Gate Closing Time</span><br>"+
                                      "<span>"+res[i].get_close_time+"</span>"+
                                  "</div>"+
                            "</div>"+
                        "</div>"+
                            "<hr>"+
                            "<br>"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<p class=\"red-font center\">Status</p>"+
                                      "<p id='status'>"+res[i].status+"</p>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<a class=\"mb_a w-100per\" href=\"\./postProperty\/pgalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'","'+res[i].u_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\">Delete</button>'+
                                  "</div>"+
                          "</div>";   
                         
                         $('#PG').append(yyyy);
                        
        }
        if(res[i].pro_type=='flat'){
          var yyyy="<div class=\"mb-tb-5per\">"+
          "<div class=\"row\">"+
          "<div class=\"col-sm-3 col-md-3 col-lg-3\">"+
          "</div>"+
          "<div class=\"col-sm-8 col-md-8 col-lg-8\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type+"&nbsp; for &nbsp;<span id=\"pg_for\">"+res[i].flat_for+"</span><br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Room Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\">"+res[i].flat_room_type+"</span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">"+res[i].expected_rent+"/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
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
                                      "<span>Property System</span><br>"+
                                      "<span id=\"pg_available\">"+res[i].flat_type+"</span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Available On</span><br>"+
                                      "<span>"+res[i].avl_frm+"</span>"+
                                  "</div>"+
                              "</div>"+
                          "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Furnish<span><br>"+
                                      "<span id=\"food_included\">"+res[i].furnish+"<span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Property Age</span><br>"+
                                      "<span>"+res[i].property_age+"</span>"+
			  							"<span> Years</span>"+
                                  "</div>"+
                            "</div>"+
                        "</div>"+
                            "<hr>"+
                            "<br>"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<p class=\"red-font center\">Status</p>"+
                                      "<p id='status'>"+res[i].status+"</p>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<a class=\"mb_a w-100per\" href=\"\./postProperty\/flatalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'","'+res[i].u_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\">Delete</button>'+
                                  "</div>"+
                          "</div>";   
                         $('#flats').append(yyyy);
        }
        if(res[i].pro_type=='building'){

          var yyyy="<div class=\"mb-tb-5per\">"+
          "<div class=\"row\">"+
          "<div class=\"col-sm-3 col-md-3 col-lg-3\">"+
          "</div>"+
          "<div class=\"col-sm-8 col-md-8 col-lg-8\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type+"&nbsp; On &nbsp;<span id=\"pg_for\">"+res[i].property_for+"</span><br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Building Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\"></span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Deposite</span><br>"+
                          "<span id=\"deposite\" class=\"bold\">/-</span>"+
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
                                      "<span>Property Age</span><br>"+
                                      "<span id=\"pg_available\">"+res[i].property_age+"</span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Gate Security</span><br>"+
                                      "<span>"+res[i].gate_security+"</span>"+
                                  "</div>"+
                              "</div>"+
                          "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Power Backup<span><br>"+
                                      "<span id=\"food_included\">"+res[i].power_bakup+"<span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Water Supply</span><br>"+
                                      "<span>"+res[i].water_supply+"</span>"+
                                  "</div>"+
                            "</div>"+
                        "</div>"+
                            "<hr>"+
                            "<br>"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<p class=\"red-font center\">Status</p>"+
                                      "<p id='status'>"+res[i].status+"</p>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<a class=\"mb_a w-100per\" href=\"\./postProperty\/buildalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'","'+res[i].u_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\">Delete</button>'+
                                  "</div>"+
                          "</div>";   
                        $('#building').append(yyyy);
          }
          if(res[i].pro_type=='pg_to_pg'){
            var yyyy="<div class=\"mb-tb-5per\">"+
          "<div class=\"row\">"+
          "<div class=\"col-sm-3 col-md-3 col-lg-3\">"+
          "</div>"+
          "<div class=\"col-sm-8 col-md-8 col-lg-8\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type.replace(/_/g,' ')+"</span><br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Building Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\">"+res[i].build_type+"</span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">"+res[i].rent_per_person+"/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Deposite</span><br>"+
                          "<span id=\"deposite\" class=\"bold\">"+res[i].deposite+"/-</span>"+
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
                                      "<span>Total Capacity</span><br>"+
                                      "<span id=\"pg_available\">"+res[i].pg_capacity+"</span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Total Staying</span><br>"+
                                      "<span>"+res[i].stay_no+"</span>"+
                                  "</div>"+
                              "</div>"+
                          "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Gate Security<span><br>"+
                                      "<span id=\"food_included\">"+res[i].gate_security+"<span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Water Supply</span><br>"+
                                      "<span>"+res[i].water_supply+"</span>"+
                                  "</div>"+
                            "</div>"+
                        "</div>"+
                            "<hr>"+
                            "<br>"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<p class=\"red-font center\">Status</p>"+
                                      "<p id='status'>"+res[i].status+"</p>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<a class=\"mb_a w-100per\" href=\"\./postProperty\/pgtopgalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'","'+res[i].u_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\">Delete</button>'+
                                  "</div>"+
                          "</div>";
                        $('#pg_to_pg').append(yyyy);
          }
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

//Function For Delete the property 
function deletepro(pro_type, id, uid){ 
		$.ajax({
			url:"https://api.auknest.com/deleteproperty?pro_type="+pro_type+"&pro_id="+id,
			type: "DELETE",
			data:{},
			success: function (data) {
				console.log("Sucess in delete property api...");
				window.location.href="https://localhot:3000/profile.php?u_id="+uid;
			},
			error: function(err){
				console.log("Error",err);
			}
		});
	}
//Delete Function ends 


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
                sessionStorage.setItem("user_name", $('#name').val());
                location.reload();
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