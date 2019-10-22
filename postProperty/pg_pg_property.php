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
                                                <input type="radio" id="build_type" name="build_type" value="Individual Building" >Individual Building
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
                            <div class="checkbox-inline font-16 bold black ">
                                <input class="bold" id="roomType4bhk" type="checkbox" name="roomType" value="4 BHK">4 BHK
                                
                                <div id="4bhk" style="display:none; border:1px solid black;width:107%">
                                    <div> <span class="blue-font pd-2">Add quantity</span><br>
                                            <div class="pd-2">
                                            <span class="">Which floor</span>
                                            <input style="float:right" id="floorfourbhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of flat</span>
                                            <input style="float:right" id="flatfourbhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of washroom</span>
                                            <input style="float:right" id="washroomfourbhk" type="text" maxlength="3" size="3"><br>
                                            </div>
                                            <div class="pd-2">
                                            <span class="">No of balcony</span>
                                            <input style="float:right" id="balconyfourbhk" type="text" maxlength="3" size="3"><br>
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
                            <input type="radio" id="gate" name="gateSecurity" value="Yes" >Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="gate" name="gateSecurity" value="No">No
                        </label>
                </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Lift</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="lift" name="balcony" value="Yes" >Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="lift" name="balcony" value="No">No
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
                            <input type="radio" id="selling" name="lease" value="Selling">Selling
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
                            <input type="radio" id="park" name="park" value="Yes" >Yes
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
                            <input type="radio" id="bath" name="bath" value="Yes" >Yes
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
                            <input type="radio" id="com_kitchen" name="kitchen" value="Yes" >Yes
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
                            <input type="radio" id="ofc_room" name="ofc" value="Yes" >Yes
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
                            <input type="radio" id="care_room" name="caretaker" value="Yes" >Yes
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
                            <input type="radio" id="store_room" name="store" value="Yes" >Yes
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
                            <input type="radio" id="backup" name="backup" value="Yes" >Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="backup" name="backup" value="No">No
                        </label>
                </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-9 col-md-6 col-lg-6">  
                    <div class=""> <span class="blue-font bold-font">Water supply</span></div>
                    <div class="black-border row">
                        <label class="radio-inline col-md-4 col-lg-4 font-16 bold black" style="padding-left:30px;">
                            <input type="radio" name="water" id="water" value="Corporation">Corporation
                        </label>
                        <label class="radio-inline col-md-4 col-lg-4 font-16 bold black">
                        <input type="radio" name="water" id="water" value="Borewell">Borewell
                        </label>
                        <label class="radio-inline col-md-3 col-lg-3 font-16 bold black">
                            <input type="radio" name="water" id="water" value="Both">Both
                        </label>     
                    </div>
                <!-- <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6 black-border">
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                        <input type="checkbox" id="water_supply" value="Corporation">Corporation
                        </label>
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black">
                        <input type="checkbox" id="water_supply" value="Borewell">Borewell
                        </label> 
                </div> -->
                </div>
            </div>

            <!--Common part for flat system-->
            <div class="row">
              
            </div>
        </form>
    </div>
    </div>
    <div class="width-eighty m-auto">
            <center>
            <button id="ajax-pg-pg-pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
            </center>
        </div>
</div>
<script>
    $(document).ready(function(){

        //For Calling Get API
        if(sessionStorage.getItem('status')==1){
            console.log("Into the property get ajax");
            var serverData1= {
                                "status":1
            };

            $.ajax({
            type:"GET",
            url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
            data:serverData1,
            success:function(data){
                console.log("data...", data);
                $('input:radio[id=build_type][value="'+data[0].build_type+'"]').attr('checked',true);            
                $('input:radio[id=floorNo][value="'+data[0].floor_no+'"]').attr('checked',true);
                $('input:radio[id=gate][value="'+data[0].gate_security+'"]').attr('checked',true); 
                $('input:radio[id=lift][value="'+data[0].lift+'"]').attr('checked',true); 
                $('#pg_capacity').val(data[0].pg_capacity);
                $('#stay_no').val(data[0].stay_no);
                $('#rent_per_person').val(data[0].rent_per_person);
                $('#deposite').val(data[0].deposite);    
                $('#com_area').val(data[0].com_area);                          
                $('input:radio[id=park][value="'+data[0].park+'"]').attr('checked',true);                
                $('input:radio[id=bath][value="'+data[0].com_bath+'"]').attr('checked',true);
                $('input:radio[id=com_kitchen][value="'+data[0].com_kitchen+'"]').attr('checked',true);
                $('input:radio[id=ofc_room][value="'+data[0].ofc_room+'"]').attr('checked',true);
                $('input:radio[id=care_room][value="'+data[0].care_room+'"]').attr('checked',true);
                $('input:radio[id=store_room][value="'+data[0].store_room+'"]').attr('checked',true);
                $('input:radio[id=backup][value="'+data[0].power_bakup+'"]').attr('checked',true); 
                $('input:radio[id=water][value="'+data[0].water_supply+'"]').attr('checked',true);
                //ONERK
                if(data[0].onerk!=null){
                    $('input[id=roomType1rk]').attr('checked',true);
                    $("input:checkbox[id=roomType1rk]:checked").each(function(){
                        var one = JSON.parse(data[0].onerk);
                        console.log("ONE....",one);
                        $('#1rk').show();
                        $('#flooronerk').val(one.floor); 
                        $('#flatonerk').val(one.flat);
                        $('#washroomonerk').val(one.washroom);
                        $('#balconyonerk').val(one.balcony);
                    });
                }else{
                    $('input[id=roomType1rk]').attr('checked',false);
                }
                //ONEBHK
                if(data[0].onebhk!=null){
                    $('input[id=roomType1bhk]').attr('checked',true);
                    $("input:checkbox[id=roomType1bhk]:checked").each(function(){
                        var one = JSON.parse(data[0].onebhk);
                        // console.log("ONE....",one);
                        $('#1bhk').show();
                        $('#flooronebhk').val(one.floor); 
                        $('#flatonebhk').val(one.flat);
                        $('#washroomonebhk').val(one.washroom);
                        $('#balconyonebhk').val(one.balcony);
                    });

                }else{
                    $('input[id=roomType1bhk]').attr('checked',false);
                }
                //TWOBHK
                if(data[0].twobhk!=null){
                    $('input[id=roomType2bhk]').attr('checked',true);
                    $("input:checkbox[id=roomType2bhk]:checked").each(function(){
                        var one = JSON.parse(data[0].twobhk);
                        // console.log("ONE....",one);
                        $('#2bhk').show();
                        $('#floortwobhk').val(one.floor); 
                        $('#flattwobhk').val(one.flat);
                        $('#washroomtwobhk').val(one.washroom);
                        $('#balconytwobhk').val(one.balcony);
                    });

                }else{
                    $('input[id=roomType2bhk]').attr('checked',false);
                }
                //THREEBHK
                if(data[0].threebhk!=null){
                    $('input[id=roomType3bhk]').attr('checked',true);
                    $("input:checkbox[id=roomType3bhk]:checked").each(function(){
                        var one = JSON.parse(data[0].threebhk);
                        // console.log("ONE....",one);
                        $('#3bhk').show();
                        $('#floorthreebhk').val(one.floor); 
                        $('#flatthreebhk').val(one.flat);
                        $('#washroomthreebhk').val(one.washroom);
                        $('#balconythreebhk').val(one.balcony);
                    });

                }else{
                    $('input[id=roomType3bhk]').attr('checked',false);
                }
                //FOURBHK
                if(data[0].fourbhk!=null){
                    $('input[id=roomType4bhk]').attr('checked',true);
                    $("input:checkbox[id=roomType4bhk]:checked").each(function(){
                        var one = JSON.parse(data[0].fourbhk);
                        // console.log("ONE....",one);
                        $('#4bhk').show();
                        $('#floorfourbhk').val(one.floor); 
                        $('#flatfourbhk').val(one.flat);
                        $('#washroomfourbhk').val(one.washroom);
                        $('#balconyfourbhk').val(one.balcony);
                    });

                }else{
                    $('input[id=roomType4bhk]').attr('checked',false);
                }
                //LEASE
                if(data[0].lease!=null){
                    $('input[id=lease]').attr('checked',true);
                    $("input:radio[id=lease]:checked").each(function(){
                        var lease1 = JSON.parse(data[0].lease);
                        // console.log("ONE....",lease1);
                        $('#leasediv').show();
                        $('#leaserent').val(lease1.leaserent); 
                        $('#leasedeposite').val(lease1.leasedeposite);
                    });

                }else{
                    $('input[id=lease]').attr('checked',false);
                    //SELLING
                    if(data[0].selling!=null){
                        $('input[id=selling]').attr('checked',true);
                        $("input:radio[id=selling]:checked").each(function(){
                            var selling1 = JSON.parse(data[0].selling);
                            // console.log("ONE....",selling1);
                            $('#sellingdiv').show();
                            $('#totalamount').val(selling1.totalamt);
                            $('#ownerent').val(selling1.ownerent); 
                            $('#ownerdeposite').val(selling1.ownedeposite);
                        });
                    }else{
                        $('input[id=selling]').attr('checked',false);
                    }
                }
                

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
        //End Of Get API
        var onerk, onebhk, twobhk, threebhk, fourbhk, lease, selling;

        //Radio buttion check event
        $('#lease').change(function(){
            var checked = this.checked;
            if(checked){
                $('#leasediv').show();
                $('#sellingdiv').hide();
                
            }
            else{
                $('#leasediv').hide();
            }
        });
        $('#selling').change(function(){
            var checked = this.checked;
            if(checked){
                $('#sellingdiv').show();
                $('#leasediv').hide();
               
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
        // var water_supply=[];
            // $("input:checkbox[id=water_supply]:checked").each(function(){
            //     water_supply.push($(this).val());
                
            //     });
            $("input:radio[id=lease]:checked").each(function(){
                lease={
                    leaserent: $('#leaserent').val(), 
                    leasedeposite:  $('#leasedeposite').val(),
                }
            });
            $("input:radio[id=selling]:checked").each(function(){
                selling={
                    totalamt: $('#totalamount').val(), 
                    ownerent:  $('#ownerent').val(),
                    ownedeposite:  $('#ownerdeposite').val(),
                }
            });
            $("input:checkbox[id=roomType1rk]:checked").each(function(){
                onerk={
                    floor: $('#flooronerk').val(), 
                    flat:  $('#flatonerk').val(),
                    washroom:  $('#washroomonerk').val(),
                    balcony:  $('#balconyonerk').val()

                    };
                });
                $("input:checkbox[id=roomType1bhk]:checked").each(function(){
                onebhk={
                    floor: $('#flooronebhk').val(), 
                    flat:  $('#flatonebhk').val(),
                    washroom:  $('#washroomonebhk').val(),
                    balcony:  $('#balconyonebhk').val()

                    };                 
                });
                $("input:checkbox[id=roomType2bhk]:checked").each(function(){
                twobhk={
                    floor: $('#floortwobhk').val(), 
                    flat:  $('#flattwobhk').val(),
                    washroom:  $('#washroomtwobhk').val(),
                    balcony:  $('#balconytwobhk').val()

                    };
                });
                $("input:checkbox[id=roomType3bhk]:checked").each(function(){
                threebhk={
                    floor: $('#floorthreebhk').val(), 
                    flat:  $('#flatthreebhk').val(),
                    washroom:  $('#washroomthreebhk').val(),
                    balcony:  $('#balconythreebhk').val()

                    };
                });
                $("input:checkbox[id=roomType4bhk]:checked").each(function(){
                fourbhk={
                    floor: $('#floorfourbhk').val(), 
                    flat:  $('#flatfourbhk').val(),
                    washroom:  $('#washroomfourbhk').val(),
                    balcony:  $('#balconyfourbhk').val()

                    };
                });
            
                onerk=JSON.stringify(onerk);
                onebhk=JSON.stringify(onebhk);
                twobhk=JSON.stringify(twobhk);
                threebhk=JSON.stringify(threebhk);
                fourbhk=JSON.stringify(fourbhk);
                lease=JSON.stringify(lease);
                selling=JSON.stringify(selling);
                // water_supply= water_supply.toString();


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
                             "water_supply":$("input:radio[id=water]:checked").val(),
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