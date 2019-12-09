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
<?php
    include("topnavbar.php");
    include("title.php");
    $title = $_GET['title'];
    require("connect.php");
    $listKegiatan = mysqli_query($conn,"SELECT * FROM agenda_bahasa");
    $listTgl = mysqli_query($conn,"SELECT * FROM agenda");
    foreach ($listKegiatan as $kegiatan){
        if($kegiatan['agenda_judul']==$title){
            echo"<div class='judul' style='font-size:60px; margin:30px;'>".$title."</div>";
            echo"<div class='isi' style='font-size:10px; margin:30px;'>".$kegiatan['agenda_deskripsi']."</div>";
        }
    } 
?>
<body>
<script>
$(document).ready(function () {
    $("#agenda").addClass("active");
    $("#title").html("Event & Agenda");
    $("#title2").html("Event & Agenda");
    $(".berisi").css("float","left");
});
</script> 
</body>
</html>