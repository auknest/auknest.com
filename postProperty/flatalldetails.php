<?php include 'propertymenubar.html'?>
<style>
    body{
        background:#f3f4f9;
    }
</style>
<div class="pd-1">
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 back-color-white boxSh" >
            <div class=" ma-0-5per ">
                <div class="col-sm-3 col-md-3 col-lg-3 pd-3-5per">
                    <span id="pg_room_type"> </span><span id="pro_type"></span>
                </div>
                <!-- <hr style="width: 1px; height: 50px; background: black; border: none;" /> -->
                <div class="col-sm-9 col-md-9 col-lg-9 pd-1" style="font-size:12px">
                    <p class="mb-0">City : <span id="pro_city"><span></p>
                    <p id="pro_locality" class="mb-0"></p>
                    <p class="mb-0">Porject Name : <span id="pro_name"><span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="col-sm-4 col-md-4 col-lg-4 ">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span>Rent </span>
                    <p><span id="expected_rent"></span>/- M</p>
                </div>
            </div>  
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span >Deposite </span>
                    <p><span id="security_amt"></span>/-</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 ">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span >Available From </span>
                    <p><span id="avl_frm"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pd-lr-1">
    <div class="row">
    <!-- Gallary Section -->
    <div class="col-sm-6 col-md-6 col-lg-6 back-color-white">
        <div class=" ma-0-5per">
            <img src="../img/auknest.png" style="width:100%">
            <div>
                <img src="../img/auknest.png" style="width:24%">
                <img src="../img/auknest.png" style="width:24%">
                <img src="../img/auknest.png" style="width:24%">
                <img src="../img/auknest.png" style="width:24%">
            </div>
        </div>
    </div>
    <!-- Features Section -->
    <div class="col-sm-6 col-md-6 col-lg-6 ">
        <div class="back-color-white ma-0-5per boxSh pd-1 ">
            <span class="bold">FEATURES</span>
            <div class="row"> 
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Preferred Tenant</p>
                        <p class="mb-0 bold font-12" id="flat_for"></p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Non veg allow</p>
                        <p class="mb-0 bold font-12" id="non_veg_allowed">No</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Property age</p>
                        <p class="mb-0 bold font-12" id="property_age"></p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Appartment size</p>
                        <p class="mb-0 bold font-12" id="area"></p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Security amount</p>
                        <p class="mb-0 bold font-12" id="security_amt"></p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Rent negoiable</p>
                        <p class="mb-0 bold font-12" id="amt_nogotiable"></p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Maintainence</p>
                        <p class="mb-0 bold font-12" id="maintainance"></p>
                    </div>
                </div>
            </div>
            <div class="center ma-0-5per">
                <button class="pd-2 connect_btn" disabled>CONNECT WITH OWNER</button>
            </div>
        </div>
        <br>
        <!-- Map Section -->
        <div class="center ma-0-5per">
            <img src="https://i.stack.imgur.com/AF16r.png" style="width:80%">
        </div>
    </div>
    </div>
</div>
<!-- Extra Space Section -->
<div class="row">
    <div class="center">
        <img src="../img/logo.png">
    </div>
    <div class="center" style="font-size: 30px" >
        <span>EXTRA SPACE</span>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Attached Bathroom</p>
            <p class="mb-0 bold" id="att_bath">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Attached Balcony</p>
            <p class="mb-0 bold" id="att_bal">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Common Area</p>
            <p class="mb-0 bold" id="com_area">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Parking</p>
            <p class="mb-0 bold" id="parking">No</p>
        </div>
    </div>
</div>
<br>
<!-- PG Amenities Section -->
<div class="row">
    <div class="center">
        <img src="../img/logo.png">
    </div>
    <div class="center" style="font-size: 30px" >
        <span>PG AMENITIES</span>
    </div>
</div>
<br>
<!-- First Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">TV</p>
            <p class="mb-0 bold" id="TV">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">DTH</p>
            <p class="mb-0 bold" id="DTH">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Sofa</p>
            <p class="mb-0 bold" id="Sofa">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Geizer</p>
            <p class="mb-0 bold" id="Geizer">No</p>
        </div>
    </div>
</div>
<!-- Secind Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Bed</p>
            <p class="mb-0 bold" id="Bed">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Locker</p>
            <p class="mb-0 bold" id="Locker">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">WiFi</p>
            <p class="mb-0 bold" id="WiFi">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Center Table</p>
            <p class="mb-0 bold" id="Center Table">No</p>
        </div>
    </div>
</div>
<!-- Third Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">AC</p>
            <p class="mb-0 bold" id="AC">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Freeze</p>
            <p class="mb-0 bold" id="Freeze">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Drinking Water</p>
            <p class="mb-0 bold" id="Drinking Water">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Room Cleaning</p>
            <p class="mb-0 bold" id="Room Cleaning">No</p>
        </div>
    </div>
</div>
<!-- Fourth Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Washing Machine</p>
            <p class="mb-0 bold" id="Washing Machine">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Gas (Cooking Allow)</p>
            <p class="mb-0 bold" id="Gas">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Cooler</p>
            <p class="mb-0 bold" id="Cooler">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Shoerack</p>
            <p class="mb-0 bold" id="Shoerack">No</p>
        </div>
    </div>
</div>
<!-- General & Safety Amenities Section -->
<div class="row">
    <div class="center">
        <img src="../img/logo.png">
    </div>
    <div class="center" style="font-size: 30px" >
        <span>GENERAL & SAFETY AMENITIES</span>
    </div>
</div>
<br>
<!-- First Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Lift</p>
            <p class="mb-0 bold" id="Lift">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">CCTV</p>
            <p class="mb-0 bold" id="CCTV">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Power Backup</p>
            <p class="mb-0 bold" id="Power Backup">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Water Supply</p>
            <p class="mb-0 bold" id="Water Supply">Corporation</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange">Caretakes</p>
            <p class="mb-0 bold" id="Caretakes">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Security Guard</p>
            <p class="mb-0 bold" id="Security">No</p>
        </div>
    </div>
</div>

<!-- Property Discussion -->
<div class="row">
    <div class="center">
        <img src="../img/logo.png">
    </div>
    <div class="center" style="font-size: 30px" >
        <span>PROPERTY DISCUSSION</span>
    </div>
</div>
<br>
<!-- First Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Total Floor</p>
            <p class="mb-0 bold" id="total_floor"></p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Floor Number</p>
            <p class="mb-0 bold" id="floor_no"></p>
        </div>
    </div>   
</div>
<!-- Property Description  -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="back-color-white ma-1-5per" >
            <div class="pd-2">
                <p class="orange">
                    <span>Describe Your Property</span>
                </p>
                <p id="descr">
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Button Section -->
<div class="row " id="before-submit" style="display:none">
        <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 center">
            <div class="w-100per center red-font back-color-yellow pd-2">
                <a href="#">
                    <p id="ajax-edit" class="red-font" >Edit <br></p>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 center">
            <div class="w-100per center red-font back-color-yellow pd-2">
                <a href="listProperty.php">
                    <p class="red-font">Submit</p>
                </a>
            </div>  
        </div>
        <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"></div>
</div>
<div class="row" id="profile-details" style="display:none">
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 center">
            <div class="w-100per center red-font back-color-yellow pd-2">
                <a href="#">
                    <p onclick=pgdetails() id="ajax-back" class="red-font" >Back <br></p>
                </a>
            </div>
        </div>
</div>
<br>
<!-- Recomended Property Section -->
<script>

    if(sessionStorage.getItem('pro_id')!=null)
    {
        $('#before-submit').show();
    }
    else{
        $('#profile-details').show();

    }
    var url_parm=window.location.search.substring(1);
        console.log("parm.............", url_parm);
        
        var par=url_parm.split("&");
        console.log("id.............", par);
        function pgdetails() {
            window.location.href="../profile.php?"+par[0];
        }
    
        $(document).ready(function(){   
        var  Url = "http://localhost:3000/get_profileProdetails?"+url_parm;
        console.log("Url...", Url);

    $.ajax ({
        url:Url ,
        type:"GET",
        data:{},
        success: function (data) {
                console.log("Flat all details data........", data);
                    
                    $('#flat_for').html(data[0].flat_for);
                    $('#pg_room_type').html(data[0].flat_room_type);
                    $('#non_veg_allowed').html(data[0].non_veg_allowed);
                    $('#property_age').html(data[0].property_age);
                    $('#area').html(data[0].area);
                    $('#security_amt').html(data[0].security_amt);
                    $('#amt_nogotiable').html(data[0].amt_nogotiable);
                    $('#maintainance').html(data[0].maintainance);
                    $('#att_bal').html(data[0].att_bal);
                    $('#att_bath').html(data[0].att_bath);
                    $('#avl_frm').html(data[0].avl_frm);
                    $('#com_area').html(data[0].com_area);
                    $('#parking').html(data[0].parking);
                    $('#floor_no').html(data[0].floor_no);
                    $('#descr').html(data[0].descr);
                    // $('#expected_rent').html(data[0].expected_rent);
                    // $('#food_included').html(data[0].food_included);
                    // $('#gen_aminities').html(data[0].gen_aminities);
                    // $('#get_close_time').html(data[0].get_close_time);
                    // $('#pg_amenities').html(data[0].pg_amenities);
                    // $('#pg_available').html(data[0].pg_available);
                    // $('#flat_for').html(data[0].flat_for);
                    // $('#pg_room_type').html(data[0].flat_room_type);
                    // $('#pro_address').html(data[0].pro_address);
                    // $('#pro_city').html(data[0].pro_city);
                    // $('#pro_locality').html(data[0].pro_locality);
                    // $('#pro_name').html(data[0].pro_name);
                    // $('#pro_person').html(data[0].pro_person);
                    $('#pro_type').html(data[0].pro_type);
                    // $('#security_amt').html(data[0].security_amt);
                    $('#total_floor').html(data[0].total_floor);
                    $('#total_room').html(data[0].total_room);
                    var pg_amn=data[0].flat_amenities;
                    var amn=pg_amn.split(",");
                    for( var i=0; i<amn.length; i++){
                        $('#' + amn[i]).html('Yes');
                    }
                    var gen_amn=data[0].gen_amenities;
                    var gen=gen_amn.split(",");
                    for( var j=0; j<gen.length; j++){
                        $('#' + gen[j]).html('Yes');
                    }
                    },
            error: function() {
                  console.log('Error In AJAX...');
                },

    });
    $('#ajax-edit').click(function(e) {
            e.preventDefault();
                     window.location.href = "./listProperty.php?pro_id="+sessionStorage.getItem("pro_id");
                });
});
    </script>