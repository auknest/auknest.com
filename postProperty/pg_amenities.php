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
                        <input type="radio" id="bathroom" name="bathroom" value="yes" >Yes
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
                        <input type="radio" id="bal" name="balcony" value="yes" >Yes
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
                        <input type="radio" id="area" name="area" value="yes" >Yes
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
                            <input id="park" type="radio" name="parking" value="bike" >Bike
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
                <input type="checkbox" id="amn" value="TV">TV
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="DTH">DTH
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Sofa">Sofa
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Geizer">Geizer
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Bed">Bed
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Locker">Locker
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Wifi">Wifi
                </label>
                <label class="col-md-2 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Center Table">Center Table
                </label>
                
               
            </div>
            <br>
            <!-- Second row -->
            <div class="row black-border">
               
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="amn" value="AC">AC
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Freeze">Freeze
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Drinking Water">Drinking Water
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Room cleaning">Room Cleaning
                </label>
                <label class="col-md-3 col-lg-3 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Washing Machine">Washing Machine
                </label>
                
                
                
            </div>
            <br>
             <!-- Third row -->
             <div class="row black-border">
             <label class="col-md-4 col-lg-4 checkbox-inline font-16 bold black" style="padding-left:30px;">
                <input type="checkbox" id="amn" value="Gas(Cooking Allowed)">Gas(Cooking Allowed)
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Cooler">Cooler
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="amn" value="Shoerack">Shoerack
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
                <input type="checkbox" id="gen" value="Lift">Lift
                </label>
                <label class="col-md-1 col-lg-1 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Cctv">Cctv
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Power Backup">Power Backup
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Caretakes">Caretakes
                </label>
                <label class="col-md-2 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Water supply">Water supply 
                </label>
                <label class="col-md-3 col-lg-2 checkbox-inline font-16 bold black">
                <input type="checkbox" id="gen" value="Security guard">Security guard
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
                        <input type="radio" id="rule" name="guardian" value="yes" >Yes
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
        if(sessionStorage.getItem('status')==1)
      {
          console.log("Into the property get ajax");
        var serverData1= {
            //   "pro_id": sessionStorage.getItem("pro_id"),
            //   "pro_type":sessionStorage.getItem("pro_type"),
              "status":1
          };

        $.ajax({
          type:"GET",
          url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
          data:serverData1,
          success:function(data){
            console.log("data.......", data);
 
            $('input:radio[id=bathroom][value="'+data[0].att_bath+'"]').attr('checked',true);                
            $('input:radio[id=bal][value="'+data[0].att_bal+'"]').attr('checked',true);                
            $('input:radio[id=area][value="'+data[0].com_area+'"]').attr('checked',true);                
            $('input:radio[id=park][value="'+data[0].parking+'"]').attr('checked',true);                
            $('input:radio[id=rule][value="'+data[0].pg_rules+'"]').attr('checked',true);   

            //To check the multiple checkboxes into general aminities
            var pgAminiArr = data[0].pg_amenities.split(',');
            for(var i=0; i<pgAminiArr.length;i++) {
                $('input[type=checkbox][value="'+pgAminiArr[i]+'"]').attr('checked',true);

            }

            //To check the multiple checkboxes into general aminities
            var genAminiArr = data[0].gen_amenities.split(',');
            for(var i=0; i<genAminiArr.length;i++) {
                $('input[type=checkbox][value="'+genAminiArr[i]+'"]').attr('checked',true);

            }
        },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }

        $('#ajax-pg-ame').click(function(e) {
            e.preventDefault();
            console.log(".......available pg");
            var pg_ame= [];
            var gen_ame= [];

            console.log(".......available flat");
            $("input:checkbox[id=amn]:checked").each(function(){
                pg_ame.push($(this).val());
                
                });
                $("input:checkbox[id=gen]:checked").each(function(){
                gen_ame.push($(this).val());
                });
                pg_ame=pg_ame.toString();
                gen_ame=gen_ame.toString();

            var serverData ={"att_bath": $("input:radio[id=bathroom]:checked").val(),
                             "pro_id": sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "att_bal":$("input:radio[id=bal]:checked").val(),
                             "com_area":$("input:radio[id=area]:checked").val(),
                             "parking":$("input:radio[id=park]:checked").val(),
                             "pg_amenities":pg_ame,
                             "gen_amenities":gen_ame,
                             "pg_rules":$("input:radio[id=rule]:checked").val(),
                             "u_id":sessionStorage.getItem("u_id"),
                                };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/post_pg_amenities",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property pg amenities details Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                     window.location.href = "pg_gallery.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>