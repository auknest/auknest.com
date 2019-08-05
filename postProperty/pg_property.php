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
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">PG Available for</span> 
                        <br>
                        <div class="black-border">
                            <div class="radio-inline">
                                <input type="radio" name="pgAvailable" value="boys" checked>Boys
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="pgAvailable" value="girls">Girls
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="pgAvailable" value="both">Both
                            </div>
                        </div>
                    </div>
            </div>
        </div>  
        <br>  
        <!-- Type of room -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                <div> <span class="blue-font bold-font">Type of room </span></div>
                    <!-- First row -->
                    <div class="row black-border">
                        <label class="radio-inline" style="padding-left:30px;">
                        <input type="radio" value="">Room system
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">1BHK PG
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">2BHK PG
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">3BHK PG
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">4BHK PG
                        </label>
                        <label class="radio-inline blue-font">
                        <input type="radio" value="">Others
                        </label>     
                    </div>
            </div>
        </div>
        <br>
        <!-- Tenent  -->
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">PG Available for</span></div>
                        <div class="black-border">
                            <div class="radio-inline">
                                <input type="radio" name="Tenent" value="stud" checked>Student
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="Tenent" value="prof">Working Professional
                            </div>
                        </div>
             </div>
        </div>
        <br>
        <!-- Select the Floor number -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                <div> <span class="blue-font bold-font">Select the floor number </span></div>
                    <!-- First row -->
                    <div class="row black-border">
                        <label class="radio-inline" style="padding-left:30px;">
                        <input type="radio" value="">1
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">2
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">3
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">4
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">5
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">6
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">7
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">8
                        </label>
                        <label class="radio-inline blue-font">
                        <input type="radio" value="">Others
                        </label>     
                    </div>
            </div>
        </div>
        <br>
        <!-- Total Floor -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                <div> <span class="blue-font bold-font">Total Floor</span></div>
                    <!-- First row -->
                    <div class="row black-border">
                        <label class="radio-inline" style="padding-left:30px;">
                        <input type="radio" value="">1
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">2
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">3
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">4
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">5
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">6
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">7
                        </label>
                        <label class="radio-inline">
                        <input type="radio" value="">8
                        </label>
                        <label class="radio-inline blue-font">
                        <input type="radio" value="">Others
                        </label>     
                    </div>
            </div>
        </div>
        <br>
        <!-- Total Rooms -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class=""> <span class="blue-font bold-font">Total Rooms</span></div>
              <input type="number" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class=""> <span class="blue-font bold-font">Gate Closing Time</span></div>
                        <div class="black-border">
                            <div class="radio-inline">
                                <input type="radio" name="Tenent" value="stud" checked>Open 24 Hours
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="Tenent" value="prof">Specific Time
                            </div>
                        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <div class=""> <span class="blue-font bold-font">Input time</span></div>
                <input type="time">
            </div>
        </div>
        <!-- Rooms Availablity -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Available From</span></div>
                    <input type="Date">
            </div>
            <!-- Expected rent -->
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class=""> <span class="blue-font bold-font">Expected rent</span></div>
                    <input type="number">
            </div>

            <!-- Food include -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class=""> <span class="blue-font bold-font">Food include</span></div>
                        <div class="black-border">
                            <div class="radio-inline">
                                <input type="radio" name="food" value="yes" checked>Yes
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="food" value="no">No
                            </div>
                        </div>
            </div>
        </div>
        <!-- Security amount -->
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=""> <span class="blue-font bold-font">Security amount</span></div>
                        <input type="number">
            </div>
        </div>
        <!-- Property Description -->
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class=""> <span class="blue-font bold-font">Property Description</span></div>
                    <textarea rows="4" style="width:100%" >
                    </textarea>
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