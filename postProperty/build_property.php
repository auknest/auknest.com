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
         <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Property For</span>
                            <br>
                            <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                                <input type="radio" id="rent" name="rent" value="Rent" checked>Rent
                            </label>
                    </div>
            </div>
        </div>
        <br>
        <div class="row"> 
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <span class="blue-font bold-font">Posession Date</span><br>
                    <input id="pdate" class="bold black" type="date">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <span class="blue-font bold-font">Property age</span><br>
                    <select id="page" class="bold black">
                        <option value="1 Year">1 Year</option>
                        <option value="2 Year">2 Year</option>
                        <option value="3 Year">3 Year</option>
                        <option value="4 Year">4 Year</option>
                        <option value="5+ Year">5+ Year</option>
                    </select> 
            </div>
        </div>

        <!--Floor number-->
        <div class="row">
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
        </div>
        
          
        <!-- BHK APARTMENT -->
        <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                    <div> <span class="blue-font bold-font">Type of flats</span></div>
                        <!-- First row -->
                        <div class="black-border row">
                            <div class="bold checkbox-inline font-16 black">
                                <input id="roomType1rk" type="checkbox" name="roomType" value="1 RK">1 RK
                                
                                <div id="1rk" style="display:none; width:107%; border:1px solid black">
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

                            <div class="bold checkbox-inline font-16 black">
                                <input class="bold" id="roomType1bhk" type="checkbox" name="roomType" value="1 BHK">1 BHK
                                
                                <div id="1bhk" style="display:none; width:107%; border:1px solid black">
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
                            <div class="bold checkbox-inline font-16 black ">
                                <input class="bold" id="roomType2bhk" type="checkbox" name="roomType" value="2 BHK">2 BHK
                                
                                <div id="2bhk" style="display:none; width:107%; border:1px solid black">
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
                            <div class="bold checkbox-inline font-16 black ">
                                <input class="bold" id="roomType3bhk" type="checkbox" name="roomType" value="3 BHK">3 BHK
                                
                                <div id="3bhk" style="display:none; width:107%; border:1px solid black">
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
                            <div class="bold checkbox-inline font-16 black">
                                <input class="bold" id="roomType4bhk" type="checkbox" name="roomType" value="4 BHK">4 BHK
                                
                                <div id="4bhk" style="display:none; width:107%; border:1px solid black">
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

        <div class="row">     
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class=""> <span class="blue-font bold-font">Common parking</span> 
                        <br>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="park" name="parking" value="Yes" checked>Yes
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="park" name="parking" value="No">No
                        </div>
                    </div>
            </div>
        
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common bathroom</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="bath" name="bathroom" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="bath" name="bathroom" value="No">No
                        </label>
                </div>
            </div>    
            
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Common kitchen</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="kitchen" name="kitchen" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="kitchen" name="kitchen" value="No">No
                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Office room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="office" name="office" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="office" name="office" value="No">No
                        </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Caretaker room</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="care" name="care" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="care" name="care" value="No">No
                        </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Store room </span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="store" name="store" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="store" name="store" value="No">No
                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Power Backup</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="power" name="power" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="power" name="power" value="No">No
                        </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Gated Security</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="security" name="security" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="security" name="security" value="No">No
                        </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Lift</span>
                        <br>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                            <input type="radio" id="lift" name="lift" value="Yes" checked>Yes
                        </label>
                        <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                            <input type="radio" id="lift" name="lift" value="No">No
                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">  
                <div class=""> <span class="blue-font bold-font">Water supply</span></div>
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6 black-border">
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                        <input type="checkbox" id="water" value="Corporation">Corporation
                        </label>
                        <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black">
                        <input type="checkbox" id="water" value="Borewell">Borewell
                        </label> 
                </div>
            </div>
        </div>        
        </form>
    </div>
        <div class="width-eighty m-auto">
                <center>
                    <button id="ajax-build-pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
                </center>
        </div>
</div>
<script>
    $(document).ready(function(){

        var onerk=[], onebhk=[], twobhk=[], threebhk=[], fourbhk=[], water_supply=[];
        
        //Checkbox change event.
        $('#roomType1rk').on('change', function() {
            console.log("into checked function");
            var checked = this.checked;
            if(checked){
                $('#1rk').show();
            }
            else{
                $('#1rk').hide();
            }
        });
        $('#roomType1bhk').on('change', function() {
            console.log("into checked function");
            var checked = this.checked;
            console.log(checked);
            // $('#1rk').show();

            if(checked){
                $('#1bhk').show();
            }
            else{
                $('#1bhk').hide();
            }
        });
        $('#roomType2bhk').on('change', function() {
            console.log("into checked function");
            var checked = this.checked;
            console.log(checked);
            // $('#1rk').show();

            if(checked){
                $('#2bhk').show();
            }
            else{
                $('#2bhk').hide();
            }
        });
        $('#roomType3bhk').on('change', function() {
            console.log("into checked function");
            var checked = this.checked;
            console.log(checked);
            // $('#1rk').show();

            if(checked){
                $('#3bhk').show();
            }
            else{
                $('#3bhk').hide();
            }
        });
        $('#roomType4bhk').on('change', function() {
            console.log("into checked function");
            var checked = this.checked;
            console.log(checked);
            // $('#1rk').show();

            if(checked){
                $('#4bhk').show();
            }
            else{
                $('#4bhk').hide();
            }
        });
        $('#ajax-build-pro').click(function(e) {
            console.log("Into ajax call ..........");
            e.preventDefault();
            $("input:checkbox[id=water]:checked").each(function(){
                    water_supply.push($(this).val());
            });
            $("input:checkbox[id=roomType1rk]:checked").each(function(){
                onerk.push({
                    floor: $('#flooronerk').val(), 
                    flat:  $('#flatonerk').val(),
                    washroom:  $('#washroomonerk').val(),
                    balcony:  $('#balconyonerk').val()
                });
            });
            $("input:checkbox[id=roomType1bhk]:checked").each(function(){
                onebhk.push({
                    floor: $('#flooronebhk').val(), 
                    flat:  $('#flatonebhk').val(),
                    washroom:  $('#washroomonebhk').val(),
                    balcony:  $('#balconyonebhk').val()
                });
            });
            $("input:checkbox[id=roomType2bhk]:checked").each(function(){
                twobhk.push({
                    floor: $('#floortwobhk').val(), 
                    flat:  $('#flattwobhk').val(),
                    washroom:  $('#washroomtwobhk').val(),
                    balcony:  $('#balconytwobhk').val()
                });
            });
            $("input:checkbox[id=roomType3bhk]:checked").each(function(){
                threebhk.push({
                    floor: $('#floorthreebhk').val(), 
                    flat:  $('#flatthreebhk').val(),
                    washroom:  $('#washroomthreebhk').val(),
                    balcony:  $('#balconythreebhk').val()
                });
            });
            $("input:checkbox[id=roomType4bhk]:checked").each(function(){
                fourbhk.push({
                    floor: $('#floorfourbhk').val(), 
                    flat:  $('#flatonerk').val(),
                    washroom:  $('#washroomfourbhk').val(),
                    balcony:  $('#balconyfourbhk').val()
                });
            });
            //End of Checkbox change event
            onerk= JSON.stringify(onerk);
            onebhk= JSON.stringify(onebhk);
            twobhk= JSON.stringify(twobhk);
            threebhk= JSON.stringify(threebhk);
            fourbhk= JSON.stringify(fourbhk);
            water_supply= JSON.stringify(water_supply);
            
            var serverData ={
                                "property_for": "Rent",
                                "pro_id": sessionStorage.getItem("pro_id"),
                                "pro_type" : sessionStorage.getItem("pro_type"),
                                "date": $("#pdate").val(),
                                "property_age":$("#page").val(),
                                "floor_no":$("input:radio[id=floorNo]:checked").val(),
                                "onerk":onerk,
                                "onebhk":onebhk,
                                "twobhk":twobhk,
                                "threebhk":threebhk,
                                "fourbhk":fourbhk,
                                "park":$("input:radio[id=park]:checked").val(),
                                "com_bath":$("input:radio[id=bath]:checked").val(),
                                "com_kitchen":$("input:radio[id=kitchen]:checked").val(),
                                "ofc_room":$("input:radio[id=office]:checked").val(),
                                "care_room":$("input:radio[id=care]:checked").val(),
                                "store_room":$("input:radio[id=store]:checked").val(),
                                "power_bakup":$("input:radio[id=power]:checked").val(),
                                "water_supply":water_supply,     
                                "gate_security":$("input:radio[id=security]:checked").val(),
                                "lift":$("input:radio[id=lift]:checked").val()
                        };
            console.log(serverData);
            $.ajax({
                type:"POST",
                url:"http://localhost:3000/post_build_property",
                data:serverData,
                cache: false,
                timeout: 5000,
                success: function(res){
                    console.log('Property pg details Sucessfully inserted ...');
                    // window.location.href = "build_aminities.php";
                },
                error:function() {
                    console.log('Error In AJAX...');
                },
            });

        });
    });
</script>