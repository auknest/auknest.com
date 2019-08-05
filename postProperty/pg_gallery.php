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
                <label class="black-border center  upload-sec">Upload <br>Profile<input id ="profile" onchange="activeMenu(event)" type="file" style="display:none"></label>
                <p style="font-size:12px" id ="profile1">Select one or more files.</p>
            </div>
            <div class=" col-sm-2 col-md-2 col-lg-2 ">
                <label class="black-border center upload-sec">Upload <br>Hall<input  onchange="activeMenu(event)"  id ="hall" multiple type="file" multiple="true" style="display:none"></label>
                <p style="font-size:12px" id ="hall1">Select one or more files.</p>
            </div>
            <div class=" col-sm-2 col-md-2 col-lg-2 ">
                <label class="black-border center   upload-sec">Upload <br>Bedroom<input  onchange="activeMenu(event)"  id ="bedroom" type="file" multiple="true" style="display:none"></label>
                <p style="font-size:12px" id ="bedroom1">Select one or more files.</p>
            </div>
            <div class=" col-sm-2 col-md-2 col-lg-2 ">
                <label class="black-border center upload-sec">Upload <br>Washroom<input  onchange="activeMenu(event)"  id ="washroom" type="file" multiple="true" style="display:none"></label>
                <p style="font-size:12px" id ="washroom1">Select one or more files.</p>
            </div>
            <div class=" col-sm-2 col-md-2 col-lg-2 ">
                <label class="black-border center upload-sec">Upload <br>Balcony<input  onchange="activeMenu(event)"  id ="balcony" type="file" multiple="true" style="display:none"></label>
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