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
                <!-- Option for avialable pg -->
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-9">
                         <div> <span class="blue-font bold-font">Available Amenities (Had to tick the available amenities ) </span><br></div>
                    
                            <!-- First row -->
                            <div class="row black-border">
                                
                                
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black" style="padding-left:30px;">
                                <input type="checkbox" id="amn" value="Light">Light
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="amn" value="Fans">Fan
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="amn" value="Geysers">Geysers
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="amn" value="DTH">Curtains
                                </label>
       
                            </div>
                            <br>
                        </div>
                </div>
                             <!-- Property Description -->
                            <div class="row">
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class=""> <span class="blue-font bold-font">Property Description</span></div>
                                        <textarea rows="4" id="descr" placeholder="Property Description" style="width:100%"></textarea>
                                </div>
                            </div>
                            <br>
                            
                            <div class="width-eighty m-auto">
                                <center>
                                <button id="ajax-gal" class="btn-property back-color-yellow red-font">Save & Continue</button>
                                </center>
                            </div>
            </form>
    </div>
</div>
            