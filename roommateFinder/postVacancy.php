<?php include './roommenu.html'?>
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
                <textarea class="form-control" placeholder="Please put your description here !!!!" rows="5" maxlength="250" required></textarea>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 mb-tb-5px center">
                <div class="col-sm-12  col-md-12 col-lg-12">
                    <label class="back-color-white center upload-sec1">Upload <br>Images
                    <input onchange="activeMenu(event)"  id ="uploadImages" multiple type="file" multiple="true" style="display:none"></label>
                    <p style="font-size:12px; color:white" id ="uploadImages1">Select one or more files.</p>
                </div>
            </div>
        </div>
        <!-- <div class="mb-tb-5px center">
            <textarea class="w-80per" placeholder="Please put your description here !!!!" rows="5" maxlength="250" required></textarea>
        </div> -->
        <!-- <div class="row center">
            <div class="col-sm-5 col-md-5 col-lg-5"></div>
            <div class="col-sm-2  col-md-2 col-lg-2">
                <label class="back-color-white center upload-sec">Upload <br>Images<input onchange="activeMenu(event)"  id ="uploadImages" multiple type="file" multiple="true" style="display:none"></label>
                <p style="font-size:12px; color:white" id ="uploadImages1">Select one or more files.</p>
            </div>
        </div> -->
        <div class="width-eighty m-auto center">
            <input type="submit" value="POST" class="btn-property back-color-yellow red-font"/>
            <br>
            <br>
        </div>
    </div>

    <div class="col-sm-2 col-md-2 col-lg-2 ">   
    </div>
</div>