<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_location.php" class="previous round">&#8249;</a>
<a href="./pg_amenities.php" class="next round">&#8250;</a>
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
        <!-- Pg available for -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <div > <span class="blue-font bold-font">PG Available for</span> 
                        <br>
                        <div class="black-border row">
                            <div class="radio-inline font-16 bold pd-l-30px col-md-4 col-lg-4">
                                <input type="radio" id="pgAvailable" name="pgAvailable" value="boys">Boys
                            </div>
                            <div class="radio-inline font-16 bold col-md-4 col-lg-4">
                                <input type="radio" id="pgAvailable" name="pgAvailable" value="girls">Girls
                            </div>
                            <div class="radio-inline font-16 bold col-md-3 col-lg-3">
                                <input type="radio" id="pgAvailable" name="pgAvailable" value="both">Both
                            </div>
                        </div>
                    </div>
            </div>
        </div>  
        <br>  
        <!-- Type of room -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10">
                <div> <span class="blue-font bold-font">Type of room </span></div>
                    <!-- First row -->
                    <div class="black-border row">
                        <label class="radio-inline col-lg-2 font-16 bold black" style="padding-left:30px; padding-right:0px">
                        <input type="radio" id="roomType" name="roomType" value="Room system">Room system
                        </label>
                        <label class="radio-inline font-16 bold black col-lg-2">
                        <input type="radio" id="roomType" name="roomType" value="1 BHK">1 BHK
                        </label>
                        <label class="radio-inline font-16 bold black col-lg-2">
                        <input type="radio" id="roomType" name="roomType" value="2 BHK">2 BHK
                        </label>
                        <label class="radio-inline font-16 bold black col-lg-2">
                        <input type="radio" id="roomType" name="roomType" value="3 BHK">3 BHK
                        </label>
                        <label class="radio-inline font-16 bold black col-lg-2">
                        <input type="radio" id="roomType" name="roomType" value="4 BHK">4 BHK
                        </label>
                        <label class="radio-inline blue-font font-16 bold col-lg-1">
                        <input type="radio" id="roomType" name="roomType" value="others">Others
                        </label>     
                    </div>
            </div>
        </div>
        <br>
        <!-- Tenent  -->
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-5 col-lg-5">
                    <div class=""> <span class="blue-font bold-font">PG Available for</span></div>
                        <div class="black-border row">
                            <div class="radio-inline pd-l-30px font-16 bold black col-lg-5">
                                <input type="radio" id="pgFor" name="pgFor" value="Student">Student
                            </div>
                            <div class="radio-inline col-lg-6 font-16 bold black">
                                <input type="radio" id="pgFor" name="pgFor" value="Working Professional">Working Professional
                            </div>
                        </div>
             </div>
        </div>
        <br>
        <!-- Select the Floor number -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
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
                        <input type="radio" id="floorNo" name="floorNo" value="others">Others
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
                        <input type="radio" id="totalFloor" name="totalFloor" value="others">Others
                        </label>     
                    </div>
            </div>
        </div>
        <br>
        <!-- Total Rooms -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Total Rooms</span></div>
              <input id="total_rooms" type="number" >
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-5">
            <div class=""> <span class="blue-font bold-font">Gate Closing Time</span></div>
                        <div class="black-border row">
                            <div class="radio-inline pd-l-30px  col-lg-5 font-16 bold black">
                                <input type="radio" id="gate_time" name="closeTime" value="24hr" >Open 24 Hours
                            </div>
                            <div class="radio-inline col-lg-4 font-16 bold black">
                                <input type="radio" id="gate_time" name="closeTime" value="specificTime">Specific Time
                            </div>
                        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <div class=""> <span class="blue-font bold-font">Input time</span></div>
                <input type="time">
            </div>
        </div>
        <br>
        <!-- Rooms Availablity -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Available From</span></div>
                    <input id="avl_frm" type="Date">
            </div>
            <!-- Expected rent -->
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class=""> <span class="blue-font bold-font">Expected rent</span></div>
                    <input id="exp_rent" type="number">
            </div>

            <!-- Food include -->
            <div class="col-xs-9 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Food include</span></div>
                        <div class="black-border row">
                            <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                <input type="radio" id="food" name="food" value="Yes">Yes
                            </div>
                            <div class="radio-inline font-16 bold black col-lg-5">
                                <input type="radio" id="food" name="food" value="No">No
                            </div>
                        </div>
            </div>
        </div>
        <br>
        <!-- Security amount -->
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Security amount</span></div>
                        <input type="number" id="sec_amt" placeholder="In Rupees">
            </div>
        </div>
        <br>
        <!-- Property Description -->
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class=""> <span class="blue-font bold-font">Property Description</span></div>
                    <textarea rows="4" id="descr" placeholder="Property Description" style="width:100%"></textarea>
            </div>
        </div>
    </form>
  </div>
  <div class="width-eighty m-auto">
        <center>
          <button id="ajax-pg-pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
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
            $('input:radio[value="'+data[0].pg_for+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].pg_room_type+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].pg_available+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].floor_no+'"]').attr('checked',true);                
            $('input:radio[value="'+data[0].total_floor+'"]').attr('checked',true);                
            $('#total_rooms').val(data[0].total_room); 
            $('input:radio[value="'+data[0].get_close_time+'"]').attr('checked',true);        
            $('#avl_frm').val(data[0].avl_frm); 
            $('#exp_rent').val(data[0].expected_rent); 
            $('input:radio[value="'+data[0].food_included+'"]').attr('checked',true);                
            $('#sec_amt').val(data[0].security_amt); 
            $('#descr').val(data[0].descr); 
  
        },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }

if(sessionStorage.getItem('status')==1)
 {
  var id=sessionStorage.getItem("pro_id");
  status=1;
 }
 else {
  var id=sessionStorage.getItem("pro_id");
  status=0;

 }      $('#ajax-pg-pro').click(function(e) {
            e.preventDefault();
            // console.log(".......available pg", +pg_avl);

            var serverData ={"pg_for": $("input:radio[id=pgAvailable]:checked").val(),
                             "pro_id": id,
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "pg_room_type":$("input:radio[id=roomType]:checked").val(),
                             "pg_available":$("input:radio[id=pgFor]:checked").val(),
                             "floor_no":$("input:radio[id=floorNo]:checked").val(),
                             "total_floor":$("input:radio[id=totalFloor]:checked").val(),
                             "total_room":$('#total_rooms').val(),
                             "get_close_time":$("input:radio[id=gate_time]:checked").val(),
                             "avl_frm":$('#avl_frm').val(),
                             "expected_rent":$('#exp_rent').val(),
                             "food_included":$("input:radio[id=food]:checked").val(),
                             "security_amt":$('#sec_amt').val(),
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
                     window.location.href = "pg_amenities.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>