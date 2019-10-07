<?php include 'menu.html';?>
<!-- Main img -->
<div class="main_img">
    <img class="main_img" src="./img/photo.jpg" style="width: 100%">
</div>
<div class="row w-100per" style="position: absolute; top:400px">  
    <div class="row" > 
        <div class="col-sm-3 col-md-3 col-lg-3">

        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 center" style="text-align:center">
            <button class="yellow-search-btn" style="display:inline-block"><b>PG</b></button>
            <button class="yellow-search-btn" style="display:inline-block"><b>FLAT</b></button>
            <button class="yellow-search-btn" style="display:inline-block"><b>PROPERTY</b></button>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">

        </div>
    </div>
        <!-- Search setion -->
        <div class="row" >
            <div class="col-sm-1 col-md-2 col-lg-2">

            </div>
            <div class="col-sm-10 col-md-8 col-lg-8 back-color-blue" style="opacity:0.9">
                <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2 mb-tb-10">
                        <select class="browser-default custom-select select-pg back-color-blue white-font" >
                        <option selected>Type Of PG</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mb-tb-10 back-color-blue">
                        <!-- <div id="custom-search-input">
                            <div class="input-group">
                            <input id="autocomplete_search" name="autocomplete_search" type="text" class="form-control" placeholder="Search" />
                            <input type="hidden" name="lat">
                            <input type="hidden" name="long">
                            </div>
                        </div>
                            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg96FAwQbNkb27GHxpGZUIljiOnf78hwc&libraries=places"></script>
                            <script>
                            google.maps.event.addDomListener(window, 'load', initialize);
                            function initialize() {
                            var input = document.getElementById('autocomplete_search');
                            var autocomplete = new google.maps.places.Autocomplete(input);
                            autocomplete.addListener('place_changed', function () {
                            var place = autocomplete.getPlace();
                            // place variable will have all the information you are looking for.
                            $('#lat').val(place.geometry['location'].lat());
                            $('#long').val(place.geometry['location'].lng());
                            });
                            }
                            </script> -->
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 mb-tb-10">
                        <select class="browser-default custom-select select-pg back-color-blue white-font" >
                        <option selected>Budget</option>
                        <option value="1">< 5000</option>
                        <option value="2">> 5000</option>
                        </select>
                    </div>
                
                    <div class="col-sm-2 col-md-2 col-lg-2 mb-tb-10">
                        <button type="submit" class="back-color-white select-pg w-100per" >SEARCH <i class="fa fa-search" style="color: #01527d"></i></button>
                    <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-2">

            </div>
        </div>
    
</div>

<!-- Login Section -->
<div class="row w-100per"style="position:absolute; top:300px; display:none;" id="login">

    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8" style="background: rgba(255,255,255,0.8);height:300px;">
    <div class="row">
        <button type="button" onclick="closeform()" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>   
    </div>
    <form name="loginForm" action="http://localhost:3000/login" method="POST">
       
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per">
            <div class="form-group name-group">
                <div class="palceholder">
                    <label for="name">EMAIL</label>
                    <span class="star">*</span>
                </div>
                <input type="text" class="form-control back-color-black white-font" id="email" name="email" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per">
            <div class="form-group email-group">
                <div class="palceholder">
                    <label for="password">PASSWORD</label>
                    <span class="star">*</span>
                </div>
                <input type="password" class="form-control back-color-black bold white-font" id="password" name="pass" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="bold" style="float:right"><a href="#" onclick="showSignup()">NEW USER LOGIN</a></span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="bold"><a href="#" onclick="forgotPass()">FORGET PASSWORD?</a></span>
            </div>
        </div><br>
        <div class="row center " >
            <button type="submit" class="btn w-20per back-color-blue white-font bold">LOGIN</button>
        </div>
      </form>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>
<!-- Sign Up Section -->
<div class="row w-100per"style="position:absolute; top:300px; display:none" id="signup">

    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8" style="background: rgba(255,255,255,0.8);height:300px;">
        <div class="row">
            <button  onclick="closeform()" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>   
        </div>   
    <form class="signupForm" id="signupForm" name="signupForm" action="javascript:otpsuccess()" class="pd-5per"> 
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group name-group">
                <div class="palceholder">
                    <label for="name">NAME</label>
                    <span class="star">*</span>
                </div>
                <input type="text" class="form-control back-color-black white-font" id="uname" name="uname" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group email-group">
                <div class="palceholder">
                    <label for="phone">PHONE</label>
                    <span class="star">*</span>
                </div>
                <input type="text" class="form-control back-color-black bold white-font" id="phone" name="phone" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group name-group">
                <div class="palceholder">
                    <label for="email">EMAIL</label>
                    <span class="star">*</span>
                </div>
                <input type="email" class="form-control back-color-black white-font" id="email" name="email" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group email-group">
                <div class="palceholder">
                    <label for="password">PASSWORD</label>
                    <span class="star">*</span>
                </div>
                <input type="password" class="form-control back-color-black bold white-font" id="upassword" name="upassword" required>
            </div>
        </div>
        <div class="row center">
            <span class="bold">By clicking below, you agree to <a class="pointer">Terms & Conditions</a></span>
        </div><br>
        <div class="row center " >
            <button id="ajax-sendotp" name="Submit" type="submit" class="btn w-20per back-color-blue white-font bold">SIGN UP NOW</button>
        </div>
      </form>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<!--Forgot Password Section-->
<div class="row w-100per"style="position:absolute; display:none; top:300px;" id="forgot">

    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8" style="background: rgba(255,255,255,0.8);height:300px;">
    <div class="row">
        <button type="button" onclick="closeform()" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>   
    </div>
    <form name="forgotPassword" id="forgotPassword" action="" metod="POST">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pd-5per ">
            <div class="form-group name-group">
                <div class="palceholder">
                    <label for="name">Enter your EMAIL</label>
                    <span class="star">*</span>
                </div>
                <input type="email" class="form-control back-color-black white-font" id="femail" name="femail"  required>
            </div>
        </div>
        <div class="row center " >
            <button type="submit" id="ajax-forgotPass" class="btn w-20per back-color-blue white-font bold">Submit</button>
        </div>
      </form> <br>
      <div class="row center">
            <label type="text" id="resetPass" class="form-control email-link" style="color:red; display:none;">"RESET PASSWORD LINK HAS BEEN SEND TO YOUR EMAIL ID PLEASE CLICK ON THE LINK TO RESET YOUR PASSWORD" </label>
        </div>   
    </div>
    
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<!--Change Password-->

<div class="row w-100per"style="position:absolute; display:none; top:300px;" id="changePass">

    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8" style="background: rgba(255,255,255,0.8);height:300px;">
    <div class="row">
        <button type="button" onclick="closeform()" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>   
    </div>
    <form name="changePassword" id="changePassword" action="" metod="POST">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per ">
            <div class="form-group name-group">
                <!--<div class="palceholder">-->
                <!--    <label for="name">Enter your EMAIL</label>-->
                <!--    <span class="star">*</span>-->
                <!--</div>-->
                <input type="email" class="form-control back-color-black white-font" id="cpemail" name="cpemail" readonly>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per ">
            <div class="form-group name-group">
                <div class="palceholder">
                    <label for="name">New Password</label>
                    <span class="star">*</span>
                </div>
                <input type="password" class="form-control back-color-black white-font" id="cpassword" name="cpassword" required>
            </div>
        </div>
        <div class="row center " >
            <button type="submit" id="ajax-changePass" class="btn w-20per back-color-blue white-font bold">Submit</button>
        </div>
      </form> <br>
      <div class="row center">
            <label type="text" id="passChange" class="form-control email-link" style="color:red; display:none;">"YOUR PASSWORD HAS BEEN CHANGED, PLEASE LOGIN WITH NEW PASSWORD!" </label>
        </div>   
    </div>
    
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>

<!-- OTP Section -->
<div class="row w-100per"style="position:absolute; top:300px; display:none" id="otp">
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8 " style="background: rgba(255,255,255,0.8);height:300px;">
        <div class="row">
                        <button  onclick="closeform()" type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>   
        </div>      
        <form name="verifyOtpForm" id"verifyOtpForm" action="" method="POST">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per">
                
                    <div class="">
                        <div class="palceholder">
                            <label for="otplbl">OTP</label>
                        </div>
                        <input type="text" class="form-control back-color-black white-font" id="otptxt" name="otptxt" required>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pd-5per">
                    <div class="form-group">
                        <button type="submit" id="ajax-verify" class="btn w-100per back-color-blue white-font bold">VERIFY</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="bold pointer"><a>RESEND OTP</a></span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                </div>
            </div>
            <div class="row center">
                <span class="bold">OR</a></span>
            </div><br>
            <div class="row center " >
                <label type="text" id="verifyMsg" class="form-control email-link" style="color:red;">"A VERIFICATION LINK HAS BEEN SEND TO YOUR EMAIL ID PLEASE CLICK ON THE LINK TO VERIFY YOUR EMAIL ID" </label>
            </div>
        </form>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>
<!-- Why section -->
<div class="why">
      <center> <img  src="./img/yellow bird.png"> </center>
      <div><center class="heading1">WHY US</center></div>
    <div class="features">
      <div class="row" >
        <div class="col-md-1 cl-lg-1">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 cl-lg-2 mb-tb-10">
            <div class="frame_squre">
             <center><img src ="img/free listing icon.png" style="height: 80px; width: 80px"></center>
             <center> <img class="heading-yellow-img" src="./img/log.png" ></center>
             <h4 class="feature_txt">Free Listing</h4>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 cl-lg-2 mb-tb-10">
            <div class="frame_squre">
                    <center><img src ="img/free listing icon.png" style="height: 80px; width: 80px"></center>
                    <center> <img class="heading-yellow-img" src="./img/log.png"></center>  
                    <h4 class="feature_txt">Verifed Listing</h4>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 cl-lg-2 mb-tb-10">
            <div class="frame_squre">
                    <center><img src ="img/free listing icon.png" style="height: 80px; width: 80px"></center>
                    <center> <img class="heading-yellow-img" src="./img/log.png"></center>     
                    <h4 class="feature_txt">Hassle Free Search</h4>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 cl-lg-2 mb-tb-10">
            <div class="frame_squre">
                    <center><img src ="img/free listing icon.png" style="height: 80px; width: 80px"></center>
                    <center> <img class="heading-yellow-img" src="./img/log.png"></center>  
                    <h4 class="feature_txt">Free For All</h4>   
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 cl-lg-2 mb-tb-10">
            <div class="frame_squre">
                    <center><img src ="img/free listing icon.png" style="height: 80px; width: 80px"></center>
                    <center> <img class="heading-yellow-img" src="./img/log.png"></center>  
                    <h4 class="feature_txt">No Brokers</h4> 
            </div>
        </div>     
        <div class="col-md-1 cl-lg-1 mb-tb-10">
        </div>                          
       </div>
    </div>
    </div>
     <!-- End of Why section -->
     <!-- Aucknest Originals -->
<div class="original">
    <center><img src="./img/blue 200 into 70.png"></center>
    <div><center class="heading2">AUKNEST ORIGINALS</center></div>
    
        <div class="row" style="margin: auto">

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                <div class="img-view-txt">
                <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                <div class="img-view-txt">
                    <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                    <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                </div>
             </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                  <div class="img-view-txt">
                      <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                      <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                  <div class="img-view-txt">
                      <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                      <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                  <div class="img-view-txt">
                      <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                      <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
                  <div class="img-view-txt">
                      <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                      <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pd-2">
              <center><button class="btn-viewMore"><b>VIEW ALL AUKNEST ORIGINAL</b></button></center>
              </div>
        </div>
    
</div>
<!-- Featured Property -->
<div class="featured-block">                                          
        <center> <img  src="./img/yellow bird.png"> </center>
      <div><center class="heading1">FEATURED PROPERTY</center></div>
      <div class="row" style="margin: auto">

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
             <div class="img-view-txt">
             <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
             <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
             </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
             <div class="img-view-txt">
                 <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                 <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
             </div>
          </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
               <div class="img-view-txt">
                   <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                   <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
               <div class="img-view-txt">
                   <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                   <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
               <div class="img-view-txt">
                   <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                   <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pd-2">
               <div class="img-view-txt">
                   <center><img class="img-width-100" src="img/320 into 370.jpg"></center>
                   <center><span class="txt-view-more">VIEW MORE DETAILS</span></center>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pd-2">
           <center><button class="btn-viewMore"><b>VIEW ALL AUKNEST ORIGINAL</b></button></center>
           </div>
     </div>
</div>

<!-- Auknest bring you more -->
<div class="Bring-block">
        <center> <img  src="./img/yellow bird.png"> </center>
        <div><center class="heading1">AUKNEST BRING YOU MORE</center></div>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="img/Vardhman-Springdale-project-image.jpg" style="height:300px; width:100%">
                    <div style="height: 100px;">
                      <center><h4><b>Looking to RentOut / Sale Your Entire Building / Floor</b></h4></center>
                      <center><button class="btn-enquiry"><b>ENQUIRE NOW</b></button></center>

                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="img/83840a84-2f67-4924-ac58-22d736c86712.png" style="height:400px; width:100%">
            </div>
        </div>
</div>
<!-- Advertisement Block -->
<div class="advertisement">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
          <!-- <img src="img/83840a84-2f67-4924-ac58-22d736c86712.png"> -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 heading1">
              DOWNLOAD OUR APP
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4" >
                <!-- <img src="img/81679.png"> -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
            
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonial">
    <center><img src="./img/blue 200 into 70.png"></center>
    <div><center class="heading2">TESTIMONIALS</center></div>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
               
                <div class="testimonial-item equal-height style-6" style="height: 254px;">
                    <div class="">
                        <img class="mb-20" style="border-radius:50%;" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Agnes A. Bell</div>
                        <div >
                                <hr class="hr-white-line">
                                <div class="testimonial-content quote">
                                        This is one of the best WordPress themes I have used. All aspects are exactly what experienced designers and developers crave from a theme.
                                </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6" style="height: 254px;">
                    <div class="testimonial-image cell-left">
                        <img  class="mb-20" style="border-radius:50%" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
                    </div>
                    <div class="cell-right">
                            <div class="testimonial-name">Agnes A. Bell</div>
                            <div >
                                    <hr class="hr-white-line">
                                    <div class="testimonial-content quote">
                                            This is one of the best WordPress themes I have used. All aspects are exactly what experienced designers and developers crave from a theme.
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="testimonial-item equal-height style-6" style="height: 254px;">
                        <div class="testimonial-image cell-left">
                            <img  class="mb-20" style="border-radius:50%" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
                        </div>
                        <div class="cell-right">
                                <div class="testimonial-name">Agnes A. Bell</div>
                                <div >
                                        <hr class="hr-white-line">
                                        <div class="testimonial-content quote">
                                                This is one of the best WordPress themes I have used. All aspects are exactly what experienced designers and developers crave from a theme.
                                        </div>
                                </div>
                            </div>
                </div>
                <div class="testimonial-item equal-height style-6" style="height: 254px;">
                        <div class="testimonial-image cell-left">
                            <img  class="mb-20" style="border-radius:50%" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
                        </div>
                        <div class="cell-right">
                                <div class="testimonial-name">Agnes A. Bell</div>
                                <div >
                                        <hr class="hr-white-line">
                                        <div class="testimonial-content quote">
                                                This is one of the best WordPress themes I have used. All aspects are exactly what experienced designers and developers crave from a theme.
                                        </div>
                                </div>
                            </div>
                    </div>
                    <div class="testimonial-item equal-height style-6" style="height: 254px;">
                            <div class="testimonial-image cell-left">
                                <img  class="mb-20" style="border-radius:50%" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">
                            </div>
                            <div class="cell-right">
                                    <div class="testimonial-name">Agnes A. Bell</div>
                                    <div >
                                            <hr class="hr-white-line">
                                            <div class="testimonial-content quote">
                                                    This is one of the best WordPress themes I have used. All aspects are exactly what experienced designers and developers crave from a theme.
                                            </div>
                                    </div>
                                </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<?php  $passkey = (isset($_GET['confirm_code'])) ? $_GET['confirm_code'] : '';?>
<?php $email = (isset($_GET['email'])) ? $_GET['email'] : '';?>


<script>
$(document).ready(function(){
    //login Profile 
    
    
    var passkey= "<?php echo $passkey ?>";
    // console.log(passkey);
    if(passkey!='')
        {
            $('#profileinfo').show();
            $('#loginbtn').hide();
        }
    //Password Change window
    
    var email= "<?php echo $email ?>";
    // console.log(email);
    if(email!='')
        {
            $('#changePass').show();
            $('#cpemail').val(email);
        }
  $("#testimonial-slider").owlCarousel({
      items:1,
      itemsDesktop:[1000,1],
      itemsDesktopSmall:[980,1],
      itemsTablet:[768,1],
      pagination:true,
      navigation:false,
      navigationText:["",""],
      autoPlay:true
  });
});
  // just for the demos, avoids form submit
  
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
// SEND OTP 
var form3 = $( "#signupForm" );
form3.validate();
$( "#ajax-sendotp" ).click(function(e) {
  if(form3.valid()==true){

    $('#otp').show();
    $('#signup').hide();
    e.preventDefault();

    $(".error").html("").hide();
        $(".success").html("").hide();
        var mobile_number = $("#phone").val();
        var email= $("#email").val();
        var name= $("#uname").val();
        var password= $("#upassword").val();
        var input = {
            "mobile_number" : mobile_number,
            "action" : "send_otp",
            "email" : email,
            "name" : name,
            "password" :password
        };
        console.log("send otp input....", input);
		$.ajax({
			url : './controller.php',
			type : 'POST',
			data : input,
			success : function(response) {

                $(".container").html(response);
                console.log('Sucess In AJAX...');

            },
            error: function() {
                  console.log('Error In AJAX...');
                },
		});
    }
});
  
//MOBILE OTP VERIFICATION
var form2 = $( "#verifyOtpForm" );
form2.validate();
$( "#ajax-verify" ).click(function(e) {
  if(form2.valid()==true){
            e.preventDefault();
            console.log("within verify otp function.........");
        	$(".error").html("").hide();
	
		var input = {
			"otp" : $("#otptxt").val(),
			"action" : "verify_otp"
        };
        
        console.log("mobile number....", input);
		$.ajax({
			url : './controller.php',
			type : 'POST',
			data : input,
			success : function(response) {
            $('#profileinfo').show();
            $('#loginbtn').hide();
            $('#signup').hide();
            $('#otp').hide();

                console.log('Sucess In AJAX...');

            },
            error: function() {
                  console.log('Error In AJAX...');
                }, 
        });
    }
});

//   Forgot Password

var form = $( "#forgotPassword" );
form.validate();
$( "#ajax-forgotPass" ).click(function(e) {
  if(form.valid()==true){
  e.preventDefault();
            console.log("within Reset Password function.........");
        	$(".error").html("").hide();
	
		var input = {
			"email" : $("#femail").val()
        };
        $.ajax({
			url : 'https://innolution.in/nest/auknest.com/auknest.com/resetPass.php',
			type : 'POST',
			data : input,
			success : function(response) {
			    $("#resetPass").show();
			    $(".container").html(response);
                console.log("Within Reset Password Success function.........");
                console.log('Sucess In AJAX...');
                // $("#forgot").hide();

            },
            error: function() {
                  console.log('Error In AJAX...');
                },
		});
    }
});
  
//  CHANGE PASSWORD
var form1 = $( "#changePassword" );
form1.validate();
$( "#ajax-changePass" ).click(function(e) {
  if(form1.valid()==true){

            e.preventDefault();
            console.log("within Change Password function.........");
        	$(".error").html("").hide();
	
		var input = {
			"email" : $("#cpemail").val(),
			"password":$('#cpassword').val()
        };
        $.ajax({
			url : 'https://innolution.in/nest/auknest.com/auknest.com/changePass.php',
			type : 'POST',
			data : input,
			success : function(response) {
			    $("#passChange").show();
			    $(".container").html(response);
                console.log("Within Change Password Success function.........");
                console.log('Sucess In AJAX...');
                // $("#forgot").hide();

            },
            error: function() {
                  console.log('Error In AJAX...');
                },
		});
  
    }
});


</script>

        
 
<!-- End testimonial -->

</div>
</div>
</div>

