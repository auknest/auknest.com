<?php include 'propertymenubar.html'?>
<div class="mb-tb-5per">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8">
            <div class="box-outline mb-tb-5per" style="margin:0px !important">
                <!--Address section-->
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <span id="pro_type"></span>&nbsp; for &nbsp;<span id="pg_for"></span><br>
                        <span id="result"></span>

                        <span>AKURDI, NEAR KHANDOBA MANDIR</span>
                    </div>
                </div>
                <hr style="margin-top:0px !important">
                <div class="row">
                    <!--Room infor-->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center">
                        <span>Room Type</span><br>
                        <span id="room_type" class="bold">1 BHK <span> Single sharing </span></span>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center">
                        <span>Rent</span><br>
                        <span id="rent" class="bold">4000 /- </span>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center">
                        <span>Deposite</span><br>
                        <span id="deposite" class="bold"></span><span>/-</span>
                    </div>
                </div>
                <hr style="margin-top:0px !important">
                    <!--Image section-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 center">
                            <!-- <div class="profile_img img-responsive">
                            </div> -->
                            <img class="profile_img img-responsive" src="">
                        </div>
                        <!--details section-->
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>Preffered</span><br>
                                    <span id="pg_available"></span>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>Posted On</span><br>
                                    <span>2 Month ago</span>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>Food Facility<span><br>
                                    <span id="food_included"><span>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>Gate closing time</span><br>
                                    <span>10 am</span>
                                </div>
                            </div>   
                            <hr>
                        <div class="row">
                            <a href="./listProperty.php?pro_id=5d81cbebe1465">
                                <div class="col-sm-12 col-md-6 col-lg-6 center">
                                    <p id="ajax-edit" class="w-100per center red-font back-color-yellow pd-5per">Edit <br></p>
                                </div>
                            </a>
                            <a href="listProperty.php">
                                <div class="col-sm-12 col-md-6 col-lg-6 center">
                                    <p class="w-100per center red-font back-color-yellow pd-5per">Submit</p>
                                </div>
                            </a>
                            </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<script>


    // $('#ajax-edit').click(function(e) {
        $(document).ready(function(){   
        
    $.ajax ({
        url: "http://localhost:3000/get_pro_shortdetails?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
        // url: "http://localhost:3000/get_pro_shortdetails?pro_id=5d81cbebe1465",
        type:"GET",
        // data:,
        success: function (data) {
                console.log(data);
                    $('#pro_type').html(data[0].pro_type);
                    $('#pg_for').html(data[0].pg_for);
                    $('#room_type').html(data[0].pg_room_type);
                    $('#rent').html(data[0].expected_rent);
                    $('#deposite').html(data[0].security_amt);
                    $('#pg_available').html(data[0].pg_available);
                    $('#food_included').html(data[0].food_included);
                    // $('.profile_img').css({'background':"url(../WebAPI/uploads/" + data[0].profile_img + ")"});
                    $('.profile_img').attr("src","../WebAPI/uploads/" + data[0].profile_img + "");

                        // alert(data);
                    },
            error: function() {
                  console.log('Error In AJAX...');
                },

    });
});
    </script>