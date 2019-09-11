<?php include './roommenu.html'?>
<!-- <form name="myForm" action="./mainPage.php" onsubmit="return validateForm()" method="post"> -->
     <form action="" method="post" enctype="multipart/form-data"> 

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
                    <textarea name="descr" class="form-control" placeholder="Please put your description here !!!!" rows="5" maxlength="250" required></textarea>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 mb-tb-5px center">
                    <div class="col-sm-12  col-md-12 col-lg-12">
                        <label class="back-color-white center upload-sec1">Upload <br>Images
                        <input name="up_img[]" onchange="activeMenu(event)"  id ="uploadImages" multiple type="file" multiple="true" style="display:none"></label>
                        <p style="font-size:12px; color:white" id ="uploadImages1">Select one or more files.</p>
                    </div>
                </div>
            </div>

            <div class="width-eighty m-auto center">
                <input type="submit" value="POST" class="btn-property back-color-yellow red-font" onclick="submitVaccancy()">
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
function validateForm() {
  var description = document.forms["myForm"]["descr"].value;
  if (description == "") {
    alert("Description must be filled out");
    return false;
  }
  var up_img = document.forms["myForm"]["up_img"].value;
  if (up_img == "") {
    alert("Please upload the images");
    return false;
  }
}
</script>
