<?php include './roommenu.html'?>
<div>
   <div class="row">
   <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
            
    </div> 
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 center">
        <div class="w3-content w3-display-container">
            <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
            <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
            <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">
            <img class="mySlides img-responsive" src="../img/photo.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div> 
    <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
            
    </div> 
    </div> 


</div>



<style>
.mySlides {display:none;}
</style>
<body>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
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
