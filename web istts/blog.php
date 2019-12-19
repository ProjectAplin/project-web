<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
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
  </head>
  <style>
    .pic{
      background-size:100%;
      background-repeat:no-repeat;
      background-size:contain;
      height:200px;
      position:absolute;
      width:50%;
      left:160px;
    }
    .tgl{
      margin-top:-40px;
    }
    .judul{
      text-align:center;
      font-size:30px;
      padding-top:50px;
    }
  </style>
  <body>
    <?php
      require("connect.php");
      // $_SESSION['lang']="";
      include("topnavbar.php");
      include("title.php");
      echo"<div style='display:inline-block;'>";
      echo "<div style='margin-left:90px;margin-top:50px;font-size:60px;margin-bottom:-100px;'>Agenda Kegiatan</div>";
      echo "<div style='margin-left:910px;font-size:60px;margin-bottom:-100px;'>Detail</div>";
      echo"</div>";
      include("kalender.php");
      $k = new Calendar();
      // $title="";
      ?>
      

    <div class="row" style="display:inline;">
      <div class="row d-flex ftco-animate" style="align:center;margin-top:-10px; width:50%;"><?php echo $k->show();?></div>
      <div class="col-md-5 wrap-about py-5 pr-md-4 ftco-animate" style="top:-570px;left:700px;border:1px solid;height:450px;">
        <div class="detailAgenda" >
        <?php
        if(isset($_GET['title'])){
          $title = $_GET['title'];
          require("connect.php");
          $listKegiatan = mysqli_query($conn,"SELECT * FROM kegiatan");
          foreach ($listKegiatan as $kegiatan){
            if($kegiatan['judul_1']==$title){
                $t = $kegiatan['tanggal']; 
                $tahun = substr($t,0,4);
                $bulan = substr($t,5,2);
                $tgl = substr($t,8,2); 
                $monthName = date('F', mktime(0, 0, 0, $bulan, 10));
                echo "<div class='tgl'>".$tgl." ".$monthName." ".$tahun."</div>";
                echo"<div class='judul' style='font-size:20px;margin-top:-50px;'>".$title."</div>";
                echo "<div class='pic' style='background-image: url($kegiatan[foto]);'></div>";
                echo"<div class='isi' style='font-size:10px; margin:210px 50px;'>".$kegiatan['deskripsi_1']."</div>";
            }
          } 
        }else{
          echo "<div alt=''class='animated delay 3s bounceIn infinite'>Klik nama kegiatan untuk melihat detail</div>";
        }
        ?>
        </div>
      </div> 
    </div>
		
    <?php
      include("news.php");
    ?>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
      $("#title").html("Event & Agenda");
      $("#title2").html("Event & Agenda");
      $(".berisi").css("float","left");
    });
  </script> 
  </body>
</html>