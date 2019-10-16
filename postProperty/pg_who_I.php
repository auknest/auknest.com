<?php include 'propertymenubar.php'?>
<div class="a">
<?php include 'submenu.html'?>

</div>
<br>
<div class="b">
<a href="#" class="previous round">&#8249;</a>
<a href="./pg_location.php" class="next round">&#8250;</a>
</div>
<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
   
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">I AM</label>
                </div>
        </center>
        <!-- Types og property -->
        <div class="row center-desktop">
            <div class="col-sm-12 col-md-4 mb-tb-3per">
              <input type="radio" id ="pro_person" name="pro_person" value="Owner"><span class="select-txt">Owner</span>
            </div>
            <div class="col-sm-12 col-md-4 mb-tb-3per">
              <input type="radio" id ="pro_person" name="pro_person" value="Agent / Broker" disabled><span class="select-txt" >Agent / Broker</span>
            </div>
            <div class="col-sm-12 col-md-4 mb-tb-3per">
              <input type="radio" id ="pro_person" name="pro_person" value="Builder" disabled><span class="select-txt"  >Builder</span>
            </div>
        </div>
      
    </div> <!--box close-->
    <style>
     
    </style>
    <div class="width-eighty m-auto">
        <center>
          <button  id="ajax_who" class="btn-property back-color-yellow red-font">Save & Continue</button>
        </center>
    </div>
</div>
</div>

<script>

    $(document).ready(function () {
      

      if(sessionStorage.getItem('status')==1)
      {
        var serverData1= {
              "pro_id": sessionStorage.getItem("pro_id"),
              "status":1
          };

        $.ajax({
          type:"GET",
          url:"http://localhost:3000/get_pro_type",
          data:serverData1,
          success:function(data){
            console.log("data...", data);
            $('input:radio[value="'+data[0].pro_person+'"]').attr('checked',true);                
          },
          error:function(){
            console.log('Error In AJAX...');

          }
        });
      }
      $('#ajax_who').click( function(e){
        e.preventDefault();
         var pro_person = $("input:radio[id=pro_person]:checked").val();
         var serverData = {"pro_person" : pro_person,
                           "pro_id"   : sessionStorage.getItem("pro_id"),
                           "pro_type" : sessionStorage.getItem("pro_type")
                            };
          console.log(serverData);
          sessionStorage.setItem("pro_person", pro_person);    


         $.ajax ({
          type: "POST",
          url:"http://localhost:3000/post_pg_who_I",
          data:serverData,
          cache: false,
                timeout: 5000,
                complete: function() {
                  //called when complete
                  console.log('process complete');
                },
                success: function(res) {      
                  console.log('Property person type Sucessfully inserted ...');
        
                     window.location.href = "pg_location.php";
               },
                error: function() {
                  console.log('Error In AJAX...');
                },
         });


      });

    });
</script>