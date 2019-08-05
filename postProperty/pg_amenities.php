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
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Attached Bathroom</span> 
                    <br>
                    <div class="radio-inline black-border w-40per center">
                        <input type="radio" name="bathroom" value="bathradioyes" checked>Yes
                    </div>
                    <div class="radio-inline black-border w-40per center">
                        <input type="radio" name="bathroom" value="bathradiono">No
                    </div>
                </div>
            </div>
            <!-- Attach Balcony -->
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Attached Balcony</span>
                    <br>
                    <label class="radio-inline black-border w-40per center">
                        <input type="radio" name="balcony" value="balconyradioyes" checked>Yes
                    </label>
                    <label class="radio-inline black-border w-40per center ">
                        <input type="radio" name="balcony" value="balconyadiono">No
                    </label>
                </div>
            </div>
            <!-- common area -->
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Common Area</span>
                    <br>
                    <label class="radio-inline black-border w-40per center ">
                        <input type="radio" name="area" value="arearadioyes" checked>Yes
                    </label>
                    <label class="radio-inline black-border w-40per center">
                        <input type="radio" name="area" value="arearadiono">No
                    </label>
            </div>
            </div>
        </div>
        <br>
        <!-- Option for parking -->
        <div class="row ">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <div> <span class="blue-font bold-font">Parking</span>
                    <br>
                    <div class="row black-border">
                        <div class="col-xs-12 col-sm-12 col-md-3 ">
                        <label class="radio-inline ">
                            <input type="radio" name="parking" value="parkingradiobike" checked>Bike
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 ">
                        <label class="radio-inline">
                            <input type="radio" name="parking" value="parkingradiocar">Car
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 ">
                        <label class="radio-inline">
                            <input type="radio" name="parking" value="parkingradiobikecar">Bike / Car both
                        </label>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 ">
                        <label class="radio-inline">
                            <input type="radio" name="parking" value="parkingradionone">None
                        </label>
                        </div>
                    </div>  
                 </div>
            </div>
        </div>
         <br>
        <!-- Option for avialable pg -->
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
        <div> <span class="blue-font bold-font">Available PG Amenities (Had to tick the available amenities in the PG) </span><br></div>
       
            <!-- First row -->
            <div class="row black-border">
                
                
                <label class="checkbox-inline" style="padding-left:30px;">
                <input type="checkbox" value="">DTH
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Center Table
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Bed
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Room cleaning
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Gas
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Shoerack
                </label>
               
            </div>
            <br>
            <!-- Second row -->
            <div class="row black-border">
               
                <label class="checkbox-inline" style="padding-left:30px;">
                <input type="checkbox" value="">Locker
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Drinking water
                </label>
                
                <label class="checkbox-inline">
                <input type="checkbox" value="">Cooler
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Freeze
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Geizer
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Sofa
                </label>
                
            </div>
            <br>
             <!-- Third row -->
             <div class="row black-border">
             <label class="checkbox-inline" style="padding-left:30px;">
                <input type="checkbox" value="">AC
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Washing Machine
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Wifi
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">TV
                </label>
            </div>
        </div>
        </div>
        <br>
        <!-- Option for general amenities -->
        <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
        <div> <span class="blue-font bold-font">General & Safety Amenities (Had to tick the available amenities) </span>
        <br>
            <!-- First row -->
            <div class="row black-border">
                <label class="checkbox-inline" style="padding-left:30px;">
                <input type="checkbox" value="">Lift
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Cctv
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Power Backup
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Security guard
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Caretakes
                </label>
                <label class="checkbox-inline">
                <input type="checkbox" value="">Water supply 
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
                    <div class="row black-border">
                        <span style="padding-left:15px;">Guardian Stay  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <label class="radio-inline">
                        <input type="radio" name="balcony" value="balconyradioyes" checked>Yes
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="balcony" value="balconyadiono">No
                        </label>
                
                     </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"><br>
            <input type="text" style="float:left">
            </div>
        </div>
        
    </form>
    </div>
    <div class="width-eighty m-auto">
        <center>
          <button class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>