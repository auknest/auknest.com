
<?php include 'propertymenubar.html'?>
<div class="row" >
    <!-- Box outline -->
    <div class="box-outline mb-tb-5per">
        <!-- Text property heading -->
        <center><div class="mb-tb-5per">
                    <label class="txtbox-property-heading back-color-blue white-font ">LIST PROPERTY FOR</label>
                </div>
        </center>
        <!-- Types og property -->
        <form action="" method="POST">
        <div class="row">
            <div class="col-sm-6 col-md-2 cntr-desk-list">
              <input type="radio" id="pro_type" name="pg" value="pg"><span class="select-txt">PG</span>
            </div>
            <div class="col-sm-6 col-md-3 cntr-desk-list">
              <input type="radio" id="pro_type" name="flat" value="flat"><span class="select-txt">Flat</span>
            </div>
            <div class=" col-sm-6 col-md-4 cntr-desk-list">
              <input type="radio" id="pro_type" name="building" value="building"><span class="select-txt">For Building Owner</span>
            </div>
            <div class="col-sm-6 col-md-3 cntr-desk-list">
              <input type="radio" id="pro_type" name="pg_to_pg" value="pg_to_pg"><span class="select-txt">PG to PG</span>
            </div>
        </div>
      
    </div> <!--box close-->
    <div class="width-eighty m-auto">
        <center>
          <button method="POST" id ="ajax_pro_type" class="btn-property back-color-yellow red-font">NEXT</button>
        </center>
    </div>

</div>
<script>
  $(document).ready(function() {
   $('#ajax_pro_type').click(function(){ 
    var type= $("input:radio[id=pro_type]:checked").val();
    
    var serverData = {"pro_type":type};

    $.ajax({ 
      type: 'POST',
      data: serverData,
      url: 'http://localhost:3000/post_pro_type',			
      async:"true",	
      success: function(res) {
        console.log(".........response" +res);		

      alert('sucesss');
      console.log('success');
      },
      error:function(result)
      {
      console.log(result);
      alert('error');
      }
         });
    });


  }); //Ready function close

</script>



