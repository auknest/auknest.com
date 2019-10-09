<?php include './roommenu.html'?>
<!-- <form name="myForm" action="./mainPage.php" onsubmit="return validateForm()" method="post"> -->
     <form id="roompost" action="" method="post" enctype="multipart/form-data"> 

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
                        <label class="back-color-white center upload-sec1">Upload <br>Images
                        <input id ="uploadImages" name="imgs" multiple type="file" multiple="true" style="display:none"></label>
                        <p style="font-size:12px; color:white" id ="uploadImages1">Select one or more files.</p>
                    </div>
                </div>
            </div>
            <script>
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
</form>
<?php
//    echo "<pre>"; 
//    print_r($_FILES['up_img']['name']); 
//    print(count($_FILES['up_img']['name']));
//    echo "</pre>"; 
   ?> 
<script>
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
var form3 = $( "#roompost" );
form3.valid();

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
