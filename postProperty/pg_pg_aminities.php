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
                        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10">
                         <div> <span class="blue-font bold-font">Available Amenities </span><br></div>
                    
                            <!-- First row -->
                            <div class="row black-border">
                                
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2" style="margin-left:10px;">TV
                                <input  style="float:right" type="text" id="tv" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">DTH
                                <input  style="float:right" type="text" id="dth" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Sofa
                                <input style="float:right" type="text" id="sofa" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Shoe rack
                                <input style="float:right" type="text" id="shoerak" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-2 col-lg-2 checkbox-inline font-16 bold black pd-2">Wifi
                                <input style="float:right" type="text" id="wifi" value="" maxlength="3" size="3"><br>
                                </label>
       
                            </div>
                            <br>
                             <!-- Second row -->
                             <div class="row black-border">
                                <label class="col-xs-11 col-sm-4 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2"  style="margin-left:10px;">Double Locker
                                <input style="float:right" type="text" id="doublelocker" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-4 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Single Locker
                                <input style="float:right" type="text" id="singleLocker" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-4 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">Center Table
                                <input style="float:right" type="text" id="centerTable" value="" maxlength="3" size="3"><br>
                                </label>
                                
                                
                                
                            </div>
                             <br>
                            <!-- Third row -->
                            <div class="row black-border">
                                <!-- <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black" style="padding-left:30px;">Curtains
                                <input style="float:right" type="text" id="amn" value="" maxlength="3" size="3"><br>
                                </label> -->
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2" style="margin-left:10px;">Curtains
                                <input style="float:right" type="text" id="curtains" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-3 col-md-3 col-lg-3 checkbox-inline font-16 bold black pd-2">CCTV
                                <input style="float:right" type="text" id="cctv" value="" maxlength="3" size="3"><br>
                                </label>
                                <label class="col-xs-11 col-sm-4 col-md-4 col-lg-4 checkbox-inline font-16 bold black pd-2">Buckets and mug
                                <input style="float:right" type="text" id="bucket" value="" maxlength="3" size="3"><br>
                                </label>
                                
                                
                            </div>
                            <br>
                            <!-- Fourth Row -->
                            <div class="row black-border">
                                
                                <label class="col-xs-11 col-sm-6 col-md-5 col-lg-5 checkbox-inline font-16 bold black pd-2" style="margin-left:10px;">Bed, mattress and bed sheet
                                <input style="float:right" type="text" id="bed" value="" maxlength="3" size="3"><br>
                                </label>
                            </div>
                            <br>
                        </div>
                </div>

                <!-- Owner Aminities -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-10">
                        <div> <span class="blue-font bold-font">Owner Amenities </span><br></div>
                        <!-- First row -->
                        <div class="row black-border">
                            <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black" style="padding-left:30px;">
                            <input type="checkbox" id="ownerAminities" value="Lights">Lights
                            </label>
                            <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                            <input type="checkbox" id="ownerAminities" value="Fans">Fans
                            </label>
                            <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                            <input type="checkbox" id="ownerAminities" value="Geysers">Geysers
                            </label>
                            <!-- <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                            <input type="checkbox" id="curtains" value="Curtains">Curtains
                            </label> -->
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
    //Get api 
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
            $('#tv').val(data[0].TV);
            $('#dth').val(data[0].DTH);
            $('#sofa').val(data[0].Sofa);
            $('#shoerak').val(data[0].Shoe_rak);
            $('#wifi').val(data[0].Wifi);               
            $('#doublelocker').val(data[0].Double_Locker);
            $('#singleLocker').val(data[0].Single_Locker);
            $('#centerTable').val(data[0].CenterTable);
            $('#curtains').val(data[0].Curtains);
            $('#cctv').val(data[0].CCTV);
            $('#bucket').val(data[0].Buckets_and_mug);
            $('#bed').val(data[0].Bed_mattress_and_bedsheet);
            $('#descr').val(data[0].descr);
            //To check the multiple checkboxes into Owner aminities
            var amn = data[0].OwnerAminities.split(',');
            for(var i=0; i<amn.length;i++) {
                $('input[type=checkbox][value="'+amn[i]+'"]').attr('checked',true);
            }
        },
          error:function(){
            console.log('Error In AJAX...');
          }
        });
    }

        $('#ajax-pg-pg_pro').click(function(e) {
            e.preventDefault();
            var OwnerAminities=[];
            $("input:checkbox[id=ownerAminities]:checked").each(function(){
                OwnerAminities.push($(this).val()); 
            });
            OwnerAminities= OwnerAminities.toString();
            var serverData= {
                "pro_id": sessionStorage.getItem("pro_id"),
                "pro_type" : sessionStorage.getItem("pro_type"),
                "u_id":sessionStorage.getItem("u_id"),
                "TV":$('#tv').val(),
                "DTH":$('#dth').val(),
                "Sofa":$('#sofa').val(),
                "Shoe_rak":$('#shoerak').val(),
                "Wifi":$('#wifi').val(),
                "Curtains":$('#curtains').val(),
                "CCTV":$('#cctv').val(),
                "Double_Locker":$('#doublelocker').val(),
                "CenterTable":$('#centerTable').val(),
                "Buckets_and_mug":$('#bucket').val(),
                "Single_Locker":$('#singleLocker').val(),
                "Bed_mattress_and_bedsheet":$('#bed').val(),
                "descr":$('#descr').val(),
                "OwnerAminities":OwnerAminities

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
                window.location.href="./pg_gallery.php";
            },
            error:function(e) {
                console.log('Error In AJAX...');
                console.log(e);
            },
        });
    });
    
});
</script>
            