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
                <span class="blue-font bold-font">Position Date</span><br>
                    <input type="date">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <span class="blue-font bold-font">Property age</span><br>
                    <select>
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
            

        <div class="row">     
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
        </div>
        <div class="row">
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
        </div>
        <div class="row">
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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">  
                <div class=""> <span class="blue-font bold-font">Water supply</span></div>
                <div class=" col-xs-12 col-sm-5 col-md-6 col-lg-6 black-border">
                        <label class="col-md-3 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                        <input type="checkbox" id="amn" value="TV">Corporation
                        </label>
                        <label class="col-md-3 col-lg-4 checkbox-inline font-16 bold black">
                        <input type="checkbox" id="amn" value="DTH">Borewell
                        </label> 
                </div>
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