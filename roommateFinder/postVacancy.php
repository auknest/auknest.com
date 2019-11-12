<?php include './roommenu.html'?>
<!-- <form name="myForm" action="./mainPage.php" onsubmit="return validateForm()" method="post"> -->
     <!-- <form id="roompost" action="" method="post" enctype="multipart/form-data">  -->

    <div class="row mb-15px">
        <div class="col-sm-2 col-md-2 col-lg-2">   
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 back-color-blue"> 
            <div class="mb-tb-5px">
                <img src="../img/photo1.png" class="profilePhoto">
                <label id="profileName" class="white-font pd-l-2per">Profile Name</label>
            </div>
            <div class="row">
                <div class="col-sm-7 col-md-7 col-lg-7 mb-tb-5px center">
                    <textarea id="test" name="descr" class="form-control" placeholder="Please put your description here !!!!" rows="5" maxlength="250" required></textarea>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 mb-tb-5px center">
                    <div class="col-sm-12  col-md-12 col-lg-12">
                        <!-- <label class="back-color-white center upload-sec1">Upload <br>Images
                        <input id ="uploadImages" name="imgs" multiple type="file" multiple="true" style="display:none"></label>
                        <p style="font-size:12px; color:white" id ="uploadImages1">Select one or more files.</p> -->
                        <form id="room-attachment">
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
                </div>
            </div>
<script>
    $("#hall").on("change", function() {   
    console.log("room change event.......");
    $("#room-attachment").submit();
   
});
 $("#room-attachment").submit(function(e) {
    console.log("INTO hall attachment ............");

    e.preventDefault();
    var id=sessionStorage.getItem("pro_id");
    // var type=sessionStorage.getItem("pro_type");

    var formData = new FormData(this);

    formData.append("pro_id", id);
    formData.append("pro_type", "roomate");
    formData.append("img_type", "room_img");

    ajax_call_API(formData);
});
function ajax_call_API(formData) {
    var serverData={"pro_type":"roomate"};

    $.ajax({
            url: "http://localhost:3000/mulupload",
            type: 'POST',
            data: formData,
            success: function(response) { console.log("sucess.....................", response);
               
            splitresponse =((response.toString()).split(","));
            splitres =((splitresponse.toString()).split(","));

            console.log("split count.....................", splitresponse.length);
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
                var matched = $(".hall button");
                // alert("Number of paragraphs in content div = " + matched.length);
                var subsplitres =((splitres[i].toString()).split(":"));
                console.log("changeparmaaaaaaaaaa........", splitres[i]);
                if( matched.length!=0)
                {
                    var class_id= matched.length;
                }
                else {
                    var class_id=i;
                }
                var val=splitres[i].toString();
                for(var j=0;j<subsplitres.length;j++){
                $(changeparm).append(
                    '<div class="black-border " style="overflow: hidden" class=\"class_a\" id="'+formData.get("img_type")+class_id+'">'+
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


            $("#uploadImages").on("change", function() {
                var serverData={"pro_type":"roomate"};
                console.log("Into change event......");
                $.ajax({
                url: "http://localhost:3000/mulupload",
                type: 'POST',
                data: serverData,
                success: function(response) { console.log("sucess....................."); },
                contentType: false,
                processData: false,
                cache: false

                });
            });
            </script>
            <div class="width-eighty m-auto center">
                <button id="ajax-room" type="submit" value="POST" class="btn-property back-color-yellow red-font">POST</button>
                <br>
                <br>
            </div>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 ">   
        </div>
    </div>
// </form>

// <script>
// function validateForm() {
//   var description = document.forms["myForm"]["test"].value;
//   if (description == "") {
//     alert("Description must be filled out");
//     return false;
//   }
//   var up_img = document.forms["myForm"]["up_img"].value;
//   if (up_img == "") {
//     alert("Please upload the images");
//     return false;
//   }
//   else {
//       return true;
//   }
// }
// var form3 = $( "#roompost" );
// form3.valid();

$('#ajax-room').click(function(e){

    if(form3.valid()==true){
        e.preventDefault();

        var serverData={
        "r_descr":    $('#test').val(),
        "u_id": '12',
        };
    console.log("serverdata...........", serverData);

        $.ajax({
            type:"POST",
            url: 'http://localhost:3000/post_roomate_api',						   
            data: serverData,
            cache: false,
            timeout: 5000,
            success:function(res) {
                // window.location.href = "./mainPage.php";
                    console.log('Property type Sucessfully inserted ...');
            },
            error:function() {
                    console.log('Error In AJAX...');
                    },
        });
    }

});


</script>
