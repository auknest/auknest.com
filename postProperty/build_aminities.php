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
                        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                         <div> <span class="blue-font bold-font">Available Amenities </span><br></div>
                            <!-- First row -->
                            <div class="row black-border">
                                
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2" style="margin-left:10px;">Light
                                <input  style="float:right" type="text" id="light" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Fan
                                <input  style="float:right" type="text" id="fans" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Geysers
                                <input style="float:right" type="text" id="geysers" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Curtains
                                <input style="float:right" type="text" id="curtains" value="" maxlength="3" size="3"><br>
                                </label>
                                <!-- <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Wifi
                                <input style="float:right" type="text" id="wifi" value="" maxlength="3" size="3"><br>
                                </label> -->
       
                            </div>
                            <br>
                            <!-- First row -->
                            <!-- <div class="row black-border">
                                
                                
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black" style="padding-left:30px;">
                                <input type="checkbox" id="light" value="Light">Light
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="fans" value="Fans">Fan
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="gaysers" value="Geysers">Geysers
                                </label>
                                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                                <input type="checkbox" id="curtains" value="Curtains">Curtains
                                </label>
       
                            </div>
                            <br> -->
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
                                <button id="ajax-build-amn" class="btn-property back-color-yellow red-font">Save & Continue</button>
                                </center>
                            </div>
            </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        // Call For GET API
        if(sessionStorage.getItem('status')==1)
        {
            console.log("Into the property get ajax");
            var serverData1= {
                            "status":1
            };

            $.ajax({
                type:"GET",
                url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
                data:serverData1,
                success:function(data){
                    console.log("data.......", data);
                    $('#light').val(data[0].lights);
                    $('#fans').val(data[0].fans); 
                    $('#geysers').val(data[0].geysers); 
                    $('#curtains').val(data[0].curtains); 
                    $('#descr').val(data[0].descr); 
                },
                error:function(){
                    console.log('Error In AJAX...');

                }
            });
        }
        //End of GET API

        console.log("Into ajax call ..........");

        $('#ajax-build-amn').click(function(e){
            e.preventDefault();
            console.log("Into ajax call ..........");
            var serverData={
                "pro_id": sessionStorage.getItem("pro_id"),
                "pro_type" : sessionStorage.getItem("pro_type"),
                "lights": $("#light").val(),
                "fans":$("#fans").val(),
                "geysers":$("#geysers").val(),
                "curtains":$("#curtains").val(),
                "descr":$("#descr").val()
            };
            console.log(serverData);
            $.ajax({
                type:"POST",
                url:"http://localhost:3000/post_build_aminities",
                data:serverData,
                success: function(res){
                    console.log("Successfully inserted data into builder details");
                    window.location.href="./pg_gallery.php";
                },
                error: function(e){
                    console.log("Error into AJAX");
                    console.log(e);
                }
            });

        });
    });
</script>