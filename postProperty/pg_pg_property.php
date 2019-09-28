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
                <!-- Building Type-->
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6">
                    <div> <span class="blue-font bold-font">Building Type</span></div>
                        <div class="black-border row">
                                            <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                                <input type="radio" id="Ind_build" name="Individual Building" value="Individual Building" checked>Individual Building
                                            </div>
                                            <div class="radio-inline font-16 bold black col-lg-5">
                                                <input type="radio" id="amt_nogotiable" name="flat_system" value="Flat System">Flat System
                                            </div>
                        </div>      
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div> <span class="blue-font bold-font">Number of Floor / Flat </span></div>
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
            <br>  
            <!-- BHK APARTMENT -->
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div> <span class="blue-font bold-font">Type of flats</span></div>
                        <!-- First row -->
                        <div class="black-border row">
                            <div class="checkbox-inline font-16 black">
                                <input class="bold" id="roomType1rk" type="checkbox" name="roomType" value="1 RK">1 RK
                                
                                <div id="1rk" style="display:none; border:1px solid black">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>

                            <div class="checkbox-inline font-16 black">
                                <input class="bold" id="roomType1bhk" type="checkbox" name="roomType" value="1 BHK">1 BHK
                                
                                <div id="1bhk" style="display:none; border:1px solid black">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 black ">
                                <input class="bold" id="roomType2bhk" type="checkbox" name="roomType" value="2 BHK">2 BHK
                                
                                <div id="2bhk" style="display:none; border:1px solid black">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 black ">
                                <input class="bold" id="roomType3bhk" type="checkbox" name="roomType" value="3 BHK">3 BHK
                                
                                <div id="3bhk" style="display:none; border:1px solid black">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 black">
                                <input class="bold" id="roomType4bhk" type="checkbox" name="roomType" value="4 BHK">4 BHK
                                
                                <div id="4bhk" style="display:none; border:1px solid black">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="property_age" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>    
                        </div>
                </div>
            </div>
            <br>
           
            <!-- Rooms Availablity -->
            <div class="row">
               
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Building Type</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Gated Security</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Lift</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
            </div>
            <br>
           
            <!-- Lease & rent-->
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                <div class=""> <span class="blue-font bold-font">Property for</span>
                        <br>
                    <div class="row black-border">
                        <label class="col-xs-12 col-sm-12 col-md-5 col-lg-6 radio-inline font-16 black">
                            <input type="radio" id="lease" name="lease" value="Lease">Lease for PG owner
                                <div id="leasediv" style="border:1px solid black; display:none">
                                    <div class="pd-2" >
                                                <span class="">Rent</span>
                                                <input style="float:right" id="property_age" type="text" maxlength="10" size="10"><br>
                                                <br>
                                                <span class="">Deposite</span>
                                                <input style="float:right" id="property_age" type="text" maxlength="10" size="10"><br>
                                                
                                    </div>
                                </div>        
                        </label>
                        <label class="col-xs-12 col-sm-12 col-md-5 col-lg-5 radio-inline font-16 black ">
                            <input type="radio" id="selling" name="lease" value="no">Selling
                            <div id="sellingdiv" style="border:1px solid black; display:none">
                                <div class="pd-2">
                                                <span class="">Total Amount</span>
                                                <input style="float:right" id="property_age" type="text" maxlength="10" size="10"><br>
                                </div>
                                <div class="pd-2">
                                                <span class="">Owners Rent</span>
                                                <input style="float:right" id="property_age" type="text" maxlength="10" size="10"><br>
                                </div>
                                <div class="pd-2">
                                                <span class="">Owners Depo.</span>
                                                <input style="float:right" id="property_age" type="text" maxlength="10" size="10"><br>
                                </div>
                                <br>
                            </div>

                        </label>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Total capacity -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Total capacity of PG</span></div>
                        <input id="property_age" type="number">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">How many are staying </span></div>
                        <input id="area" type="number">
                </div>
                <!--rent & deposite-->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Rent/Person</span></div>
                        <input id="property_age" type="number">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Deposite/person</span></div>
                        <input id="area" type="number">
                </div>
            </div>
            <br>
            <!--Common part in indivisual system-->
            <div class="row">
                <!-- Attach bathroom -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Common parking</span> 
                        <br>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bathroom" name="bathroom" value="yes" checked>Yes
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bathroom" name="bathroom" value="no">No
                        </div>
                    </div>
                </div>
                <!-- Attach Balcony -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common area</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <!-- common area -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common bathroom</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="area" name="area" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="area" name="area" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common kitchen</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Office room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Caretaker room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Store room </span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Power Backup</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bal" name="balcony" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bal" name="balcony" value="no">No
                        </label>
                </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">  
                <div class=""> <span class="blue-font bold-font">Water supply</span></div>
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6 black-border">
                        <label class="col-md-4 col-lg-3 checkbox-inline font-16 bold black" style="padding-left:30px;">
                        <input type="checkbox" id="amn" value="TV">Corporation
                        </label>
                        <label class="col-md-4 col-lg-3 checkbox-inline font-16 bold black">
                        <input type="checkbox" id="amn" value="DTH">Borewell
                        </label> 
                </div>
                </div>
            </div>

            <!--Common part for flat system-->
            <div class="row">
              
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
        //Radio buttion check event
        $('#lease').change(function(){
            var checked = this.checked;
            if(checked=="1"){
                $('#leasediv').show();
                $('#sellingdiv').hide();
            }
            if(checked=="0"){
                $('#leasediv').hide();
            }
        });
        $('#selling').change(function(){
            var checked = this.checked;
            if(checked=="1"){
                $('#sellingdiv').show();
                $('#leasediv').hide();

            }
            if(checked=="0"){
                $('#sellingdiv').hide();
            }
        });

        //Checkbox change event.
        $('#roomType1rk').on('change', function() {
                                    console.log("into checked function");
                                    var checked = this.checked
                                    console.log(checked);
                                    // $('#1rk').show();

                                    if(checked=="1"){
                                        $('#1rk').show();
                                    }
                                    if(checked=="0"){
                                        $('#1rk').hide();
                                    }
                                });
                                $('#roomType1bhk').on('change', function() {
                                    console.log("into checked function");
                                    var checked = this.checked
                                    console.log(checked);
                                    // $('#1rk').show();

                                    if(checked=="1"){
                                        $('#1bhk').show();
                                    }
                                    if(checked=="0"){
                                        $('#1bhk').hide();
                                    }
                                });
                                $('#roomType2bhk').on('change', function() {
                                    console.log("into checked function");
                                    var checked = this.checked
                                    console.log(checked);
                                    // $('#1rk').show();

                                    if(checked=="1"){
                                        $('#2bhk').show();
                                    }
                                    if(checked=="0"){
                                        $('#2bhk').hide();
                                    }
                                });
                                $('#roomType3bhk').on('change', function() {
                                    console.log("into checked function");
                                    var checked = this.checked
                                    console.log(checked);
                                    // $('#1rk').show();

                                    if(checked=="1"){
                                        $('#3bhk').show();
                                    }
                                    if(checked=="0"){
                                        $('#3bhk').hide();
                                    }
                                });
                                $('#roomType4bhk').on('change', function() {
                                    console.log("into checked function");
                                    var checked = this.checked
                                    console.log(checked);
                                    // $('#1rk').show();

                                    if(checked=="1"){
                                        $('#4bhk').show();
                                    }
                                    if(checked=="0"){
                                        $('#4bhk').hide();
                                    }
                                });
        //End of Checkbox change event

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
                             "amt_nogotiable":$('#amt_nogotiable').val(),
                             "maintainance":$('#maintainance').val(),
                             "descr":$('#descr').val()
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