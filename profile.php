<?php include 'menu.html';?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <a onclick="openCity(event, 'PG')" class="tablinks" >Posted PG</a>
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
            <input class="form-control" type="text">
        </div>
 </div>
 <br>
 <div class="row">
        <div class="col-xs-4 col-md-2 col-lg-2">
            <label for="name">EMAIL</label>
        </div>
        <div class="col-xs-8 col-md-6 col-lg-6">
            <input class="form-control" type="text">
        </div>
 </div>
 <br>
 <div class="row">
        <div class="col-xs-4 col-md-2 col-lg-2">
            <label for="name">PHONE NUMBER</label>
        </div>
        <div class="col-xs-8 col-md-6 col-lg-6">
            <input class="form-control" type="text">
        </div>
 </div>
 <br>
 <div class="width-eighty m-auto">
            <center>
            <button id="ajax-pg-pg-pro" class="btn-property back-color-yellow red-font">Save &amp; Profile</button>
            </center>
</div>
</div>
<div id="PG" class="tabcontent">
  <h3>London</h3>
  <p> is the capital city of England.</p>
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
function openCity(evt, cityName) {
    console.log("..............");
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