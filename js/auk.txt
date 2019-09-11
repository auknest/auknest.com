// navigation menu function
function myFunction() 
{
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	x.className += " responsive";
	} else {
	x.className = "topnav";
	}
}


//PG gallary page (display the name of uploaded images) 
function activeMenu(event) {
    var x =" ";   
    var id = event.target.id;
    x = document.getElementById(id);
    var txt = "";
    if ('files' in x) {
        if (x.files.length == " ") {
        txt = "Select one or more files.";
        } else {

        for (var i = 0; i < x.files.length; i++) {
            txt += "<br><strong>" + (i+1) + ". file</strong><br>";
            var file = x.files[i];
            console.log("...............files", file);
            if ('name' in file) {
            txt += "name: " + file.name + "<br>";
            }
            $.ajax ({
              url: "http://localhost:3000/upload?type=pro",
              type: 'POST',
              data: file,
              success: function(response) {console.log("sucess.....................");},
              contentType: false,
              processData: false,
              cache: false
      
          });
        }
    }
  } 
  else {
    if (x == " ") {
      txt += "Select one or more files.";
    } else {
      txt += "The files property is not supported by your browser!";
      txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
    }
  }
  var id1= id+1;
  document.getElementById(id1).innerHTML = txt;
}
// Login Pages Script
$(document).ready(function(){
  $('.palceholder').click(function() {
    $(this).siblings('input').focus();
  });
  $('.form-control').focus(function() {
      $(this).siblings('.palceholder').hide();
  });
  $('.form-control').blur(function() {
      var $this = $(this);
      if ($this.val().length == 0)
      $(this).siblings('.palceholder').show();
  });
  $('.form-control').blur();
});
