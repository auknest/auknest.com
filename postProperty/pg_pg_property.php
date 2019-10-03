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
        <form id="form1">
            <!-- Property type -->
            <div class="row">
                <!-- Building Type-->
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6">
                    <div> <span class="blue-font bold-font">Building Type</span></div>
                        <div class="black-border row">
                                            <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                                <input type="radio" id="build_type" name="build_type" value="Individual Building" checked>Individual Building
                                            </div>
                                            <div class="radio-inline font-16 bold black col-lg-5">
                                                <input type="radio" id="build_type" name="build_type" value="Flat System">Flat System
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
            <!-- Type of flat -->
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div> <span class="blue-font bold-font">Type of flats</span></div>
                        <!-- First row -->
                        <div class="black-border row">
                            <div class="bold black checkbox-inline font-16">
                                <input class="bold" id="roomType1rk" type="checkbox" name="roomType" value="1 RK">1 RK
                                
                                <div id="1rk" style="display:none; border:1px solid black; width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="flooronerk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flatonerk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomonerk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconyonerk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>

                            <div class="bold black checkbox-inline font-16">
                                <input class="bold" id="roomType1bhk" type="checkbox" name="roomType" value="1 BHK">1 BHK
                                
                                <div id="1bhk" style="display:none; border:1px solid black;width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="flooronebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flatonebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomonebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconyonebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 bold black ">
                                <input class="bold" id="roomType2bhk" type="checkbox" name="roomType" value="2 BHK">2 BHK
                                
                                <div id="2bhk" style="display:none; border:1px solid black;width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="floortwobhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flattwobhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomtwobhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconytwobhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 bold black ">
                                <input class="bold" id="roomType3bhk" type="checkbox" name="roomType" value="3 BHK">3 BHK
                                
                                <div id="3bhk" style="display:none; border:1px solid black;width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="floorthreebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flatthreebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomthreebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconythreebhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline font-16 bold black">
                                <input class="bold" id="roomType4bhk" type="checkbox" name="roomType" value="4 BHK">4 BHK
                                
                                <div id="4bhk" style="display:none; border:1px solid black;width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="floorfourbhk" type="number" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flatfourbhk" type="number" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomfourbhk" type="number" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconyfourbhk" type="number" maxlength="3" size="3"><br>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>    
                        </div>
                </div>
            </div>
            <br>
           
            <!-- gated security -->
            <div class="row">
               
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Gated Security</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="gate" name="" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="gate" name="" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Lift</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="lift" name="" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="lift" name="balcny" value="No">No
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
                        <label class="col-xs-12 col-sm-12 col-md-5 col-lg-6 radio-inline font-16 bold black">
                            <input type="radio" id="lease" name="lease" value="Lease">Lease for PG owner
                                <div id="leasediv" style="border:1px solid black; display:none">
                                    <div class="pd-2" >
                                                <span class="">Rent</span>
                                                <input style="float:right" id="leaserent" type="text" maxlength="10" size="10"><br>
                                                <br>
                                                <span class="">Deposite</span>
                                                <input style="float:right" id="leasedeposite" type="text" maxlength="10" size="10"><br>
                                                
                                    </div>
                                </div>        
                        </label>
                        <label class="col-xs-12 col-sm-12 col-md-5 col-lg-5 radio-inline font-16 bold black ">
                            <input type="radio" id="selling" name="lease" value="no">Selling
                            <div id="sellingdiv" style="border:1px solid black; display:none">
                                <div class="pd-2">
                                                <span class="">Total Amount</span>
                                                <input style="float:right" id="totalamount" type="text" maxlength="10" size="10"><br>
                                </div>
                                <div class="pd-2">
                                                <span class="">Owners Rent</span>
                                                <input style="float:right" id="ownerent" type="text" maxlength="10" size="10"><br>
                                </div>
                                <div class="pd-2">
                                                <span class="">Owners Depo.</span>
                                                <input style="float:right" id="ownerdeposite" type="text" maxlength="10" size="10"><br>
                                </div>
                                <br>
                            </div>

                        </label>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <!--capacity of pg-->
            <div class="row">
                <!-- Total capacity -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Total capacity of PG</span></div>
                        <input id="pg_capacity" type="number">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">How many are staying </span></div>
                        <input id="stay_no" type="number">
                </div>
                <!--rent & deposite-->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Rent/Person</span></div>
                        <input id="rent_per_person" type="number">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Deposite/person</span></div>
                        <input id="deposite" type="number">
                </div>
            </div>
            <br>
            <!--Common part in indivisual system-->
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Common area</span>
                            <br>
                            <!-- <label class="col-xs-10 col-sm-10 col-md-10 col-lg-10 radio-inline center font-16 bold black"> -->
                                <input type="number" id="com_area" name="area" placeholder="In Sq feet">
                            <!-- </label> -->
                            <!-- <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                                <input type="radio" id="com_area" name="area" value="no">No
                            </label> -->
                    </div>
                </div>
                <!-- common area -->
                <!-- Attach bathroom -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Common parking</span> 
                        <br>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="park" name="park" value="Yes" checked>Yes
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="park" name="park" value="No">No
                        </div>
                    </div>
                </div>
                <!-- Attach Balcony -->
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common bathroom</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bath" name="bath" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bath" name="bath" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common kitchen</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="com_kitchen" name="kitchen" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="com_kitchen" name="kitchen" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Office room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="ofc_room" name="ofc" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="ofc_room" name="ofc" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Caretaker room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="care_room" name="caretaker" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="care_room" name="caretaker" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Store room </span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="store_room" name="store" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="store_room" name="store" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Power Backup</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="backup" name="backup" value="yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="backup" name="backup" value="no">No
                        </label>
                </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">  
                <div class=""> <span class="blue-font bold-font">Water supply</span></div>
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6 black-border">
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                        <input type="checkbox" id="water_supply" value="Corporation">Corporation
                        </label>
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black">
                        <input type="checkbox" id="water_supply" value="Borewell">Borewell
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
            <button id="ajax-pg-pg-pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
            </center>
        </div>
</div>
<script>
    $(document).ready(function(){
        var onerk1=[], onebhk1=[], twobhk1=[], threebhk1=[], fourbhk1=[], lease=[], selling=[];

        //Radio buttion check event
        $('#lease').change(function(){
            var checked = this.checked;
            if(checked){
                $('#leasediv').show();
                $('#sellingdiv').hide();
                lease.push({
                    leaserent: $('#leaserent').val(), 
                    leasedeposite:  $('#leasedeposite').val(),
                    
                    });
            }
            else{
                $('#leasediv').hide();
                // lease.push({
                //     leaserent: "", 
                //     leasedeposite: "",
                    
                //     });
            }
        });
        $('#selling').change(function(){
            var checked = this.checked;
            if(checked){
                $('#sellingdiv').show();
                $('#leasediv').hide();
                selling.push({
                    totalamt: $('#totalamt').val(), 
                    ownerent:  $('#ownerent').val(),
                    ownedeposite:  $('#ownerdeposite').val(),
                });
            }
            else{
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

        $('#ajax-pg-pg-pro').click(function(e) {
            e.preventDefault();
        var water_supply=[];
            $("input:checkbox[id=water_supply]:checked").each(function(){
                water_supply.push($(this).val());
                
                });
            $("input:checkbox[id=roomType1rk]:checked").each(function(){
                onerk1.push({
                    floor: $('#flooronerk').val(), 
                    flat:  $('#flatonerk').val(),
                    washroom:  $('#washroomonerk').val(),
                    balcony:  $('#balconyonerk').val()

                    });
                });
                $("input:checkbox[id=roomType1bhk]:checked").each(function(){
                onebhk1.push({
                    floor: $('#flooronebhk').val(), 
                    flat:  $('#flatonebhk').val(),
                    washroom:  $('#washroomonebhk').val(),
                    balcony:  $('#balconyonebhk').val()

                    });                 
                });
                $("input:checkbox[id=roomType2bhk]:checked").each(function(){
                twobhk1.push({
                    floor: $('#floortwobhk').val(), 
                    flat:  $('#flattwobhk').val(),
                    washroom:  $('#washroomtwobhk').val(),
                    balcony:  $('#balconytwobhk').val()

                    });
                });
                $("input:checkbox[id=roomType3bhk]:checked").each(function(){
                threebhk1.push({
                    floor: $('#floorthreebhk').val(), 
                    flat:  $('#flatthreebhk').val(),
                    washroom:  $('#washroomthreebhk').val(),
                    balcony:  $('#balconythreebhk').val()

                    });
                });
                $("input:checkbox[id=roomType4bhk]:checked").each(function(){
                fourbhk1.push({
                    floor: $('#floorfourbhk').val(), 
                    flat:  $('#flatonerk').val(),
                    washroom:  $('#washroomfourbhk').val(),
                    balcony:  $('#balconyfourbhk').val()

                    });
                });
            
                var onerk=JSON.stringify(onerk1);
                var onebhk=JSON.stringify(onebhk1);
                var twobhk=JSON.stringify(twobhk1);
                var threebhk=JSON.stringify(threebhk1);
                var fourbhk=JSON.stringify(fourbhk1);
                lease=JSON.stringify(lease);
                selling=JSON.stringify(selling);
                water_supply= water_supply.toString();


            var serverData ={"build_type": $("input:radio[id=build_type]:checked").val(),
                             "pro_id": sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "floor_no":$("input:radio[id=floorNo]:checked").val(),
                             "gate_security":$("input:radio[id=gate]:checked").val(),
                             "lift":$("input:radio[id=lift]:checked").val(),
                             "pg_capacity":$('#pg_capacity').val(),
                             "stay_no":$('#stay_no').val(),                             
                             "rent_per_person":$('#rent_per_person').val(),
                             "deposite":$('#deposite').val(),
                             "park":$("input:radio[id=park]:checked").val(),
                             "com_area":$('#com_area').val(),
                             "com_bath":$("input:radio[id=bath]:checked").val(),
                             "com_kitchen":$("input:radio[id=com_kitchen]:checked").val(),
                             "ofc_room":$("input:radio[id=ofc_room]:checked").val(),
                             "care_room":$("input:radio[id=care_room]:checked").val(),
                             "store_room":$("input:radio[id=store_room]:checked").val(),
                             "power_bakup":$("input:radio[id=backup]:checked").val(),
                             "water_supply":water_supply,
                             "onerk":onerk,
                             "onebhk":onebhk,
                             "twobhk":twobhk,
                             "threebhk":threebhk,
                             "fourbhk":fourbhk,
                             "lease":lease,
                             "selling":selling
                            };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/pg_pg_property",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property pg details Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                     window.location.href = "pg_pg_aminities.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>