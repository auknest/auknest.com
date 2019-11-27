<?php include '../menu.html';?>
</div>

<div class="row pd-5per" >
    <!-- search menu -->
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <a href="javascript:void(0);" class="icon" onclick="myFunction1()">Filter
        <i class="fa fa-bars"></i>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3" style="background: #f1f1f1;">
      <div class="filter">
        <form action="./searchbuildfilter.php" method="POST">
                <div>Locality<br>
                <input id="searchloc" type="text" placeholder="Search.." name="search"><i class="fa fa-search"></i>
                </div>
                <hr>
                <div>Budget <br>
                    <select name="select_budget" id="select_budget">
                    <option value="null">MIN-MAX</option>
                    <option min="0">0-5000</option>
                    <option min="5000">5000-10000</option>
                    <option min="10000">10000-500000</option>
                    </select>
                </div>
                <hr>
                <div>BHK of Apartment</div>
                    <div class="row">
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="Room System">Room System
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="1BHK">1BHK
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="2BHK">2BHK
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="3BHK">3BHK
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="4BHK">4BHK
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                            <input type="radio" id="bathroom" name="room_type" value="4+BHK">4+BHK
                        </div>
                    </div>
                <hr>
                <div>Property For<br>
                    <div class="row">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 bold black">
                        <input type="radio" id="bathroom" name="pg_for" value="building" checked>building
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 bold black">
                        <input type="radio" id="bathroom" name="pg_for" value="pg_to_pg">pg_to_pg
                    </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <button type="submit"> Reset </button>
                    </div>
                    <div class=" col-sm-3 col-md-3 col-lg-3">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <button type="submit"> Submit </button>
                    </div>
                </div>
        </form>
      </div>
    </div>
    <!-- search list -->
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <div id="PG" class="tabcontent">
        </div>
		<div id="flat" class="tabcontent">
        </div>
		<div id="pg_to_pg" class="tabcontent">
        </div>
		<div id="building" class="tabcontent">
        </div>
        
</div>
    <!-- Advertise -->
    <div class="col-xs-12 col-md-2 col-lg-2"></div>

</div>
<script>
var loc= "<?php echo(isset($_POST['search']) ? $_POST['search'] : 'null');?>";
var budget= "<?php echo(isset($_POST['select_budget']) ? $_POST['select_budget'] : 'null');?>";
var room_type= "<?php echo(isset($_POST['room_type']) ? $_POST['room_type'] : 'null');?>";
var pro_type= "<?php echo(isset($_POST['pg_for']) ? $_POST['pg_for'] : 'null');?>";
var food= "<?php echo(isset($_POST['food']) ? $_POST['food'] : 'null');?>";
if(budget!="null"){
            var rent=budget.split('-');
            var minbudget=rent[0];
            var maxbudget=rent[1];
        }
        else{
            var minbudget="null";
            var maxbudget="null";
        }

const obj={
            pro_type: pro_type,
            pro_locality:loc, 
            minbudget:minbudget,
            maxbudget:maxbudget,
            pg_room_type:room_type,
            food_included:food
            };

const newObj = Object.keys(obj)
               .filter(e => obj[e] !== 'null')
               .reduce( (o, e) => {
                    o[e]  = obj[e]
                    return o;
               }, {});
                      

	//get data from server..
	$.ajax({
		url:"http://localhost:3000/get_search_filter_data",
		type: 'GET',
        data:newObj,
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
            console.log("res.............", res);
            for (var h in newObj) {
                console.log("pppppppppppppppppp", h);
                if(h=='pro_locality')
                {
                    $('#searchloc').val(loc);
                }
                if(h=='minbudget'){
                      $('#select_budget option[min="'+minbudget+'"]').attr("selected", "selected");                 
                }
                if(h=='pg_room_type'){
                    $('#bathroom').attr("checked",true);                 
                }
                if(h=='pg_for'){
                    $('input[name=pg_for][value="'+pg_for+'"]').attr('checked', 'checked');
                }
                if(h=='food_included'){
                    console.log("aaaaaaaaaa", food);
                    $('input[name=food][value="'+food+'"]').attr('checked', 'checked');
                }
            }

            for (var i = 0; i < res.length; i++) 
            {                    
    //Building
		if(res[i].pro_type=='building')
        {
                   if(res[i].property_status=='1')
                    {
                    res[i].property_status="AUK Verified";       
                    }
                    if(res[i].property_status=='2')
                    {
                    res[i].property_status="Fet Verified";       
                    }
                var yyyy="<div class=\"mb-tb-5per \">"+
                "<div class=\"row \" onclick=prodetails('"+res[i].u_id+"','"+res[i].pro_type+"','"+res[i].pro_id+"');>"+
                "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">"+
                    "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important; width:100% !important\">"+
                        "<div class=\"row\">"+
                            "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                                res[i].pro_type+"&nbsp; on &nbsp;<span id=\"pg_for\">"+res[i].property_for+"</span><br>"+
                                "<span id=\"result\"></span>"+

                                "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
                            "</div>"+
                        "</div>"+
                        "<hr style=\"margin-top:0px !important\">"+
                        "<div class=\"row\">"+
                            "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                                "<span>Building Type</span><br>"+
                                "<span id=\"room_type\" class=\"bold\"></span>"+
                            "</div>"+
                            "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                                "<span>Rent</span><br>"+
                                "<span id=\"rent\" class=\"bold\">/- </span>"+
                            "</div>"+
                            "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                                "<span>Deposite</span><br>"+
                                "<span id=\"deposite\" class=\"bold\">/-</span>"+
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
                                            "<span>Property Age</span><br>"+
                                            "<span id=\"pg_available\">"+res[i].property_age+"</span>"+
                                        "</div>"+
                                        "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                            "<span>Gate Security</span><br>"+
                                            "<span>"+res[i].gate_security+"</span>"+
                                        "</div>"+
                                    "</div>"+
                                "<hr style=\"margin-top:0px !important\">"+
                                    "<div class=\"row\">"+
                                        "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                            "<span>Power Backup<span><br>"+
                                            "<span id=\"food_included\">"+res[i].power_bakup+"<span>"+
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
                                            "<p id='status'>"+res[i].property_status+"</p>"+
                                        "</div>"+
                                        "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                            "<button class=\"w-100per center red-font back-color-yellow pd-5per\" onclick=contactowner()>Contact Owner</button>"+
                                        "</div>"+
                                    
                                "</div>";   
                                $('#building').append(yyyy);
        }//if of Building ends
                if(res[i].pro_type=='pg_to_pg'){
                var yyyy="<div class=\"mb-tb-5per \">"+
                "<div class=\"row \" onclick=prodetails('"+res[i].u_id+"','"+res[i].pro_type+"','"+res[i].pro_id+"');>"+
                "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">"+
                    "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important; width:100% !important\">"+
                        "<div class=\"row\">"+
                            "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 capital bold\">"+
                                res[i].pro_type.replace(/_/g,' ')+"<br>"+
                                "<span id=\"result\"></span>"+

                                "<span>"+res[i].pro_locality+", "+res[i].pro_city+"</span>"+
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
                                            "<p id='status'>"+res[i].property_status+"</p>"+
                                        "</div>"+
                                        "<div class=\"col-sm-12 col-md-4 col-lg-4 center\">"+
                                            "<button class=\"w-100per center red-font back-color-yellow pd-5per\" onclick=contactowner()>Contact Owner</button>"+
                                        "</div>"+
                                    
                                "</div>";   
                                $('#pg_to_pg').append(yyyy);
                            }//if of pg_to_pg ends
                
            }//end for loop
            },
    
		error: function(err) {
			console.log("Error");
			
		}
	});
</script>