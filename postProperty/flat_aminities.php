<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_property.php" class="previous round">&#8249;</a>
<a href="./pg_gallery.php" class="next round">&#8250;</a>
</div>
<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
        <!-- Text amenities heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">AMENITIES/FEATURES</label>
                </div>
        </center>
    <form>
        <!-- Option for bathroom, balcony common area -->
        <div class="row">
            <!-- Attach bathroom -->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Attached Bathroom</span> 
                    <br>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                        <input type="radio" id="bathroom" name="bathroom" value="Yes" checked>Yes
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                        <input type="radio" id="bathroom" name="bathroom" value="No">No
                    </div>
                </div>
            </div>
            <!-- Attach Balcony -->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Attached Balcony</span>
                    <br>
                    <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                        <input type="radio" id="bal" name="balcony" value="Yes" checked>Yes
                    </label>
                    <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                        <input type="radio" id="bal" name="balcony" value="No">No
                    </label>
                </div>
            </div>
            <!-- common area -->
            <div class="col-xs-10 col-sm-8 col-md-6 col-lg-5">
            <div class=""> <span class="blue-font bold-font">Water Supply</span>
                    <br>
                    <div class="black-border row ">
                    <label class="col-xs-12 col-sm-4 col-md-4 col-lg-4 radio-inline font-16 bold black pd-l-30px">
                        <input type="radio" id="area" name="wsupply" value="Corporation" checked>Corporation
                    </label>
                    <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 bold black">
                        <input type="radio" id="area" name="wsupply" value="Borewell">Borewell
                    </label>
                    <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 bold black">
                        <input type="radio" id="area" name="wsupply" value="Both">Both
                    </label>
                    </div>
            </div>
            </div>
        </div>
        <br>
        <!-- Option for parking -->
        <div class="row ">
            <div class="col-xs-12 col-sm-10 col-md-11 col-lg-11">
                <div> <span class="blue-font bold-font">Parking</span>
                    <br>
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 black-border" style="margin-right:10px">
                            <label class="radio-inline font-16 bold black pd-l-30px">
                                <input type="radio" id="parktype" name="parkingType" value="Covered" checked>Covered
                            </label>
                            <label class="radio-inline font-16 bold black ">
                                <input type="radio" id="parktype" name="parkingType" value="Open" >Open
                            </label>
                        </div>
                        <div class="col-xs-7 col-sm-8 col-md-8 col-lg-8 black-border">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <label class="radio-inline font-16 bold black ">
                                <input type="radio" id="park" name="parking" value="Bike" checked>Bike
                            </label>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <label class="radio-inline font-16 bold black">
                                <input type="radio" id="park" name="parking" value="Car">Car
                            </label>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                            <label class="radio-inline font-16 bold black">
                                <input type="radio" id="park" name="parking" value="Bike / Car">Bike / Car both
                            </label>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 ">
                            <label class="radio-inline font-16 bold black">
                                <input type="radio" id="park" name="parking" value="None">None
                            </label>
                            </div>
                        </div>
                    </div>  
                 </div>
            </div>
        </div>
         <br>
         <!-- Option For Furnish Details -->
         <div class="row ">
            <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                <div> <span class="blue-font bold-font">Furnish Details</span>
                    <br>
                    <div class="row black-border">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <label class="radio-inline font-16 bold black ">
                            <input type="radio" id="furnish" name="furnish" value="Fully Furnished" checked>Fully Furnished
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <label class="radio-inline font-16 bold black">
                            <input type="radio" id="furnish" name="furnish" value="Semi Furnished">Semi Furnished
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <label class="radio-inline font-16 bold black">
                            <input type="radio" id="furnish" name="parking" value="Un Furnished">Un Furnished
                        </label>
                        </div>
                    </div>  
                 </div>
            </div>
        </div>
         <br>
        <!-- Option for avialable Aminities in flat -->
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-9">
        <div> <span class="blue-font bold-font">Available Amenities (Had to tick the available amenities in the Flats) </span><br></div>
       
            <!-- First row -->
            <div class="row black-border">
                
                
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="amn" value="TV">TV
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="DTH">DTH
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Sofa">Sofa
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Geizer">Geizer
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Bed">Bed
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Locker">Locker
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Wifi">Wifi
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Center Table">Center Table
                </label>
                
               
            </div>
            <br>
            <!-- Second row -->
            <div class="row black-border">
               
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="amn" value="AC">AC
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Freeze">Freeze
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Drinking Water">Drinking Water
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Room Cleaning">Room Cleaning
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Washing Machine">Washing Machine
                </label>
                
                
                
            </div>
            <br>
             <!-- Third row -->
             <div class="row black-border">
             <label class="col-md-4 col-lg-3 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="amn" value="Modular Kitchen">Modular Kitchen
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Cooler">Cooler
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox"id="amn" value="Shoerack">Shoerack
                </label>
                <!-- <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Room Cleaning
                </label> -->
            </div>
        </div>
        </div>
        <br>
        <!-- Option for general amenities -->
        <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
        <div> <span class="blue-font bold-font">General & Safety Amenities (Had to tick the available amenities) </span>
        <br>
            <!-- First row -->
            <div class="row black-border">
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="gen" value="Lift">Lift
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Cctv">Cctv
                </label>
                <label class="col-md-5 col-lg-4 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Power Backup">Power Backup (For Common Area)
                </label>
                <label class="col-md-3 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Security guard">Security guard
                </label>     
            </div>
        </div>
        </div>
        </div>
        <br>
        
    </form>
    </div>
    <div class="width-eighty m-auto">
        <center>
          <button id ="ajax-flat-ame" class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#ajax-flat-ame').click(function(e) {
            e.preventDefault();
            var flat_ame= [];
            var gen_ame= [];

            console.log(".......available flat");
            $("input:checkbox[id=amn]:checked").each(function(){
                flat_ame.push($(this).val());
                
                });
                $("input:checkbox[id=gen]:checked").each(function(){
                gen_ame.push($(this).val());
                });
                flat_ame=flat_ame.toString();
                gen_ame=gen_ame.toString();


                // var str = arr.join(', ');
                console.log("flat amenities................",gen_ame);

            var serverData ={"att_bath": $("input:radio[id=bathroom]:checked").val(),
                             "pro_id": sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "att_bal":$("input:radio[id=bal]:checked").val(),
                             "com_area":$("input:radio[id=area]:checked").val(),
                             "parking_type":$("input:radio[id=park_type]:checked").val(),
                             "parking":$("input:radio[id=park]:checked").val(),
                             "furnish":$("input:radio[id=furnish]:checked").val(),
                             "flat_amenities":flat_ame,
                             "gen_amenities":gen_ame,
                                };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/post_pg_amenities",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property pg amenities details Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                    //  window.location.href = "pg_amenities.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>