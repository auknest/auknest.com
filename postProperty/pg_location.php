<?php include 'propertymenubar.php'?>

<div class="a">
<?php include 'submenu.html'?>
<?php
echo $_SESSION['pro_id'];
//  $_SESSION['pro_id']=$_POST['pro_id'];
echo $_SESSION['pro_person'];
?>
</div>
<br>
<div class="b">
<a href="./pg_who_I.php" class="previous round">&#8249;</a>
<a href="./pg_property.php" class="next round">&#8250;</a>
</div>

<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">LOCATION</label>
                </div>
        </center>
        <!-- Types pg property -->
        <div class="row">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="col-sm-12 col-md-6 col-lg-6 loc-city" >
                        <select class ="Input-txt "> 
                            <option selected disabled hidden>City</option>
                            <option value="Pune" id="dropDownId" name="Pune" value="pune"> Pune </option>
                            <option value="Mumbai" id="dropDownId" name="Mumbai" value="mumbai"> Mumbai </option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 loc-city">
                        <input class ="Input-txt" id="pro_loc" type="textbox" placeholder="Locality">
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 ">
                    <input class ="Input-txt " id="address" type="textbox" placeholder="Address">
                </div>
            </div> <!-- First row Ended-->
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 mb-tb-3per">
                    <input class ="Input-txt " id="pro_name" type="textbox" placeholder="Project Name">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 mb-tb-3per">
                    <input class ="Input-txt " type="textbox" placeholder="MAP">
                </div>
            </div>
        </div> 

        
      
    </div> <!--box close-->

    <div class="width-eighty m-auto">
        <center>
          <button id="ajax-loc" class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('#ajax-loc').click(function(e) {
            e.preventDefault();
            var serverData ={"pro_city": $('#dropDownId').val(),
                             "pro_id"   : sessionStorage.getItem("pro_id"),
                             "pro_type" : sessionStorage.getItem("pro_type"),
                             "pro_locality":$('#pro_loc').val(),
                             "pro_address":$('#address').val(),
                             "pro_name":$('#pro_name').val(),
                                };
                console.log(serverData);
            
            $.ajax ({
                type:"POST",
                url:"http://localhost:3000/post_pro_location",
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property loaction Sucessfully inserted ...' +sessionStorage.getItem("pro_type"));
                    if(sessionStorage.getItem("pro_type") == 'pg') {
                     window.location.href = "pg_property.php";
                    }
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
        });

    });
</script>
