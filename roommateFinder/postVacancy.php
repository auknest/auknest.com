<?php include './roommenu.html'?>
    <div class="row mb-15px">
        <div class="col-sm-2 col-md-2 col-lg-2">   
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 back-color-blue"> 
            <div class="mb-tb-5px">
                <img src="../img/photo1.png" class="profilePhoto">
                <label id="profileName" class="white-font pd-l-2per"></label>
            </div>
            <div class="row">
                <div class="col-sm-7 col-md-7 col-lg-7 mb-tb-5px center">
                <form id="form3">
                    <textarea id="test" name="descr" class="form-control" placeholder="Please put your description here !!!!" rows="5" maxlength="250" required></textarea>
                </form>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 mb-tb-5px center">
                    <div class="col-sm-12  col-md-12 col-lg-12">
                      
                        <form id="room-attachment">
                                <label class="back-color-white center upload-sec1">Upload <br>Hall<input id="hall" name="imgs" type="file" multiple="true" style="display:none" required></label>
                                <p style="font-size:12px;color:white" id ="hall1">Select one or more files.</p>
                            </form>
                            <div class="form-group has-error has-feedback pro room">                               
                            </div>
                    </div>
                </div>
            </div>
            <div class="width-eighty m-auto center">
                    <button id="ajax-room" type="submit" value="POST" class="btn-property back-color-yellow red-font">POST</button>
                    <br>
                    <br>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 ">   
            </div>
        </div>
<script>
    $('#profileName').html(sessionStorage.getItem("user_name"));
    var post_id="<?php echo uniqid();?>";
   var form4="Invalid";
            $("#hall").on("change", function() {   
            console.log("room change event.......");
            $("#room-attachment").submit();
        
        });
        $("#room-attachment").submit(function(e) {
            form4="valid";
            console.log("INTO hall attachment ............");

            e.preventDefault();
            var id=sessionStorage.getItem("pro_id");

            var formData = new FormData(this);
            var u_id=sessionStorage.getItem("u_id");

            formData.append("u_id", u_id);
            formData.append("pro_type", "roomate");
            formData.append("img_type", "room_img");
            formData.append("post_id", post_id);

            ajax_call_API(formData);
        });
    function ajax_call_API(formData) {

        $.ajax({
                url: "http://localhost:3000/mulupload",
                type: 'POST',
                data: formData,
                success: function(response) { console.log("sucess.....................", response);
                
                splitresponse =((response.toString()).split(","));
                splitres =((splitresponse.toString()).split(","));

                console.log("split count.....................", splitresponse.length);
                console.log("splitresponse.....................", splitresponse);
            
                var changeparm;
            
                if(formData.get("img_type")=='room_img'){
                    changeparm='.room';
                }
                for(var i=0;i<splitresponse.length;i++){
                    var matched = $(".hall button");
                    var subsplitres =((splitres[i].toString()).split(":"));
                    console.log("changeparmaaaaaaaaaa........", splitres[i]);
                    if( matched.length!=0)
                    {
                        var class_id= matched.length;
                    }
                    else {
                        var class_id=i;
                    }
                    var val=splitres[i].toString();
                    for(var j=0;j<subsplitres.length;j++){
                    $('.room').append(
                        '<div class="black-border " style="overflow: hidden" class=\"class_a\" id="'+formData.get("img_type")+class_id+'">'+
                                    '<div class="pd-2" >'+
                                    '<span class="pd-2"  id="hall-name">'+subsplitres[j]+'</span>'+
                                    '<button class="center"  style="right:0px;position: absolute;" id="profile_remove" onclick=remove_img("'+formData.get("img_type")+i+'",\"'+formData.get("img_type")+'",\"'+splitres[i]+'\")>X</button>'+
                                ' </div>'+
                                    '</div>'
                    );
                    j++;
                }
                }        
                },
                contentType: false,
                processData: false,
                cache: false
            });
    }

    var form3 = $( "#form3" );
    form3.valid();
   

    $('#ajax-room').click(function(e){
   
        if(form3.valid()==true){
            e.preventDefault();
           if(form4=="valid"){
            var serverData={
            "r_descr":    $('#test').val(),
            "u_id": sessionStorage.getItem("u_id"),
            "post_id":post_id
            };
        console.log("serverdata...........", serverData);

            $.ajax({
                type:"POST",
                url: 'http://localhost:3000/post_roomate_api',						   
                data: serverData,
                cache: false,
                timeout: 5000,
                success:function(res) {
                    alert("Your Post Succesfully posted....");
                    window.location.href = "./mainPage.php";
                        console.log('Property type Sucessfully inserted ...');
                },
                error:function() {
                    alert("error");

                        console.log('Error In AJAX...');
                        },
            });
    }
        }
});
</script>
