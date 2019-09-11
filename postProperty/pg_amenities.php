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
                        <input type="radio" id="bathroom" name="bathroom" value="yes" checked>Yes
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                        <input type="radio" id="bathroom" name="bathroom" value="no">No
                    </div>
                </div>
            </div>
            <!-- Attach Balcony -->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Attached Balcony</span>
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
            <div class=""> <span class="blue-font bold-font">Common Area</span>
                    <br>
                    <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black ">
                        <input type="radio" id="area" name="area" value="yes" checked>Yes
                    </label>
                    <label class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline black-border center font-16 bold black">
                        <input type="radio" id="area" name="area" value="no">No
                    </label>
            </div>
            </div>
        </div>
        <br>
        <!-- Option for parking -->
        <div class="row ">
            <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                <div> <span class="blue-font bold-font">Parking</span>
                    <br>
                    <div class="row black-border">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <label class="radio-inline font-16 bold black ">
                            <input id="park" type="radio" name="parking" value="bike" checked>Bike
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        <label class="radio-inline font-16 bold black">
                            <input id="park" type="radio" name="parking" value="car">Car
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <label class="radio-inline font-16 bold black">
                            <input id="park" type="radio" name="parking" value="bikecar">Bike / Car both
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 ">
                        <label class="radio-inline font-16 bold black">
                            <input id="park" type="radio" name="parking" value="none">None
                        </label>
                        </div>
                    </div>  
                 </div>
            </div>
        </div>
         <br>
        <!-- Option for avialable pg -->
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-9">
        <div> <span class="blue-font bold-font">Available PG Amenities (Had to tick the available amenities in the PG) </span><br></div>
       
            <!-- First row -->
            <div class="row black-border">
                
                
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" value="">TV
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">DTH
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Sofa
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Geizer
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Bed
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Locker
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Wifi
                </label>
                <label class="col-md-2 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Center Table
                </label>
                
               
            </div>
            <br>
            <!-- Second row -->
            <div class="row black-border">
               
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" value="">AC
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Freeze
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Drinking Water
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Room Cleaning
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Washing Machine
                </label>
                
                
                
            </div>
            <br>
             <!-- Third row -->
             <div class="row black-border">
             <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" value="">Gas(Cooking Allowed)
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Cooler
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Shoerack
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-11">
        <div> <span class="blue-font bold-font">General & Safety Amenities (Had to tick the available amenities) </span>
        <br>
            <!-- First row -->
            <div class="row black-border">
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" value="">Lift
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Cctv
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Power Backup
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Caretakes
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Water supply 
                </label>
                <label class="col-md-3 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" value="">Security guard
                </label>     
            </div>
        </div>
        </div>
        </div>
        <br>
        <!-- PG Rules -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div> <span class="blue-font bold-font">PG Rules</span></div>
                    <div class="row black-border font-16 bold black">
                        <span style="padding-left:15px;">Guardian Stay  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <label class="radio-inline font-16 bold black">
                        <input type="radio" id="rule" name="guardian" value="yes" checked>Yes
                        </label>
                        <label class="radio-inline font-16 bold black">
                        <input type="radio" id="rule" name="guardian" value="no">No
                        </label>
                
                     </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 font-16 bold black"><br>
            <input type="text" style="float:left">
            </div>
        </div>
        
    </form>
    </div>
    <div class="width-eighty m-auto">
        <center>
          <button id="ajax-pg-ame" class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#ajax-pg-ame').click(function(e) {
            e.preventDefault();
            console.log(".......available pg");

            var serverData ={"att_bath": $("input:radio[id=bathroom]:checked").val(),
                             "pro_id": sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "att_bal":$("input:radio[id=bal]:checked").val(),
                             "com_area":$("input:radio[id=area]:checked").val(),
                             "parking":$("input:radio[id=park]:checked").val(),
                             "pg_amenities":$("input:radio[id=totalFloor]:checked").val(),
                             "gen_amenities":$('#total_rooms').val(),
                             "pg_rules":$('#rule').val(),
                                };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/post_pg_gallery",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property pg amenities details Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                     window.location.href = "pg_amenities.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>