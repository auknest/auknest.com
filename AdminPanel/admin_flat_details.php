<?php include './loginmenu.html'?>
<?php include './menu.html'?>


<div class="back-color-white " style="padding:5px;">
    <div class="row">
                    <!-- Side bar -->

             <div class="col-sm-3 col-md-3 col-lg-3 center">
                <div class="sidebar ">
                    <a id="defaultOpen" onclick="openCity(event, 'flat');loadProducts('flat','null','flat')" class="tablinks active" >Total Flat</a>
                    <a onclick="openCity(event, 'aukver');loadProducts('aukver','1','flat')" class="tablinks" >Auknest verified</a>
                    <a onclick="openCity(event, 'fetver');loadProducts('fetver','2','flat')" class="tablinks" >Featured Verified</a>
                    <a onclick="openCity(event, 'unver');loadProducts('unver','3','flat')" class="tablinks" >Unverified</a> 

                </div>
            </div> 
                    <!-- Pg all details -->
            <div class="col-sm-9 col-md-8 col-lg-8 center">
            <div id="flat" class="tabcontent">
                <input id="searchloc" type="text" placeholder="Search.." name="search">
                <button onclick="loadProducts('flat','null','flat',)" type="submit"><i class="fa fa-search"></i></button>
            </div>
            <div id="aukver" class="tabcontent">
                <input id="searchloc1" type="text" placeholder="Search.." name="search">
                <button id="btn1" onclick="loadProducts('aukver','1','flat',)" type="submit"><i class="fa fa-search"></i></button>
            </div>
            <div id="fetver" class="tabcontent">
                <input id="searchloc2" type="text" placeholder="Search.." name="search">
                <button id="btn2" onclick="loadProducts('fetver','2','flat',)" type="submit"><i class="fa fa-search"></i></button>   
            </div>  
            <div id="unver" class="tabcontent">
                <input id="searchloc3" type="text" placeholder="Search.." name="search">
                <button id="btn3" onclick="loadProducts('unver','3','flat',)" type="submit"><i class="fa fa-search"></i></button>   
            </div>                                       
            </div>
    </div>
</div>


<script>
        $(document).ready(function () {
            loadProducts('flat','null','flat');
        });
    function loadProducts(type, property_status, maintype) {
        $('.a').remove();   //For avoiding multiple appending elements on click of perticular section
  var protype=type;
  console.log("protype........",  property_status);
  var loc=null;
    if(property_status=='1'){
        $('#searchloc').hide();
        $('#searchloc1').show();
        $('#searchloc2').hide();
        $('#searchloc3').hide();
        $('#btn').hide();
        $('#btn1').show();
        $('#btn2').hide();
        $('#btn3').hide();
        var loc=$('#searchloc1').val();
        var URL="http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+property_status+"&loc="+loc;  

    }
    if(property_status=='2'){
        $('#searchloc').hide();
        $('#searchloc1').hide();
        $('#searchloc2').show();
        $('#searchloc3').hide();
        $('#btn').hide();
        $('#btn1').hide();
        $('#btn2').show();
        $('#btn3').hide();
        var loc=$('#searchloc2').val();
        var URL="http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+property_status+"&loc="+loc;  

    }
    if(property_status=='3'){
        $('#searchloc').hide();
        $('#searchloc1').hide();
        $('#searchloc2').hide();
        $('#searchloc3').show();
        $('#btn').hide();
        $('#btn1').hide();
        $('#btn2').hide();
        $('#btn3').show();
        var loc=$('#searchloc3').val();
        var URL="http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+property_status+"&loc="+loc;  

    }
    if(property_status=='null'){
        $('#searchloc').show();
        $('#searchloc1').hide();
        $('#searchloc2').hide();
        $('#searchloc3').hide();
        $('#btn').show();
        $('#btn1').hide();
        $('#btn2').hide();
        $('#btn3').hide();      
        var l=$('#searchloc').val();
        // var loc1=loc1?l:null;
        if(l) {
            var s='';
            console.log("Into loc1 null...", l);

            var URL="http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+s+"&loc="+l;  

        }
        else {
            console.log("Into else...");
            var s='';
            var URL="http://localhost:3000/get_alladmin_pgdetails?pro_type="+maintype+"&property_status="+s;

        }
    }
   console.log("loc.....", loc);
   console.log("url.....", URL);

	//get data from server..
	$.ajax({
        url:URL,
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
			console.log(res);
    // /	details = res.productInfo;
			for (var i = 0; i < res.length; i++) {

        if(res[i].pro_type=='flat'){
			console.log("..................");

          var yyyy="<div class=\"mb-tb-5per a\">"+
          "<div class=\"col-sm-10 col-md-6 col-lg-6\" style=\"margin-bottom:10px\">"+
              "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important; width:100% !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                          res[i].pro_type+"&nbsp; for &nbsp;<span id=\"pg_for\">"+res[i].flat_for+"</span><br>"+
                          "<span id=\"result\"></span>"+

                          "<span>"+res[i].pro_locality+",&nbsp;"+res[i].pro_city+"</span>"+
                      "</div>"+
                  "</div>"+
                  "<hr style=\"margin-top:0px !important\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Room Type</span><br>"+
                          "<span id=\"room_type\" class=\"bold\">"+res[i].flat_room_type+"</span>"+
                      "</div>"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Rent</span><br>"+
                          "<span id=\"rent\" class=\"bold\">"+res[i].expected_rent+"/- </span>"+
                      "</div>"+
                      "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                          "<span>Deposite</span><br>"+
                          "<span id=\"deposite\" class=\"bold\">"+res[i].security_amt+"/-</span>"+
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
                                      "<span>Propert Type</span><br>"+
                                      "<span id=\"pg_available\">"+res[i].flat_type+"</span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Posted On</span><br>"+
                                      "<span>"+res[i].avl_frm+"</span>"+
                                  "</div>"+
                              "</div>"+
                          "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Furnish<span><br>"+
                                      "<span id=\"food_included\">"+res[i].furnish+"<span>"+
                                  "</div>"+
                                  "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                      "<span>Property System</span><br>"+
                                      "<span>"+res[i].flat_type+"</span>"+
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
                                      "<a href=\"\../postProperty\/flatalldetails.php?u_id="+res[i].u_id+"&pro_type="+res[i].pro_type+"&pro_id="+res[i].pro_id+"\" ><button class=\"w-100per center red-font back-color-yellow pd-5per\">Details</button></a>"+
                                  "</div>"+
                                  "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                  '<button onclick=deletepro("'+res[i].pro_type+'","'+res[i].pro_id+'") class=\"w-100per center red-font back-color-yellow pd-5per\" id=\"proDelete\">Delete</button>'+
                                  "</div>"+
                          "</div>";  
                          if(protype=='flat'){ 
                            $('#flat').append(yyyy);

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