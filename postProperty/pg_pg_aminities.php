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
                                
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2" style="padding-left:30px;">TV
                                <input  style="float:right" type="text" id="tv" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">DTH
                                <input  style="float:right" type="text" id="dth" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Sofa
                                <input style="float:right" type="text" id="sofa" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Shoe rak
                                <input style="float:right" type="text" id="shoerak" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Wifi
                                <input style="float:right" type="text" id="wifi" value="" maxlength="3" size="3"><br>
                                </label>
       
                            </div>
                            <br>
                             <!-- Second row -->
                             <div class="row black-border">
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black" style="padding-left:30px;">Curtains
                                <input style="float:right" type="text" id="curtains" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">CCTV
                                <input style="float:right" type="text" id="cctv" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Double Locker
                                <input style="float:right" type="text" id="doublelocker" value="" maxlength="3" size="3"><br>
                                </label>
                                
                            </div>
                             <br>
                                                 <!-- Second row -->
                            <div class="row black-border">
                            <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black" style="padding-left:30px;">Curtains
                                <input style="float:right" type="text" id="amn" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Center Table
                                <input style="float:right" type="text" id="centerTable" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-4 col-lg-3 checkbox-inline font-16 bold black pd-2">Buckets and mug
                                <input style="float:right" type="text" id="bucket" value="" maxlength="3" size="3"><br>
                                </label>
                                
                            </div>
                            <br>
                            <div class="row black-border">
                                <label class="col-xs-11 col-sm-3 col-md-4 col-lg-4 checkbox-inline font-16 bold black pd-2">Single Locker
                                <input type="text" id="singleLocker" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-6 col-lg-7 checkbox-inline font-16 bold black pd-2">Bed, mattress and bed sheet
                                <input type="text" id="bed" value="" maxlength="3" size="3"><br>
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
                                <button id="ajax-pg-pg_pro" class="btn-property back-color-yellow red-font">Save & Continue</button>
                                </center>
                            </div>
            </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#ajax-pg-pg_pro').click(function(e) {
            e.preventDefault();
            var serverData= {
                "TV":$('#tv').val(),
                "DTH":$('#dth').val(),
                "Sofa":$('#sofa').val(),
                "Shoe rak":$('#shoerak').val(),
                "Wifi":$('#wifi').val(),
                "Curtains":$('#curtains').val(),
                "CCTV":$('#cctv').val(),
                "Double Locker":$('#doublelocker').val(),
                "CenterTable":$('#centerTable').val(),
                "Buckets and mug":$('#bucket').val(),
                "Single Locker":$('#singleLocker').val(),
                "Bed, mattress and bedsheet":$('#bed').val(),
                "descr":$('#descr').val(),

            };
            console.log(serverData);

        $.ajax({
            type:"POST",
            url:"http://localhost:3000/post_pg_pg_aminities",
            data:serverData,
            cache: false,
            timeout: 5000,
            success: function(res){
                console.log('Property pg details Sucessfully inserted ...');
            },
            error:function() {
                console.log('Error In AJAX...');
            },
        });
    });
    
});
</script>
            