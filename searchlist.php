<?php include 'menu.html';?>
</div>
<div class="row pd-5per" >
    <!-- search menu -->
    <div class="col-xs-12 clo-sm-3 col-md-3 col-lg-3 ">
        <form>
        <div>Locality<br>
        <input id="searchloc" type="text" placeholder="Search.." name="search"><i class="fa fa-search"></i>
        </div>
        <hr>
        <div>Budget <br>
            <select>
            <option value="">MIN</option>
            <option value="volvo">0</option>
            <option value="volvo">5000</option>
            <option value="volvo">10000</option>
            </select>
            <select>
            <option value="">Max</option>
            <option value="volvo">5000</option>
            <option value="volvo">10000</option>
            <option value="volvo">20000</option>
            </select>
        </div>
        <hr>
        <div>BHK of Apartment</div>
            <div class="row">
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">1RK
                </div>
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">1BHK
                </div>
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">2BHK
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">3BHK
                </div>
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">4BHK
                </div>
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">4+BHK
                </div>
            </div>
        <hr>
        <div>Looking for<br>
            <div class="row">
               <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">Family
                </div>
                <div class="col-xs-5 col-sm-3 col-md-6 col-lg-6 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">Bach. Boys
                </div>
                
            </div>
            <div class="row">
            <div class="col-xs-5 col-sm-3 col-md-4 col-lg-4 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">Not Matter
                </div>
                <div class="col-xs-5 col-sm-3 col-md-6 col-lg-6 radio-inline font-16 black">
                    <input type="radio" id="bathroom" name="bathroom" value="Yes">Bach. Girls
                </div>
            </div>     
        </div>
        <hr>
        <div>Non-Veg Allowed<br>
            <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 bold black">
                <input type="radio" id="bathroom" name="bathroom" value="Yes">Yes
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 bold black">
                <input type="radio" id="bathroom" name="bathroom" value="No">No
            </div>
            </div>
        </div>

        <hr>
        <div>Furnishing<br>
            <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 black">
                <input type="radio" id="bathroom" name="bathroom" value="Yes">Furnished
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 radio-inline font-16 black">
                <input type="radio" id="bathroom" name="bathroom" value="No">Unfurnished
            </div>
            </div>
            <div class="row">
            <div class="col-xs-8 col-sm-5 col-md-8 col-lg-8 radio-inline font-16 black">
                <input type="radio" id="bathroom" name="bathroom" value="No">Semi-furnished
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
    <!-- search list -->
    <div class="col-xs-12 col-md-7 col-lg-7">
        <div id="PG" class="tabcontent">

        </div>
</div>
    <!-- Advertise -->
    <div class="col-xs-12 col-md-2 col-lg-2"></div>

</div>

<script>
    $(document).ready(function(){
        var parm=window.location.search.substring();
        parm.toString();
        console.log("parm............", parm);

    $.ajax({
		url:"http://localhost:3000/get_search_pgdetails"+parm+"",
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {

			console.log("success");
			console.log(res);
    for (var i = 0; i < res.length; i++) 
    {
        var yyyy="<div class=\"mb-tb-5per a\">"+
        "<div class=\"row\" onclick=prodetails('"+res[i].u_id+"','"+res[i].pro_type+"','"+res[i].pro_id+"');>"+
         "<div class=\"col-sm-12 col-md-12 col-lg-12\">"+
            "<div class=\"box-outline mb-tb-5per\" style=\"margin:0px !important; width:100% !important\">"+
                "<div class=\"row\">"+
                    "<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">"+
                        res[i].pro_type+"&nbsp; for &nbsp;<span id=\"pg_for\">"+res[i].pg_for+"</span><br>"+
                        "<span id=\"result\"></span>"+

                        "<span>"+res[i].pro_locality+","+res[i].pro_city+"</span>"+
                    "</div>"+
                "</div>"+
                "<hr style=\"margin-top:0px !important\">"+
                "<div class=\"row\">"+
                    "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 center\">"+
                        "<span>Room Type</span><br>"+
                        "<span id=\"room_type\" class=\"bold\">"+res[i].pg_room_type+"</span>"+
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
                                    "<span>Preffered</span><br>"+
                                    "<span id=\"pg_available\">"+res[i].pg_available+"</span>"+
                                "</div>"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Posted On</span><br>"+
                                    "<span>"+res[i].avl_frm+"</span>"+
                                "</div>"+
                            "</div>"+
                        "<hr style=\"margin-top:0px !important\">"+
                            "<div class=\"row\">"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Food Facility<span><br>"+
                                    "<span id=\"food_included\">"+res[i].food_included+"<span>"+
                                "</div>"+
                                "<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">"+
                                    "<span>Gate closing time</span><br>"+
                                    "<span>"+res[i].get_close_time+"</span>"+
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
                                    "<button class=\"w-100per center red-font back-color-yellow pd-5per\" onclick=contactowner()>Contact Owner</button>"+
                                "</div>"+
                               
                        "</div>";   
                        $('#PG').append(yyyy);
    }
        }

        });
    });

function prodetails(uid, type, id){
    var parm=window.location.search.substring();
var arr=parm.split('&');
console.log("parm value.........",arr);

    console.log("Into pro details function...................");
    if(type=='pg'){
    window.open("./searchpgdetails.php"+parm+"&u_id="+uid+"&pro_id="+id+"");  
    } 
    if(type=='flat'){
    window.open("./searchflatdetails.php"+parm+"&u_id="+uid+"&pro_id="+id+"");
    } 
    if(type=='bulid'){
    window.open("./searchbuilddetails.php"+parm+"&u_id="+uid+"&pro_id="+id+"");
    } 
}
</script>