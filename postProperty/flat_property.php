<?php include 'propertymenubar.php'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_location.php" class="previous round">&#8249;</a>
<a href="./flat_amenities.php" class="next round">&#8250;</a>
</div>

<div class="row">
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
            <!-- Text amenities heading -->
            <center><div class="mb-tb-5per">
                        <label class="txtbox-property-heading back-color-blue white-font ">PROPERTY DETAILS</label>
                    </div>
            </center>
        <form>
            <!-- Property type -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div > <span class="blue-font bold-font">Property Type</span> 
                            <br>
                            <div class="black-border row">
                                <div class="radio-inline font-16 bold pd-l-30px col-xs-12 col-sm-5 col-md-3 col-lg-3" style="padding-right:0px">
                                    <input type="radio" id="flatAvailable" name="pgAvailable" value="Residential Apartment">Residential Apartment
                                </div>
                                <div class="radio-inline font-16 bold col-xs-12 col-sm-5 col-md-3 col-lg-3" style="padding-right:0px">
                                    <input type="radio" id="flatAvailable" name="pgAvailable" value="Muiltipal Apartment">Muiltipal Apartment
                                </div>
                                <div class="radio-inline font-16 bold col-xs-12 col-sm-5 col-md-3 col-lg-4" style="padding-right:0px">
                                    <input type="radio" id="flatAvailable" name="pgAvailable" value="Builder Floor Apartment">Builder Floor Apartment
                                </div>
                                <div class="radio-inline font-16 bold  col-sm-5 col-xs-12 col-md-2 col-lg-1">
                                    <input type="radio" id="flatAvailable" name="pgAvailable" value="Villa">Villa
                                </div>
                            </div>
                        </div>
                </div>
            </div>  
            <br>  
            <!-- BHK APARTMENT -->
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div> <span class="blue-font bold-font">BHK of Apartment </span></div>
                        <!-- First row -->
                        <div class="black-border row">

                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input id="roomType" type="radio" name="roomType" value="1 RK">1 RK
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input id="roomType" type="radio" name="roomType" value="1 BHK">1 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input id="roomType" type="radio" name="roomType" value="2 BHK">2 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input id="roomType" type="radio" name="roomType" value="3 BHK">3 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input id="roomType" type="radio" name="roomType" value="4 BHK">4 BHK 
                            </label>
                            <label class="radio-inline blue-font font-16 bold col-lg-1">
                            <input id="roomType" type="radio" name="roomType" value="Others">Others
                            </label>     
                        </div>
                </div>
            </div>
            <br>
            <!-- Tenent  -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div class=""> <span class="blue-font bold-font">Preferred Tanants</span></div>
                            <div class="black-border row">
                                <div class="radio-inline pd-l-30px col-xs-12 col-sm-2 col-md-2 col-lg-2 font-16 bold black ">
                                    <input id="flatFor" type="radio" name="pgFor" value="Family">Family
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input id="flatFor" type="radio" name="pgFor" value="Bachelor Boys">Bachelor Boys
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input id="flatFor" type="radio" name="pgFor" value="Bachelor Girls">Bachelor Girls
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input id="flatFor" type="radio" name="pgFor" value="Doesn't Matter">Doesn't Matter
                                </div>
                            </div>
                </div>
            </div>
            <br>
            <!-- Select the Floor number -->
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                    <div> <span class="blue-font bold-font">Non Veg Allowed </span></div>

                    <div class="black-border row">
                                        <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                            <input type="radio" id="nonVeg" name="food" value="Yes" >Yes
                                        </div>
                                        <div class="radio-inline font-16 bold black col-lg-5">
                                            <input type="radio" id="nonVeg" name="food" value="No">No
                                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                        <div> <span class="blue-font bold-font">Select the floor number </span></div>
                            <!-- First row -->
                            <div class="black-border row">
                                <label class="radio-inline col-lg-1 font-16 bold black" style="padding-left:30px;">
                                <input type="radio" id="floorNo" name="floorNo" value="1">1
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="2">2
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="3">3
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="4">4
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="5">5
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="6">6
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="7">7
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" id="floorNo" name="floorNo" value="8">8
                                </label>
                                <label class="radio-inline blue-font col-lg-1 font-16 bold ">
                                <input type="radio" id="floorNo" name="floorNo" value="Others">Others
                                </label>     
                            </div>
                </div>
            </div>
            <br>
            <!-- Total Floor -->
            <div class="row ">
            
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                    <div> <span class="blue-font bold-font">Total Floor</span></div>
                        <!-- First row -->
                        <div class="black-border row">
                            <label class="radio-inline col-lg-1 font-16 bold black" style="padding-left:30px;">
                            <input type="radio" id="totalFloor" name="totalFloor" value="1">1
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="2">2
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="3">3
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="4">4
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="5">5
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="6">6
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="7">7
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" id="totalFloor" name="totalFloor" value="8">8
                            </label>
                            <label class="radio-inline blue-font col-lg-1 font-16 bold ">
                            <input type="radio" id="totalFloor" name="totalFloor" value="Others">Others
                            </label>     
                        </div>
                </div>
            </div>
            <br>
            <!-- Rooms Availablity -->
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Property Age</span></div>
                        <input id="property_age" type="number" placeholder="In Years">
                </div>
                <!-- Expected rent -->
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Apartment Size</span></div>
                        <input id="area" type="number" placeholder="In Sqft">
                </div>

                <!-- Food include -->
                <div class="col-xs-9 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Expected Rent</span></div>
                            <input id="exp_rent" type="number" placeholder="In Rupees"> 
                </div>
    
               
            </div>
            <br>

            <div class="row">
             <!-- Security amount -->
            
             <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class=""> <span class="blue-font bold-font">Security amount</span></div>
                            <input id="sec_amt" type="number" placeholder="In Rupees">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class=""> <span class="blue-font bold-font">Available From</span></div>
                            <input id="avl_frm" type="date">
                </div>

            </div>
            <br>
            <!-- Property Description -->
            <div class="row">
                <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-5">
                    <div> <span class="blue-font bold-font">Rent & Security amount Negotiable</span></div>
                        <div class="black-border row">
                                            <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                                <input type="radio" id="amt_nogotiable" name="amount" value="Yes" >Yes
                                            </div>
                                            <div class="radio-inline font-16 bold black col-lg-5">
                                                <input type="radio" id="amt_nogotiable" name="amount" value="No">No
                                            </div>
                        </div>      
                </div>    
                
                <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-5">
                        <div class=""> <span class="blue-font bold-font">Maintainance Charges Per Month </span></div>
                            <input id="maintainance" type="number" placeholder="In Rupees">
                </div>
                
            </div>
            <br>
            <!-- Property Description -->
            <div class="row">
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=""> <span class="blue-font bold-font">Property Description</span></div>
                        <textarea id="descr" rows="4" placeholder="Property Description" style="width:100%"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="width-eighty m-auto">
            <center>
            <button id="ajax-flat-pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
            </center>
        </div>
</div>
<script>
    $(document).ready(function(){
        if(sessionStorage.getItem('status')==1)
      {
          console.log("Into the property get ajax");
        var serverData1= {
            //   "pro_id": sessionStorage.getItem("pro_id"),
            //   "pro_type":sessionStorage.getItem("pro_type"),
              "status":1
          };

        $.ajax({
          type:"GET",
          url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
          data:serverData1,
          success:function(data){
            console.log("data...", data);
            $('input:radio[value="'+data[0].flat_type+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].flat_room_type+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].flat_for+'"]').attr('checked',true);
            $('input:radio[id=nonVeg][value="'+data[0].non_veg_allowed+'"]').attr('checked',true);                
            $('input:radio[id=floorNo][value="'+data[0].floor_no+'"]').attr('checked',true);                
            $('input:radio[id=totalFloor][value="'+data[0].total_floor+'"]').attr('checked',true);
            $('#property_age').val(data[0].property_age); 
            $('#area').val(data[0].area);
            $('#exp_rent').val(data[0].expected_rent);
            $('#sec_amt').val(data[0].security_amt);                   
            $('#avl_frm').val(data[0].avl_frm); 
            $('input:radio[id=amt_nogotiable][value="'+data[0].amt_nogotiable+'"]').attr('checked',true);                
            $('#maintainance').val(data[0].maintainance);
            $('#descr').val(data[0].descr); 
  
        },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }
      
    if(sessionStorage.getItem('status')==1){
        var id=sessionStorage.getItem("pro_id");
        status=1;
    }else {
        var id=sessionStorage.getItem("pro_id");
        status=0;
    }
        $('#ajax-flat-pro').click(function(e) {
            e.preventDefault();
            // console.log(".......available pg", +pg_avl);

            var serverData ={"flat_type": $("input:radio[id=flatAvailable]:checked").val(),
                             "pro_id": sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "flat_room_type":$("input:radio[id=roomType]:checked").val(),
                             "flat_for":$("input:radio[id=flatFor]:checked").val(),
                             "non_veg_allowed":$("input:radio[id=nonVeg]:checked").val(),
                             "floor_no":$("input:radio[id=floorNo]:checked").val(),
                             "total_floor":$("input:radio[id=totalFloor]:checked").val(),
                             "property_age":$('#property_age').val(),
                             "area":$('#area').val(),                             
                             "expected_rent":$('#exp_rent').val(),
                             "security_amt":$('#sec_amt').val(),
                             "avl_frm":$('#avl_frm').val(),
                             "amt_nogotiable":$("input:radio[id=amt_nogotiable]:checked").val(),
                             "maintainance":$('#maintainance').val(),
                             "descr":$('#descr').val(),
                             "status":status
                            };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/post_pg_property",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property pg details Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                     window.location.href = "flat_aminities.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>