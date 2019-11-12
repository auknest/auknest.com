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
                    <span id="pg_room_type"> </span>&nbsp;<span id="pro_type" class="upper"></span>
                </div>
                <!-- <hr style="width: 1px; height: 50px; background: black; border: none;" /> -->
                <div class="col-sm-9 col-md-9 col-lg-9 pd-1" style="font-size:12px">
                    <p class="mb-0">City : <span id="pro_city" class="capital"><span></p>
                    <p  class="mb-0 capital"><span id="pro_locality"></span> &nbsp;&#124;&nbsp;<span id="pro_address" ></span></p>
                    <p class="mb-0">Porject Name : <span id="pro_name" class="capital"><span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <!-- <div class="col-sm-4 col-md-4 col-lg-4 ">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span>Rent </span>
                    <p><span id="expected_rent"></span>/- M</p>
                </div>
            </div>   -->
            <!-- <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span >Deposite </span>
                    <p><span id="security_amt"></span>/-</p>
                </div>
            </div> -->
            <div class="col-sm-4 col-md-4 col-lg-4 ">
                <div class="back-color-white pd-1 center ma-0-5per boxSh bold pd-5per" >
                    <span >Available From </span>
                    <p><span id="date"></span></p>
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
                        <p class="mb-0 orange font-12">Property For</p>
                        <p class="mb-0 bold font-12" id="property_for">Rent</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Property Age</p>
                        <p class="mb-0 bold font-12" id="property_age">1 Year</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Office Room</p>
                        <p class="mb-0 bold font-12" id="ofc_room">No</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Caretaker Room</p>
                        <p class="mb-0 bold font-12" id="care_room">No</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="outline">
                        <p class="mb-0 orange font-12">Store Room</p>
                        <p class="mb-0 bold font-12" id="store_room">No</p>
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
            <p class="mb-0 orange ">Common Parking</p>
            <p class="mb-0 bold" id="park">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Common Bathroom</p>
            <p class="mb-0 bold" id="com_bath">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Common Kitchen</p>
            <p class="mb-0 bold" id="com_kitchen">No</p>
        </div>
    </div>
</div>
<br>
<!-- Building Amenities Section -->
<div class="row">
    <div class="center">
        <img src="../img/logo.png">
    </div>
    <div class="center" style="font-size: 30px" >
        <span>PROPERTY AMENITIES</span>
    </div>
</div>
<br>
<!-- First Row -->
<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Lights</p>
            <p class="mb-0 bold" id="lights">0</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Fans</p>
            <p class="mb-0 bold" id="fans">0</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Geysers</p>
            <p class="mb-0 bold" id="geysers">0</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Curtains</p>
            <p class="mb-0 bold" id="curtains">0</p>
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
            <p class="mb-0 bold" id="lift">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Power Backup</p>
            <p class="mb-0 bold" id="power_bakup">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Security Guard</p>
            <p class="mb-0 bold" id="gate_security">No</p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Water Supply</p>
            <p class="mb-0 bold" id="water_supply">Corporation</p>
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
            <p class="mb-0 bold" id="floor_no">0</p>
        </div>
    </div>
    <!-- <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Floor Number</p>
            <p class="mb-0 bold" id="floor_no"></p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Total Rooms</p>
            <p class="mb-0 bold" id="total_room"></p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <div class="back-color-white ma-1-5per pd-5per">
            <p class="mb-0 orange ">Gate Closing Time</p>
            <p class="mb-0 bold" id="get_close_time"></p>
        </div>
    </div> -->
</div>
<!-- Property Description  -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="back-color-white ma-1-5per" >
            <div class="pd-2">
                <p class="orange">
                    <span>Describe Your Property</span>
                </p>
                <p id="descr" class="initial">
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
        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-9 center" id="adminVerify" style="display:none">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 center">
                <div class="w-100per center red-font back-color-yellow pd-2">
                    <a href="#">
                        <p onclick=verifyStatus1(1) class="red-font" >Auknest Verified<br></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 center">
                <div class="w-100per center red-font back-color-yellow pd-2">
                    <a href="#">
                        <p onclick=verifyStatus1(2) class="red-font" >Featured Verified<br></p>
                    </a>
                </div>
            </div>
        </div>
</div>
<br>
<!-- Recomended Property Section -->
<script>
    if(sessionStorage.getItem('user_status')==1){
        $('#adminVerify').show();
    }//For View the verify button to Admin
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
            if(sessionStorage.getItem('user_status')==1){
                window.location.href="../AdminPanel/dashbord.php";
            }else{
                window.location.href="../profile.php?"+par[0];
            }     
       }
    //code for verify the Property Status
        function verifyStatus1(status){
            var id=par[2];
            id=id.split('=');
            id=id[1];
            var type=par[1];
            type=type.split('=');
            type=type[1];
            verifyStatus(status,id,type);
        }
        $(document).ready(function(){   
        var  Url = "http://localhost:3000/get_profileProdetails?"+url_parm;
        console.log("Url...", Url);

    $.ajax ({
        url:Url ,
        type:"GET",
        data:{},
        success: function (data) {
                console.log(data);
                    $('#pro_type').html(data[0].pro_type);
                    $('#pro_address').html(data[0].pro_address);
                    $('#pro_city').html(data[0].pro_city);
                    $('#pro_locality').html(data[0].pro_locality);
                    $('#pro_name').html(data[0].pro_name);
                    $('#date').html(data[0].date);                    
                    $('#ofc_room').html(data[0].ofc_room);
                    $('#care_room').html(data[0].care_room);
                    $('#store_room').html(data[0].store_room);
                    $('#park').html(data[0].park);
                    $('#com_bath').html(data[0].com_bath);
                    $('#com_kitchen').html(data[0].com_kitchen);
                    $('#lights').html(data[0].lights ? data[0].lights : 0 );
                    $('#geysers').html(data[0].geysers ? data[0].geysers : 0);
                    $('#fans').html(data[0].fans ? data[0].fans : 0);
                    $('#curtains').html(data[0].curtains ? data[0].curtains : 0);
                    $('#lift').html(data[0].lift);
                    $('#power_bakup').html(data[0].power_bakup);
                    $('#gate_security').html(data[0].gate_security);
                    $('#water_supply').html(data[0].water_supply);
                    $('#floor_no').html(data[0].floor_no);
                    $('#descr').html(data[0].descr);
                    $('#property_age').html(data[0].property_age);
                    $('#property_for').html(data[0].property_for);          
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