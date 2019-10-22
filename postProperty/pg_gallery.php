<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_amenities.php#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</div>
 <!--POPUP WINDOW TO SHOW SUCCESFULL MSG-->
 <div id="popupwindow" class=" mb-tb-5per popup box-outline" style="display:none;"> 
        <div class="row">
            <button type="button" onclick="closegallery()" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>   
        </div>
        <p class="blue-font bold center"> CONGRATULATIONS ! "You have successfully posted your Property, 
        Your Post will be Live in 24 hours after Verification".</p>
        <br><br>
        <div class="row center">
               <a href="#" onclick=pgdetails()>
                <div class="col-sm-12 col-md-6 col-lg-6 center">
                    <p class="w-100per popupbtn center red-font back-color-yellow pd-5per">PREVIEW LISTING <br></p>
                </div>
               </a>
               <a href="listProperty.php">
                <div class="col-sm-12 col-md-6 col-lg-6 center">
                    <p class="w-100per popupbtn center red-font back-color-yellow pd-5per">ADD ANOTHER PROPERTY</p>
                </div>
               </a>
        </div> 
        <script>
            function closegallery() {
                window.location.href="../index.php";
            }
        </script>     
    </div>
    <script>
        function pgdetails() {
            console.log(".............Into pg detail function");
            if(sessionStorage.getItem("pro_type")=="pg"){
                window.location.href="./pgalldetails.php?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type")+"&u_id="+sessionStorage.getItem("u_id");
            }
            if(sessionStorage.getItem("pro_type")=="flat"){
                window.location.href="./flatalldetails.php?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type")+"&u_id="+sessionStorage.getItem("u_id");
            }
            if(sessionStorage.getItem("pro_type")=="building"){
                window.location.href="./buildalldetails.php?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type")+"&u_id="+sessionStorage.getItem("u_id");
            }
            if(sessionStorage.getItem("pro_type")=="pg_to_pg"){
                window.location.href="./pgtopgalldetails.php?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type")+"&u_id="+sessionStorage.getItem("u_id");
            }
        }
    </script>
<!-- <form  method="post" enctype="multipart/form-data" id="myform"> -->
    <div id="gallerywindow" class="row">
    <!-- Box outline -->
        <div class="box-outline mb-tb-5per">
                <!-- Text amenities heading -->
                <center><div class="mb-tb-5per">
                            <label class="txtbox-property-heading back-color-blue white-font ">GALLERY</label>
                        </div>
                </center>
                <div class="row center">
                    <div class=" col-sm-1 col-md-1 col-lg-1">
                        <label></label>
                    </div>
                    <!-- profile img -->
                        <div  class=" col-sm-2 col-md-2 col-lg-2 " >
                            <form id="profile-attachment">
                                <label class="black-border center  upload-sec">Upload <br>Profile<input id ="profile" type="file" style="display:none" name="avatar" /></label>
                                <p style="font-size:12px" id ="profile1">Select only one file.</p>
                            </form>
                            <div class="form-group has-error has-feedback pro profile">
                                <!-- <div class="black-border " style="overflow: hidden">
                                <div class="pd-2" >
                                <span class="pd-2"  id="profile-name"></span>
                                <button class="center"  style="right:0px;position: absolute;top:0px" id="profile_remove" >X</button>
                                </div>
                                </div> -->
                            </div>
                            <br>
                        </div>
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <form id="hall-attachment">
                                <label class="black-border center upload-sec">Upload <br>Hall<input id="hall" name="imgs" type="file" multiple="true" style="display:none" ></label>
                                <p style="font-size:12px" id ="hall1">Select one or more files.</p>
                            </form>
                            <div class="form-group has-error has-feedback pro hall">
                                    <!-- <div class="black-border " style="overflow: hidden">
                                    <div class="pd-2" >
                                    <span class="pd-2"  id="hall-name"></span>
                                    <button class="center"  style="right:0px;position: absolute;top:0px" id="hall_remove" >X</button>
                                    </div>
                                    </div> -->
                            </div>

                        </div>
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <form id="bedroom-attachment">
                                <label class="black-border center   upload-sec">Upload <br>Bedroom<input id ="bedroom" type="file" multiple="true" style="display:none" name="imgs" ></label>
                                <p style="font-size:12px" id ="bedroom1">Select one or more files.</p>
                            </form>
                            <div class="form-group has-error has-feedback pro bedroom">               
                            </div>
                        </div>
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <form id="washroom-attachment">
                                <label class="black-border center upload-sec">Upload <br>Washroom<input id ="washroom" type="file" multiple="true" style="display:none" name="imgs" ></label>
                                <p style="font-size:12px" id ="washroom1">Select one or more files.</p>
                            </form>
                            <div class="form-group has-error has-feedback pro washroom">               
                            </div>
                        </div>
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <form id="balcony-attachment">
                                <label class="black-border center upload-sec">Upload <br>Balcony<input id ="balcony" type="file" multiple="true" style="display:none" name="imgs" ></label>
                                <p style="font-size:12px" id ="balcony1">Select one or more files.</p>
                                </form>
                            <div class="form-group has-error has-feedback pro balcony">               
                        </div>
                    <div class=" col-sm-1 col-md-1 col-lg-1">
                        <label></label>
                    </div>

                </div>
            </div>
                <div class="row center">
                    <form id="other-attachment">
                        <label class=" center">Others<input id ="other" type="file" multiple="true" name="imgs" style="display:none"></label>
                        <p style="font-size:12px" id ="other1"></p>
                    </form>
                    <div class=" col-sm-5 col-md-5 col-lg-5">
                    </div>
                    <div class=" col-sm-2 col-md-2 col-lg-2">

                        <div class="form-group has-error has-feedback pro other">               
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                    </div>
                </div>
        </div>
            <div class="width-eighty m-auto">
                    <center>
                    <button id="ajax-gal" class="btn-property back-color-yellow red-font">Save & Continue</button>
                    </center>
            </div>
    </div>
 

 
 <script>
$(document).ready(function () {
   if(sessionStorage.getItem('status')==1)
      {
        var serverData1= {
            //   "pro_id": sessionStorage.getItem("pro_id"),
              "status":1
          };
        

        $.ajax({
          type:"GET",
          url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
          data:serverData1,
          success:function(data){
            console.log("success data...", data[0]);

            //Getting the name of the profile image.
            var p_name=data[0].profile_img.toString();
            var profile_img_name= p_name.split(':');
            console.log("profile image........." ,profile_img_name[0]);
            $('.profile').empty().append( 
                        '<div class="black-border " style="overflow: hidden" id="profile_img">'+
                                '<div class="pd-2" >'+
                                '<span class="pd-2"  id="hall-name">'+profile_img_name[0]+'</span>'+
                                '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("profile_img",\"profile_img",\"'+p_name+'\")>X</button>'+
                               ' </div>'+
                                '</div>'
                    );
            
                    var changeparm;
                    var key=Object.keys(data[0]);
                    console.log("key.............", key);
                    for(i=0;i<key.length;i++){

                        //append the hall image block 
                        if(key[i]=='hall_img' && data[0].hall_img!=null){
                            console.log("Into hall");
                            changeparm='.hall';

                            var h_name=data[0].hall_img.toString();
                            if((h_name)!=null || (h_name)==[]) {
                                var hall_img_name= h_name.split(',');
                                console.log("hall image........." ,hall_img_name.length);
                                for(var k=0;k<hall_img_name.length;k++){

                                    console.log("k sub image........." ,hall_img_name[k]);
                                    var hall_subimg_name= (hall_img_name[k].toString()).split(':');
                                    for(var m=0;m<2;m++){
                                        console.log("hall sub image........." ,hall_subimg_name[m]);
                                        $('.hall').append(
                                            '<div class="black-border " style="overflow: hidden" id="hall_img'+k+'">'+
                                                        '<div class="pd-2" >'+
                                                        '<span class="pd-2"  id="hall-name">'+hall_subimg_name[m]+'</span>'+
                                                        '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("hall_img'+k+'",\"hall_img",\"'+hall_img_name[k]+'\")>X</button>'+
                                                    ' </div>'+
                                                        '</div>'
                                        );
                                        m++;
                                    }
                                }
                            }
                        }    //End of the hall img upload .

                       //append the bedroom image block 
                       if(key[i]=='bedroom_img' && data[0].bedroom_img!=null){
                            console.log("Into bedroom");
                            changeparm='.bedroom';

                            var b_name=data[0].bedroom_img.toString();
                            if((b_name)!=null || (b_name)==[]) {
                                var bedroom_img_name= b_name.split(',');
                                console.log("bedroom image........." ,bedroom_img_name.length);
                                for(var k=0;k<bedroom_img_name.length;k++){

                                    console.log("k sub image........." ,bedroom_img_name[k]);
                                    var bedroom_subimg_name= (bedroom_img_name[k].toString()).split(':');
                                    for(var m=0;m<2;m++){
                                        console.log("bedroom sub image........." ,bedroom_subimg_name[m]);
                                        $('.bedroom').append(
                                            '<div class="black-border " style="overflow: hidden" id="bedroom_img'+k+'">'+
                                                        '<div class="pd-2" >'+
                                                        '<span class="pd-2"  id="hall-name">'+bedroom_subimg_name[m]+'</span>'+
                                                        '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("bedroom_img'+k+'",\"bedroom_img",\"'+bedroom_img_name[k]+'\")>X</button>'+
                                                    ' </div>'+
                                                        '</div>'
                                        );
                                        m++;
                                    }
                                }
                            }
                     }   
                       
                        //append the washroom image block 
                        if(key[i]=='washroom_img' && data[0].washroom_img!=null){
                            console.log("Into washroom");
                            changeparm='.washroom';

                            var w_name=data[0].washroom_img.toString();
                            if((w_name)!=null || (w_name)==[]) {
                                var washroom_img_name= w_name.split(',');
                                console.log("washroom image........." ,washroom_img_name.length);
                                for(var k=0;k<washroom_img_name.length;k++){

                                    console.log("k sub washroom image........." ,washroom_img_name[k]);
                                    var washroom_subimg_name= (washroom_img_name[k].toString()).split(':');
                                    for(var m=0;m<2;m++){
                                        console.log("washroom sub image........." ,washroom_subimg_name[m]);
                                        $('.washroom').append(
                                            '<div class="black-border " style="overflow: hidden" id="washroom_img'+k+'">'+
                                                        '<div class="pd-2" >'+
                                                        '<span class="pd-2"  id="hall-name">'+washroom_subimg_name[m]+'</span>'+
                                                        '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("washroom_img'+k+'",\"washroom_img",\"'+washroom_img_name[k]+'\")>X</button>'+
                                                    ' </div>'+
                                                        '</div>'
                                        );
                                        m++;
                                    }
                                }
                            }
                    }
                        //append the balcony image block 
                        if(key[i]=='balcony_img' && data[0].balcony_img!=null){
                            console.log("Into balcony_img");
                            changeparm='.balcony';

                            var b_name=data[0].balcony_img.toString();
                            if((b_name)!=null || (b_name)==[]) {
                                var balcony_img_name= b_name.split(',');
                                console.log("bedroom image........." ,balcony_img_name.length);
                                for(var k=0;k<balcony_img_name.length;k++){

                                    console.log("k sub image........." ,balcony_img_name[k]);
                                    var balcony_subimg_name= (balcony_img_name[k].toString()).split(':');
                                    for(var m=0;m<2;m++){
                                        console.log("bedroom sub image........." ,balcony_subimg_name[m]);
                                        $('.balcony').append(
                                            '<div class="black-border " style="overflow: hidden" id="bedroom_img'+k+'">'+
                                                        '<div class="pd-2" >'+
                                                        '<span class="pd-2"  id="hall-name">'+balcony_subimg_name[m]+'</span>'+
                                                        '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("bedroom_img'+k+'",\"bedroom_img",\"'+balcony_img_name[k]+'\")>X</button>'+
                                                    ' </div>'+
                                                        '</div>'
                                        );
                                        m++;
                                    }
                                }
                            }
                     }   
                        //append the other_img image block 
                        if(key[i]=='other_img' && data[0].other_img!=null){
                            console.log("Into other_img");
                            changeparm='.other';

                            var o_name=data[0].other_img.toString();
                            if((o_name)!=null || (o_name)==[]) {
                                var other_img_name= o_name.split(',');
                                console.log("other image........." ,other_img_name.length);
                                for(var k=0;k<other_img_name.length;k++){

                                    console.log("k sub other image........." ,other_img_name[k]);
                                    var other_subimg_name= (other_img_name[k].toString()).split(':');
                                    for(var m=0;m<2;m++){
                                        console.log("washroom sub image........." ,other_subimg_name[m]);
                                        $('.other').append(
                                            '<div class="black-border " style="overflow: hidden" id="washroom_img'+k+'">'+
                                                        '<div class="pd-2" >'+
                                                        '<span class="pd-2"  id="hall-name">'+other_subimg_name[m]+'</span>'+
                                                        '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("washroom_img'+k+'",\"washroom_img",\"'+washroom_img_name[k]+'\")>X</button>'+
                                                    ' </div>'+
                                                        '</div>'
                                        );
                                        m++;
                                    }
                                }
                            }
                    }
                }
                                         
          },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }


       $('#ajax-gal').click(function(e) {
    $("#popupwindow").show();
    $("#gallerywindow").hide();
});
});
   if(sessionStorage.getItem('status')==1)
      {
        var serverData1= {
            //   "pro_id": sessionStorage.getItem("pro_id"),
              "status":1
          };

        $.ajax({
          type:"GET",
          url:"http://localhost:3000/get_pro_pgFlatPgtopg_details?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
          data:serverData1,
          success:function(data){
            console.log("success data...", data);
            var key=Object.keys(data[0].profile_img);
            console.log("profile image........." ,key);
            var event= {target:{id:'profile'}, files:[{name:key[0]}]};
            activeMenu(event);

            // var file= {files:[{name:key[0]}]};




            //   //  var target=[];
            // var txt="";
            // txt += "<br><strong>" + (1) + ". file</strong><br>";
            // console.log("...............files", file);
            // if ('name' in file) {
            //     console.log("...............name");

            // txt += "name: " + file.name + "<br>";
            // }        
          },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }


       $('#ajax-gal').click(function(e) {
    $("#popupwindow").show();
    $("#gallerywindow").hide();
});

$("#profile").on("change", function() {

    console.log("profile change event.......");
            $("#profile-attachment").submit();
        });

        $("#profile-attachment").submit(function(e) {
            e.preventDefault();
          var id=sessionStorage.getItem("pro_id");
          var type=sessionStorage.getItem("pro_type");
            console.log(".........attachment section", id);

        var formData = new FormData(this);
        formData.append("pro_id", id);
        formData.append("pro_type", type);
        formData.append("img_type", 'profile_img');
        console.log("form data..........", formData);
        $.ajax({
            url: "http://localhost:3000/upload",
            type: 'POST',
            data: formData,
            success: function(data) {
                    console.log("sucess into single upload api...", data);
                     var name=data.split(':');
                     console.log("split.........", name);
                    $('.profile').empty().append( 
                        '<div class="black-border " style="overflow: hidden" id="profile_img">'+
                                '<div class="pd-2" >'+
                                '<span class="pd-2"  id="hall-name">'+name[0]+'</span>'+
                                '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("profile_img",\"profile_img",\"'+data+'\")>X</button>'+
                               ' </div>'+
                                '</div>'
                    );
            },
            contentType: false,
            processData: false,
            cache: false

        });
    });

//HAll images upload event.
$("#hall").on("change", function() {   
    console.log("hall change event.......");
    $("#hall-attachment").submit();
});

//Bedroom images upload event.
$("#bedroom").on("change", function() {   
    console.log("Bedroom change event.......");
    $("#bedroom-attachment").submit();
});

//Washroom images upload event.
$("#washroom").on("change", function() {   
    console.log("WAshroom change event.......");
    $("#washroom-attachment").submit();
});

//Balcony images upload event.
$("#balcony").on("change", function() {   
    console.log("BAlcony change event.......");
    $("#balcony-attachment").submit();
});

// Other images upload event.
$("#other").on("change", function() {   
    console.log("Other change event.......");
    $("#other-attachment").submit();
});

// Hall section
$("#hall-attachment").submit(function(e) {
    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    var type=sessionStorage.getItem("pro_type");

    console.log("hall attachment ............",type);
    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", type);
    formData.append("img_type", "hall_img");

    ajax_call_API(formData);
});

$("#bedroom-attachment").submit(function(e) {
    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    var type=sessionStorage.getItem("pro_type");

    console.log("hall attachment ............");
    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", type);
    formData.append("img_type", "bedroom_img");

    ajax_call_API(formData);
});
$("#washroom-attachment").submit(function(e) {
    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    var type=sessionStorage.getItem("pro_type");

    console.log("hall attachment ............");
    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", type);
    formData.append("img_type", "washroom_img");


    ajax_call_API(formData);
});
$("#balcony-attachment").submit(function(e) {
    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    var type=sessionStorage.getItem("pro_type");

    console.log("hall attachment ............");
    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", type);
    formData.append("img_type", "balcony_img");

    ajax_call_API(formData);
});
$("#other-attachment").submit(function(e) {
    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    var type=sessionStorage.getItem("pro_type");

    console.log("other attachment ............");
    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", type);
    formData.append("img_type", "other_img");

    ajax_call_API(formData);
});

function ajax_call_API(formData) {
    $.ajax({
            url: "http://localhost:3000/mulupload",
            type: 'POST',
            data: formData,
            success: function(response) { console.log("sucess.....................", response);
              
            splitresponse =((response.toString()).split(","));
            splitres =((splitresponse.toString()).split(","));

            console.log("split.....................", splitresponse.length);
            console.log("splitresponse.....................", splitresponse);
          


            var changeparm;
            if(formData.get("img_type")=='hall_img'){
                console.log("Into hall");
                 changeparm='.hall';
            }
            if(formData.get("img_type")=='bedroom_img'){
                changeparm='.bedroom';
            }
            if(formData.get("img_type")=='washroom_img'){
                 changeparm='.washroom';
            }
            if(formData.get("img_type")=='balcony_img'){
                 changeparm='.balcony';
            }
            if(formData.get("img_type")=='other_img'){
                 changeparm='.other';
            }
            for(var i=0;i<splitresponse.length;i++){
                var subsplitres =((splitres[i].toString()).split(":"));
                console.log("changeparm........", splitres[i]);
                var val=splitres[i].toString();
                for(var j=0;j<subsplitres.length;j++){
                $(changeparm).append(
                    '<div class="black-border " style="overflow: hidden" id="'+formData.get("img_type")+i+'">'+
                                '<div class="pd-2" >'+
                                '<span class="pd-2"  id="hall-name">'+subsplitres[j]+'</span>'+
                                '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("'+formData.get("img_type")+i+'",\"'+formData.get("img_type")+'",\"'+splitres[i]+'\")>X</button>'+
                               ' </div>'+
                                '</div>'
                );
                j++;
            }
            }        
            },
            contentType: false,
            processData: false,
            cache: false
        });
 }
  </script>
