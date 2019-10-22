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
                            <div class="form-group has-error has-feedback pro">
                                <div class="black-border " style="overflow: hidden">
                                <div class="pd-2" >
                                <span class="pd-2"  id="profile-name"></span>
                                <button class="center"  style="right:0px;position: absolute;top:0px" id="profile_remove" >X</button>
                                </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    <script>
                        $('#profile_remove').click(function(e) {
                            console.log("////////");

                            var profilename=  document.getElementById('profile-name');
                            console.log("........profilename.", profilename);

                            var serverData1= {
                                "profile_img": $('#profile-name').text()
                            };
                            console.log("////////", serverData1);
                            $.ajax({
                                type:"DELETE",
                                url:"http://localhost:3000/delete_gallery_img?pro_id="+sessionStorage.getItem("pro_id")+"&pro_type="+sessionStorage.getItem("pro_type"),
                                data:"",
                                success:function(data){
                                console.log("delete profile image api");
                                $('#profile-name').html('');     
                            },
                                error:function(){
                                console.log('Error In AJAX...');

                                 }
                            });
                            
                        });

                    </script>
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

                    <form id="bedroom-attachment">
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <label class="black-border center   upload-sec">Upload <br>Bedroom<input  onchange="activeMenu(event)"  id ="bedroom" type="file" multiple="true" style="display:none" name="imgs" ></label>
                            <p style="font-size:12px" id ="bedroom1">Select one or more files.</p>
                        </div>
                    </form>
                    <form id="washroom-attachment">
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <label class="black-border center upload-sec">Upload <br>Washroom<input  onchange="activeMenu(event)"  id ="washroom" type="file" multiple="true" style="display:none" name="imgs" ></label>
                            <p style="font-size:12px" id ="washroom1">Select one or more files.</p>
                        </div>
                    </form>
                    <form id="balcony-attachment">
                        <div class=" col-sm-2 col-md-2 col-lg-2 ">
                            <label class="black-border center upload-sec">Upload <br>Balcony<input  onchange="activeMenu(event)"  id ="balcony" type="file" multiple="true" style="display:none" name="imgs" ></label>
                            <p style="font-size:12px" id ="balcony1">Select one or more files.</p>
                        </div>
                    </form>
                    <div class=" col-sm-1 col-md-1 col-lg-1">
                        <label></label>
                    </div>

                </div>
                <div class="row center">
                <form id="other-attachment">
                        <label class=" center">Others<input id ="other" onchange="activeMenu(event)" type="file" multiple="true" name="imgs" style="display:none"></label>
                        <p style="font-size:12px" id ="other1"></p>
                </form>
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
        console.log("form data..........", formData);
        $.ajax({
            url: "http://localhost:3000/upload",
            type: 'POST',
            data: formData,
            success: function(data) {
                    console.log("sucess into single upload api...", data);
                    $('#profile-name').html(data);
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

// //Bedroom images upload event.
// $("#bedroom").on("change", function() {   
//     console.log("Bedroom change event.......");
//     $("#bedroom-attachment").submit();
// });

// //Washroom images upload event.
// $("#washroom").on("change", function() {   
//     console.log("WAshroom change event.......");
//     $("#washroom-attachment").submit();
// });

// //Balcony images upload event.
// $("#balcony").on("change", function() {   
//     console.log("BAlcony change event.......");
//     $("#balcony-attachment").submit();
// });

// // Other images upload event.
// $("#other").on("change", function() {   
//     console.log("Other change event.......");
//     $("#other-attachment").submit();
// });

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

// $("#bedroom-attachment").submit(function(e) {
//     e.preventDefault();
//     var id=sessionStorage.getItem("pro_id");
//     var type=sessionStorage.getItem("pro_type");

//     console.log("hall attachment ............");
//     var formData = new FormData(this);

//     formData.append("pro_id", id);
//     formData.append("pro_type", type);
//     formData.append("img_type", "bedroom_img");

//     ajax_call_API(formData);
// });
// $("#washroom-attachment").submit(function(e) {
//     e.preventDefault();
//     var id=sessionStorage.getItem("pro_id");
//     var type=sessionStorage.getItem("pro_type");

//     console.log("hall attachment ............");
//     var formData = new FormData(this);

//     formData.append("pro_id", id);
//     formData.append("pro_type", type);
//     formData.append("img_type", "washroom_img");


//     ajax_call_API(formData);
// });
// $("#balcony-attachment").submit(function(e) {
//     e.preventDefault();
//     var id=sessionStorage.getItem("pro_id");
//     var type=sessionStorage.getItem("pro_type");

//     console.log("hall attachment ............");
//     var formData = new FormData(this);

//     formData.append("pro_id", id);
//     formData.append("pro_type", type);
//     formData.append("img_type", "balcony_img");

//     ajax_call_API(formData);
// });
// $("#other-attachment").submit(function(e) {
//     e.preventDefault();
//     var id=sessionStorage.getItem("pro_id");
//     var type=sessionStorage.getItem("pro_type");

//     console.log("other attachment ............");
//     var formData = new FormData(this);

//     formData.append("pro_id", id);
//     formData.append("pro_type", type);
//     formData.append("img_type", "other_img");

//     ajax_call_API(formData);
// });

function ajax_call_API(formData) {
    $.ajax({
            url: "http://localhost:3000/mulupload",
            type: 'POST',
            data: formData,
            success: function(response) { console.log("sucess.....................", response);
            var splitresponse =(response.toString()).split(",");
            console.log("split.....................", splitresponse.length);
            for(var i=0;i<splitresponse.length;i++){
                var splitres =(response.toString()).split(":");

                // var a={
                //     "<div class=\"black-border \" style=\"overflow: hidden\">"+
                //                 "<div class=\"pd-2\" >"+
                //                 "<span class=\"pd-2\"  id=\"profile-name\"></span>"+
                //                 "<button class=\"center\"  style=\"right:0px;position: absolute;top:0px\" id=\"profile_remove\" >X</button>"+
                //                 "<\/div>"+
                //                 "<\/div>"
                // };
                $('.hall').append(
                    '<div class="black-border " style="overflow: hidden">'+
                                '<div class="pd-2" >'+
                                '<span class="pd-2"  id="hall-name">'+splitres[i]+'</span>'+
                                '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" >X</button>'+
                               ' </div>'+
                                '</div>'
                );

            }

            
            },
            contentType: false,
            processData: false,
            cache: false
        });
 }
// });
//  </script>
<script>
   
            // success: function(response) {console.log(response);},

</script>