
<?php include 'propertymenubar.php'?>
<?php
echo session_id();
$_SESSION['pro_id']= uniqid();
 ?>
 
<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">LIST PROPERTY FOR</label>
                </div>
        </center>
        <!-- Types og property -->
        <form name="myform" method="POST">
        <div class="row">
            <div class="col-sm-6 col-md-2 cntr-desk-list">
              <input type="radio" id="pro_type" name="pro_type" value="pg"><span class="select-txt">PG</span>
            </div>
            <div class="col-sm-6 col-md-3 cntr-desk-list">
              <input type="radio" id="pro_type" name="pro_type" value="flat"><span class="select-txt">Flat</span>
            </div>
            <div class=" col-sm-6 col-md-4 cntr-desk-list">
              <input type="radio" id="pro_type" name="pro_type" value="building"><span class="select-txt">For Building Owner</span>
            </div>
            <div class="col-sm-6 col-md-3 cntr-desk-list">
              <input type="radio" id="pro_type" name="pro_type" value="pg_to_pg"><span class="select-txt">PG to PG</span>
            </div>
        </div>
      
    </div> <!--box close-->
    <div class="width-eighty m-auto">
        <center>
          <button id ="ajax_pro_type" class="btn-property back-color-yellow red-font">NEXT</button>
        </center>
    </div>
    </form>

</div>
<script>
  


  $(document).ready(function() {
   $('#ajax_pro_type').click(function(e){ 

    e.preventDefault();
    var type= $("input:radio[id=pro_type]:checked").val();
    var serverData = {"pro_type" : type,
                      "pro_id"   : "<?php echo $_SESSION['pro_id']?>"};
    
    
    $.ajax({
                type: "POST",
                url: 'http://localhost:3000/post_pro_type',						   
                data:serverData,
                cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {
                  // if(type=="pg") {
                    window.location.href = "pg_who_I.php";

                    // document.myform.action ="./pg_who_I.php";
                  // }
                  console.log('Property type Sucessfully inserted ...');
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
            });
            
            sessionStorage.setItem("pro_id", "<?php echo $_SESSION['pro_id']?>");
            sessionStorage.setItem("pro_type", type);    
    });
   
  }); //Ready function close
  
</script>
