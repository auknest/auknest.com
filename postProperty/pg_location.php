<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_who_I.php" class="previous round">&#8249;</a>
<a href="./pg_property.php" class="next round">&#8250;</a>
</div>

<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">LOCATION</label>
                </div>
        </center>
        <!-- Types pg property -->
        <div class="row">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="col-sm-12 col-md-6 col-lg-6 loc-city" >
                        <select class ="Input-txt "> 
                            <option selected disabled hidden>City</option>
                            <option value="Pune" name="Pune"> Pune </option>
                            <option value="Mumbai" name="Mumbai"> Mumbai </option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 loc-city">
                        <input class ="Input-txt " type="textbox" placeholder="Locality">
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 ">
                    <input class ="Input-txt " type="textbox" placeholder="Address">
                </div>
            </div> <!-- First row Ended-->
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 mb-tb-3per">
                    <input class ="Input-txt " type="textbox" placeholder="Project Name">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 mb-tb-3per">
                    <input class ="Input-txt " type="textbox" placeholder="MAP">
                </div>
            </div>
        </div> 

        
      
    </div> <!--box close-->

    <div class="width-eighty m-auto">
        <center>
          <button class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
</div>
