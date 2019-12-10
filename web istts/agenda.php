<html>
    <head></head>
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</style>
<style>
    .pic{
      background-size:100%;
      background-repeat:no-repeat;
      height:50%;
      margin:auto;
      width:25%;
    }
    .judul{
      padding-left:50px;
      font-size:50px;
    }
</style>
<body>
<?php
    include("topnavbar.php");
    include("title.php");
    $title = $_GET['title'];
    require("connect.php");
    $listKegiatan = mysqli_query($conn,"SELECT * FROM kegiatan");
    // $listKegiatan = mysqli_query($conn,"SELECT * FROM agenda_bahasa");
    // $listTgl = mysqli_query($conn,"SELECT * FROM agenda");
    foreach ($listKegiatan as $kegiatan){
        if($kegiatan['judul_1']==$title){
            echo"<div class='judul' style='font-size:60px; margin:30px;'>".$title."</div>";
            echo "<div class='pic' style='background-image: url($kegiatan[foto]);'></div>";
            echo"<div class='isi' style='font-size:10px; margin-left:30px;'>".$kegiatan['deskripsi_1']."</div>";
        }
    } 
?>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script>
$(document).ready(function () {
    $("#agenda").addClass("active");
    $("#title").html("Detail Agenda");
    $("#title2").html("Event & Agenda");
    $(".berisi").css("float","left");
});
</script> 
</body>
</html>