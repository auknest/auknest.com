<?php include './loginmenu.html'?>
<?php include './menu.html'?>


<div class="back-color-white " style="padding:5px;">
    <div class="row">
                    <!-- Side bar -->

             <div class="col-sm-3 col-md-3 col-lg-3 center">
                <div class="sidebar ">
                    <a id="defaultOpen" onclick="openCity(event, 'pg_to_pg');loadProducts('pg_to_pg','','pg_to_pg')" class="tablinks active" >Total PG-PG</a>
                    <a onclick="openCity(event, 'aukver');loadProducts('aukver','1','pg_to_pg')" class="tablinks" >Auknest verified</a>
                    <a onclick="openCity(event, 'fetver');loadProducts('fetver','2','pg_to_pg')" class="tablinks" >Featured Verified</a>
                    <a onclick="openCity(event, 'unver');loadProducts('unver','3','pg_to_pg')" class="tablinks" >Unverified</a> 

                </div>
            </div> 
                    <!-- Pg all details -->
            <div class="col-sm-9 col-md-8 col-lg-8 center">
            <div id="pg_to_pg" class="tabcontent">
            </div>
            <div id="aukver" class="tabcontent">
            </div>
            <div id="fetver" class="tabcontent">
            </div>  
            <div id="unver" class="tabcontent">
            </div>                                       
            </div>
    </div>
</div>


<script>
        $(document).ready(function () {
            loadProducts('pg_to_pg','','pg_to_pg');
        });
    function loadProducts(type,property_status, maintype) {
        $('.a').remove();   //For avoiding multiple appending elements on click of perticular section
  var protype=type;
  console.log("protype........", maintype);
	//get data from server..
	$.ajax({
		url:"http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+property_status,
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
			console.log(res);
    // /	details = res.productInfo;
			for (var i = 0; i < res.length; i++) {

        if(res[i].pro_type=='pg_to_pg'){
			console.log("..................");

          var yyyy="<div class=\"mb-tb-5per a\">"+
          "<div class=\"col-sm-10 col-md-6 col-lg-6\" style=\"margin-bottom:10px\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important; width:100% !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type.replace(/_/g,' ')+"&nbsp;<br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+","+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Building Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\">"+res[i].build_type+"</span>"+
                      "</div>"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">"+res[i].rent_per_person+"/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Deposite</span><br>"+
                          "<span id=\"deposite\" class=\"bold\">"+res[i].deposite+"/-</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                          "<div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 center\">"+
                              "<img class=\"profile_img img-responsive\" src=\"\">"+
                          "</div>"+
                          "<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Total Capacity</span><br>"+
                                      "<span id=\"pg_available\">"+res[i].pg_capacity+"</span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Total Staying</span><br>"+
                                      "<span>"+res[i].stay_no+"</span>"+
                                  "</div>"+
                              "</div>"+
                          "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Gate Security<span><br>"+
                                      "<span id=\"food_included\">"+res[i].gate_security+"<span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Water Supply</span><br>"+
                                      "<span>"+res[i].water_supply+"</span>"+
                                  "</div>"+
                            "</div>"+
                        "</div>"+
                            "<hr>"+
                            "<br>"+
                              "<div class=\"row\">"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<p class=\"red-font center\">Status</p>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                      "<a href=\"\../postProperty\/pgtopgalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                  '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\" id=\"proDelete\">Delete</button>'+
                                  "</div>"+
                          "</div>";  
                          if(protype=='pg_to_pg'){
                            $('#pg_to_pg').append(yyyy);

                          }
                          if(protype=='aukver'){
                            $('#aukver').append(yyyy);
                          }
                          if(protype=='fetver'){ 
                            $('#fetver').append(yyyy);
                          }
                          if(protype=='unver'){ 
                            $('#unver').append(yyyy);
                          }
        }
      }
    },
    error: function(err) {
			console.log("Error");
			$(".errorBlock").show();
			$(".loadingBlock").hide();
			$(".maskBlock").hide();
		}
	});
	console.log("finished ajax call");
    }	

</script>