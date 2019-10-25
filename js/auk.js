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
  console.log("event.......", event);
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
          //   $.ajax ({
          //     url: "http://localhost:3000/upload?type=pro",
          //     type: 'POST',
          //     data: file,
          //     success: function(response) {console.log("sucess.....................");},
          //     contentType: false,
          //     processData: false,
          //     cache: false
      
          // });
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
  //Signup page redirection to otp page
  $('#ajax-sendotp').on("submit",function(){
    console.log("..............");
    $('#signup').hide();
      $('#otp').show();
  });

});

//Login btn redirection to login page.
function showLogin() {
  $('#login').show();
}
//Signup page redirection to otp page.
function showSignup() {
  $('#login').hide();
  $('#signup').show();
}
//Close The signup login otp forgot window
function closeform() {
  $('#login').hide();
  $('#signup').hide();
  $('#forgot').hide();
  $('#otp').hide();
  $('#changePass').hide();
}
function forgotPass(){
    $('#login').hide();
   	$("#forgot").show();
   	
}
function otpsuccess() {
  $('#signup').hide();
  $("#otp").show();
}
// API call for update Status of property
function verifyStatus(sts,id,type){
  $.ajax({
    url:"http://localhost:3000/update_property_status?property_status="+sts+"&pro_id="+id,
    type:"POST",
    data:{},
    success: function (data) {
        console.log("Sucess in Update property api...");
        if(type=='pg'){
            window.location.href="../AdminPanel/admin_pg_details.php";
        }
        if(type=='flat'){
            window.location.href="../AdminPanel/admin_flat_details.php";
        }
        if(type=='building'){
            window.location.href="../AdminPanel/admin_buildingowner_details.php";
        }
        if(type=='pg_to_pg'){
            window.location.href="../AdminPanel/admin_pgtopg_details.php";
        }
    },
    error: function(err){
        console.log("Error",err);
    }
  });
}
