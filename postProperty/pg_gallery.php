<?php include 'propertymenubar.html'?>
<div class="a">
<?php include 'submenu.html'?>
</div>
<br>
<div class="b">
<a href="./pg_amenities.php#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</div>
<script>

</script>
<form  method="post" enctype="multipart/form-data" id="myform">
    <div class="row">
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
                    <div  class=" col-sm-2 col-md-2 col-lg-2 " >
                        <label class="black-border center  upload-sec">Upload <br>Profile<input id ="profile"  onchange="activeMenu(event);" type="file" style="display:none" name="avatar" ></label>
                        <p style="font-size:12px" id ="profile1">Select one or more files.</p>
                    </div>
                    <div class=" col-sm-2 col-md-2 col-lg-2 ">
                        <label class="black-border center upload-sec">Upload <br>Hall<input  onchange="activeMenu(event)" name="avatar1"  id ="hall"  type="file" multiple="true" style="display:none" name="avatar" ></label>
                        <p style="font-size:12px" id ="hall1">Select one or more files.</p>
                    </div>
                    <div class=" col-sm-2 col-md-2 col-lg-2 ">
                        <label class="black-border center   upload-sec">Upload <br>Bedroom<input  onchange="activeMenu(event)"  id ="bedroom" type="file" multiple="true" style="display:none" name="avatar" ></label>
                        <p style="font-size:12px" id ="bedroom1">Select one or more files.</p>
                    </div>
                    <div class=" col-sm-2 col-md-2 col-lg-2 ">
                        <label class="black-border center upload-sec">Upload <br>Washroom<input  onchange="activeMenu(event)"  id ="washroom" type="file" multiple="true" style="display:none" name="avatar" ></label>
                        <p style="font-size:12px" id ="washroom1">Select one or more files.</p>
                    </div>
                    <div class=" col-sm-2 col-md-2 col-lg-2 ">
                        <label class="black-border center upload-sec">Upload <br>Balcony<input  onchange="activeMenu(event)"  id ="balcony" type="file" multiple="true" style="display:none" name="avatar" ></label>
                        <p style="font-size:12px" id ="balcony1">Select one or more files.</p>
                    </div>
                    <div class=" col-sm-1 col-md-1 col-lg-1">
                        <label></label>
                    </div>

                </div>
                <div class="row center">
                        <label class=" center">Others<input id ="other" onchange="activeMenu(event)" type="file" style="display:none"></label>
                        <p style="font-size:12px" id ="other1"></p>
                </div>
        </div>
            <div class="width-eighty m-auto">
                    <center>
                    <button class="btn-property back-color-yellow red-font">Save & Continue</button>
                    </center>
            </div>
    </div>
 </form>
 
 <script>

    //  $('#profile').change(function(){
        // var fd = new FormData();
        // var files = $('#profile')[0].files[0];
        // fd.append('file',files);


        // var file_data = $('#profile').prop('files')[0];   
        // var form_data = new FormData();                  
    //     // form_data.append('file', file_data);
    //     var form = new FormData(document.getElementById('profile'));
    // //append files
    // var file = document.getElementById('upload-image').files[0];
    // if (file) {   
    //     form.append('upload-image', file);
    // }
    //     console.log("...........data",  +form);

            // e.preventDefault();
       
        // });
        
 </script>
<script>
    var formData1;

        $("#profile").on("change", function(formData) {
               formData1 = new formData();
                return formData1;
        });

        // var formData1 = new FormData(formData[0]);    
        // formData1.append("username", "Groucho");
        console.log("form data.............", formData1);

    $("#profile").on("change", function() {
        var val = "Hi";
        $.ajax ({
            url: "http://localhost:3000/upload?type=pro",
            type: 'POST',
            data: formData1,
            success: function(response) {console.log("sucess.....................");},
            contentType: false,
            processData: false,
            cache: false

        });
    });
            // success: function(response) {console.log(response);},

</script>