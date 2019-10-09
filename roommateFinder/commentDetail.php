<?php include './roommenu.html'?>
<div>
   <div class="row">
      <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
                
        </div> 
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 center">
          <!-- <div class="w3-content w3-display-container">
              <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
              <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
              <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
              <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">

              <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div> -->
          <div class="w3-content w3-display-container inner">
          
         
          </div>     
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div> 
      <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
      </div>
   </div>
   <br>
   <br>
    <!-- Description -->

    <div class="row">
      <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
                
      </div> 
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 center black-border">
        <p>Image Description:-</p>
          <div id="description" class="font-14 justify1">
                          
          </div>
      </div> 
      <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
      </div>
    </div> 
    <br>
    <br>
</div>



<style>
/* .mySlides {display:none;} */
</style>
<body>



<script>



$(document).ready(function(){
  var parm=window.location.search.substring(1);
    var url_parm = parm ? parm : '';
    var pair = url_parm.split("&");
    var user_id=pair[0].split("=");
    var id=pair[1].split("=");
   
    var serverData={
    "u_id": user_id[1],
    "id":id[1]
  };
  console.log("serverdata....", serverData);
   $.ajax({
                type:"GET",
                url: 'http://localhost:3000/get_roomfinder',						   
                data:serverData,
                success: function(res){

                    console.log("Ajax Sucess...............");
                    console.log("data...............", res.r_img.toString());

                    $('#description').html(res[0].r_descr); 

                    $( ".inner" ).append( "<img class='mySlides img-responsive' src='../img/photo.jpg' style='width:100%'>" );
                    $( ".inner" ).append( "<img class='mySlides img-responsive' src='../img/photo1.jpg' style='width:100%'>" );
                    $( ".inner" ).append( "<img class='mySlides img-responsive' src='../img/photo2.jpg' style='width:100%'>" );
 
                    showDivs(1);                  },
                error:function(){
                    console.log("Error in AJAX............");

                }
            });
});

var slideIndex = 1;
// showDivs(slideIndex);

function plusDivs(n) {
  console.log("Into plus div........", n);
  showDivs(slideIndex += n);
}

function showDivs(n) {
  console.log("Into show div........", n);

  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
