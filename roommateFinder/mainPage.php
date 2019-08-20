<?php include './roommenu.html'?>
<style type="text/css">
    .carousel-inner.vertical > .item {
        -webkit-transition: .10s ease-in-out bottom;
        -moz-transition: .10s ease-in-out bottom;
        -o-transition: .10s ease-in-out bottom;
        transition: .10s ease-in-out bottom;
    }
    @media all and (transform-3d),
    (-webkit-transform-3d) {
    .carousel-inner.vertical > .item {
        -webkit-transition:-webkit-transform .6s ease-in-out;
        -moz-transition:-webkit-transform .6s ease-in-out;
        -o-transition:-o-transform .6s ease-in-out;
        transition:transform .6s ease-in-out;
        -webkit-backface-visibility:hidden;
        -moz-backface-visibility:hidden;
        backface-visibility:hidden;
        -webkit-perspective:1000;
        -moz-perspective:1000;
    }
    .carousel-inner.vertical > .item.next,
    .carousel-inner.vertical > .item.active.right {
        -webkit-transform: translate3d(0, 33.33%, 0);
        -moz-transform: translate3d(0, 33.33%, 0);
        transform: translate3d(0, 33.33%, 0);
        top:0px;
    }
    .carousel-inner.vertical > .item.prev,
    .carousel-inner.vertical > .item.active.left {
        -webkit-transform: translate3d(0, -33.33%, 0);
        -moz-transform: translate3d(0, -33.33%, 0);
        transform: translate3d(0, -33.33%, 0);
        top: 0px;
    }
    .carousel-inner.vertical > .item.next.left,
    .carousel-inner.vertical > .item.prev.right,
    .carousel-inner.vertical > .item.active {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        top:0px;
    }
    }
    .carousel-inner.vertical > .next,
    .carousel-inner.vertical > .prev {
        height: 100%;
        width: auto;
    }
    /* Right Side CSS */
    .carousel-inner.vertical1 > .item {
        -webkit-transition: .10s ease-in-out bottom;
        -moz-transition: .10s ease-in-out bottom;
        -o-transition: .10s ease-in-out bottom;
        transition: .10s ease-in-out bottom;
    }
    @media all and (transform-3d),
    (-webkit-transform-3d) {
    .carousel-inner.vertical1 > .item {
        -webkit-transition:-webkit-transform .6s ease-in-out;
        -moz-transition:-webkit-transform .6s ease-in-out;
        -o-transition:-o-transform .6s ease-in-out;
        transition:transform .6s ease-in-out;
        -webkit-backface-visibility:hidden;
        -moz-backface-visibility:hidden;
        backface-visibility:hidden;
        -webkit-perspective:1000;
        -moz-perspective:1000;
    }
    .carousel-inner.vertical1 > .item.next,
    .carousel-inner.vertical1 > .item.active.right {
        -webkit-transform: translate3d(0, 33.33%, 0);
        -moz-transform: translate3d(0, 33.33%, 0);
        transform: translate3d(0, 33.33%, 0);
        top:0px;
    }
    .carousel-inner.vertical1 > .item.prev,
    .carousel-inner.vertical1 > .item.active.left {
        -webkit-transform: translate3d(0, -33.33%, 0);
        -moz-transform: translate3d(0, -33.33%, 0);
        transform: translate3d(0, -33.33%, 0);
        top: 0px;
    }
    .carousel-inner.vertical1 > .item.next.left,
    .carousel-inner.vertical1 > .item.prev.right,
    .carousel-inner.vertical1 > .item.active {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        top:0px;
    }
    }
    .carousel-inner.vertical1 > .next,
    .carousel-inner.vertical1 > .prev {
        height: 100%;
        width: auto;
    }



    #carousel-pager .carousel-control.left,#carousel-pager .carousel-control.right{
        width:50px;
        height:50px;
        border-radius: 50%;
        background:#FFF;
        opacity: 1;
        position: absolute;
        top:-65px;
        left:50%;
        transform: translateX(-50%);
    }
    #carousel-pager1 .carousel-control.left,#carousel-pager1 .carousel-control.right{
        width:50px;
        height:50px;
        border-radius: 50%;
        background:#FFF;
        opacity: 1;
        position: absolute;
        top:-65px;
        left:50%;
        transform: translateX(-50%);
    }
    #carousel-pager .carousel-control.right {
        top:unset;
        bottom: -65px;
        left:50%;
        transform: translateX(-50%);
    }
    #carousel-pager1 .carousel-control.right {
        top:unset;
        bottom: -65px;
        left:50%;
        transform: translateX(-50%);
    }
    .left .glyphicon,.right .glyphicon{
        position:absolute;
        top:13px;
        left:16px;
        color:#004C70;
    }
    .right .glyphicon{
        top:16px;
        left:15px;
    }
    .item img{
        border:1px solid #e2e2e2;
        padding: 5px;
        border-radius:5px;
        margin:5px;
    }
    .carousel{
        margin-top:80px;
    }
</style>

<!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-2 col-lg-2 mb-t-5per center">
            <img class="img-responsive" src="../img/properties button.png">
        </div>
        <div class="col-md-8 col-lg-8 mb-t-5per ">
            <img class="img-responsive center" src="../img/post vacancy button.png">
        </div>
        <div class="col-md-2 col-lg-2 mb-t-5per center">
            <img class="img-responsive" src="../img/AUKNEST ORIGINAL button.png">
        </div>
    </div>
<div class="row">
    <div class="col-md-2 col-lg-2 ">
    </div>
   
    
    <div class=" col-md-4 col-sm-4 col-xs-6 ">
        <h3 class="heading1 center">FRESH ADS</h3>
        <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="5000">
            <div class="carousel-inner vertical" >
                <div class="active item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                            <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                            <input type="text" placeholder="Sahil">
                        </div>
                        <div >
                            <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="width-eighty m-auto">
                            <center>
                                <button class="btn-property back-color-yellow height-40">comment</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                            <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                            <input type="text" placeholder="Sahil">
                        </div>
                        <div >
                            <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="width-eighty m-auto">
                            <center>
                                <button class="btn-property back-color-yellow height-40">comment</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                                <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                <input type="text" placeholder="Sahil">
                        </div>
                        <div >
                            <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="width-eighty m-auto">
                            <center>
                                <button class="btn-property back-color-yellow height-40">comment</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                                <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                <input type="text" placeholder="Sahil">
                        </div>
                        <div>
                                <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="width-eighty m-auto">
                                <center>
                                    <button class="btn-property back-color-yellow height-40">comment</button>
                                </center>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                                <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                <input type="text" placeholder="Sahil">
                            </div>
                            <div >
                                <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="width-eighty m-auto">
                                <center>
                                    <button class="btn-property back-color-yellow height-40">comment</button>
                                </center>
                            </div>
                    </div>
                </div>
                <div class="item">
                <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                                <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                <input type="text" placeholder="Sahil">
                            </div>
                            <div >
                                <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="width-eighty m-auto">
                                <center>
                                    <button class="btn-property back-color-yellow height-40">comment</button>
                                </center>
                            </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Right Side -->
    <div class=" col-md-4 col-sm-4 col-xs-4 ">

        <h3 class="heading1 center">ACTIVE ADS</h3>
        <div id="carousel-pager1" class="carousel slide " data-ride="carousel" data-interval="5000">
            <div class="carousel-inner vertical" >
                <div class="active item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                        <div class="profile-img">
                            <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                            <input type="text" placeholder="Sahil">
                        </div>
                        <div >
                            <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="width-eighty m-auto">
                            <center>
                                <button class="btn-property back-color-yellow height-40">comment</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                            <div class="profile-img">
                                <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                <input type="text" placeholder="Sahil">
                            </div>
                            <div >
                                <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="width-eighty m-auto">
                                <center>
                                    <button class="btn-property back-color-yellow height-40">comment</button>
                                </center>
                            </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                            <div class="profile-img">
                                    <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                    <input type="text" placeholder="Sahil">
                            </div>
                            <div >
                                <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="width-eighty m-auto">
                                <center>
                                    <button class="btn-property back-color-yellow height-40">comment</button>
                                </center>
                            </div>
                        </div>
                </div>
                <div class="item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                            <div class="profile-img">
                                    <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                    <input type="text" placeholder="Sahil">
                            </div>
                            <div>
                                    <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="width-eighty m-auto">
                                    <center>
                                        <button class="btn-property back-color-yellow height-40">comment</button>
                                    </center>
                            </div>
                        </div>
                </div>
                <div class="item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                            <div class="profile-img">
                                    <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                    <input type="text" placeholder="Sahil">
                                </div>
                                <div >
                                    <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="width-eighty m-auto">
                                    <center>
                                        <button class="btn-property back-color-yellow height-40">comment</button>
                                    </center>
                                </div>
                        </div>
                </div>
                <div class="item">
                    <div class="mb-15 pd-2" style="box-shadow:1px 1px 10px gray">
                            <div class="profile-img">
                                    <img class="mb-20" style="border-radius:50%;height:75px; width:75px" src="http://tivatheme.com/wordpress/wp-content/plugins/tiva-testimonials-slider/images/agnes.jpg" alt="Agnes A. Bell">         
                                    <input type="text" placeholder="Sahil">
                                </div>
                                <div >
                                    <p class="font-14 justify1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="width-eighty m-auto">
                                    <center>
                                        <button class="btn-property back-color-yellow height-40">comment</button>
                                    </center>
                                </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-pager1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-pager1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-md-2 col-lg-2">
    </div>
</div>

<script type="text/javascript">
    $('.carousel .vertical .item').each(function(){
        console.log("LEFT...........");
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=1;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
        }
    });
   
</script>