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
            <!-- Property type -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div > <span class="blue-font bold-font">Property Type</span> 
                            <br>
                            <div class="black-border row">
                                <div class="radio-inline font-16 bold pd-l-30px col-xs-12 col-sm-5 col-md-3 col-lg-3" style="padding-right:0px">
                                    <input type="radio" name="pgAvailable" value="boys" checked>Residential Apartment
                                </div>
                                <div class="radio-inline font-16 bold col-xs-12 col-sm-5 col-md-3 col-lg-3" style="padding-right:0px">
                                    <input type="radio" name="pgAvailable" value="girls">Muiltipal Apartment
                                </div>
                                <div class="radio-inline font-16 bold col-xs-12 col-sm-5 col-md-3 col-lg-4" style="padding-right:0px">
                                    <input type="radio" name="pgAvailable" value="both">Builder Floor Apartment
                                </div>
                                <div class="radio-inline font-16 bold  col-sm-5 col-xs-12 col-md-2 col-lg-1">
                                    <input type="radio" name="pgAvailable" value="girls">Villa
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
                            <input type="radio" name="roomType" value="">1 RK
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input type="radio" name="roomType" value="">1 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input type="radio" name="roomType" value="">2 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input type="radio" name="roomType" value="">3 BHK 
                            </label>
                            <label class="radio-inline font-16 bold black col-lg-2">
                            <input type="radio" name="roomType" value="">4 BHK 
                            </label>
                            <label class="radio-inline blue-font font-16 bold col-lg-1">
                            <input type="radio" name="roomType" value="">Others
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
                                <div class="radio-inline pd-l-30px font-16 bold black ">
                                    <input type="radio" name="pgFor" value="stud" checked>Family
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input type="radio" name="pgFor" value="prof">Bachelor boys
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input type="radio" name="pgFor" value="prof">Bachelor girls
                                </div>
                                <div class="radio-inline col-xs-12 col-sm-3 col-md-3 col-lg-3 font-16 bold black">
                                    <input type="radio" name="pgFor" value="prof">Doesn't Matter
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
                                            <input type="radio" name="food" value="yes" checked>Yes
                                        </div>
                                        <div class="radio-inline font-16 bold black col-lg-5">
                                            <input type="radio" name="food" value="no">No
                                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                        <div> <span class="blue-font bold-font">Select the floor number </span></div>
                            <!-- First row -->
                            <div class="black-border row">
                                <label class="radio-inline col-lg-1 font-16 bold black" style="padding-left:30px;">
                                <input type="radio" name="floorNo" value="">1
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">2
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">3
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">4
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">5
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">6
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">7
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="floorNo" value="">8
                                </label>
                                <label class="radio-inline blue-font col-lg-1 font-16 bold ">
                                <input type="radio" name="floorNo" value="">Others
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
                            <input type="radio" name="totalFloor" value="">1
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">2
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">3
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">4
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">5
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">6
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">7
                            </label>
                            <label class="radio-inline col-lg-1 font-16 bold black">
                            <input type="radio" name="totalFloor" value="">8
                            </label>
                            <label class="radio-inline blue-font col-lg-1 font-16 bold ">
                            <input type="radio" name="totalFloor" value="">Others
                            </label>     
                        </div>
                </div>
            </div>
            <br>
            <!-- Total Rooms -->
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                        <div> <span class="blue-font bold-font">Total Floor</span></div>
                            <!-- First row -->
                            <div class="black-border row">
                                <label class="radio-inline col-lg-1 font-16 bold black" style="padding-left:30px;">
                                <input type="radio" name="totalFloor" value="">1
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">2
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">3
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">4
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">5
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">6
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">7
                                </label>
                                <label class="radio-inline col-lg-1 font-16 bold black">
                                <input type="radio" name="totalFloor" value="">8
                                </label>
                                <label class="radio-inline blue-font col-lg-1 font-16 bold ">
                                <input type="radio" name="totalFloor" value="">Others
                                </label>     
                            </div>
                    
                </div>
            </div>
            <br>
            <!-- Rooms Availablity -->
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Property Age</span></div>
                        <input type="number">
                </div>
                <!-- Expected rent -->
                <div class=" col-xs-12 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Apartment Size</span></div>
                        <input type="number">
                </div>

                <!-- Food include -->
                <div class="col-xs-9 col-sm-4 col-md-3 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Expected Rent</span></div>
                            <input type="number"> 
                </div>
    
               
            </div>
            <br>

            <div class="row">
             <!-- Security amount -->
            
             <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class=""> <span class="blue-font bold-font">Security amount</span></div>
                            <input type="number" placeholder="In Rupees">
                </div>
                <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class=""> <span class="blue-font bold-font">Available From</span></div>
                            <input type="date" placeholder="In Rupees">
                </div>

            </div>
            <br>
            <!-- Property Description -->
            <div class="row">
                <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-5">
                    <div> <span class="blue-font bold-font">Rent & Security amount Negotiable</span></div>
                        <div class="black-border row">
                                            <div class="radio-inline pd-l-30px  font-16 bold black col-lg-5">
                                                <input type="radio" name="food" value="yes" checked>Yes
                                            </div>
                                            <div class="radio-inline font-16 bold black col-lg-5">
                                                <input type="radio" name="food" value="no">No
                                            </div>
                        </div>      
                </div>    
                
                <div class=" col-xs-12 col-sm-4 col-md-5 col-lg-5">
                        <div class=""> <span class="blue-font bold-font">Maintainance Charges Per Month </span></div>
                            <input type="number" placeholder="In Rupees">
                </div>
                
            </div>
            <br>
            <!-- Property Description -->
            <div class="row">
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=""> <span class="blue-font bold-font">Property Description</span></div>
                        <textarea rows="4" placeholder="Property Description" style="width:100%"></textarea>
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