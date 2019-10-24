<?php include './loginmenu.html'?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap.js"></script>
    <script type="text/javascript" src="../css/bootstrap.min.js"></script>
</head>

<body class='original'>
    <div class='original mb-tb-5per'>
        <div class="row m-auto center"> 
            <div class="col-sm-4 col-md-3 col-lg-3 center">
                <div class='back-color-white  mb-7  pd-2'>
                    <!-- TOTAL USERS -->
                    <img src="../img/1 (1).png" class="img-responsive">
                    <span id="usrcnt" class="bold font-16"></span>
                    <br>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 center">
                <div class='back-color-white  mb-7  pd-2'>
                <a href="./admin_pg_details.php"><img src="../img/1 (2).png" class="img-responsive"></a>
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div>
                
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 ">
                <div class='back-color-white pd-2  mb-7  center'>
                <a href="./admin_flat_details.php"><img src="../img/1 (3).png" class="img-responsive"></a>
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>
                </div> 
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 center">
                <div class='back-color-white pd-2 mb-7  center'>
                <a href="./admin_pgtopg_details.php"><img src="../img/1 (4).png" class="img-responsive"></a>
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div> 
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
                <div class='back-color-white pd-2 mb-7 center'>
                <a href="./admin_buildingowner_details.php"><img src="../img/1 (5).png" class="img-responsive"></a>
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div> 
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
                <div class='back-color-white pd-2 mb-7 center'>
                <img src="../img/1 (6).png" class="img-responsive">
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div>   
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
                <div class='back-color-white pd-2 mb-7 center'>
                <img src="../img/1 (7).png" class="img-responsive">
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div>   
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
                <div class='back-color-white pd-2 mb-7 center'>
                <img src="../img/1 (8).png" class="img-responsive">
                <div class="bold font-16" style="visiblity:hidden"> &nbsp; </div>

                </div>   
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $.ajax({
		url:"http://localhost:3000/get_total_user",
		type: 'GET',
		dataType: 'JSON',
		success: function(res) {
            $("#usrcnt").html(res[0].count);
			console.log("success");
           
        },
            error: function(err) {
			console.log("Error");
			
		}
	});
});
</script>

