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
      include("topnavbar.php");
      include("title.php");
      echo"<div style='display:inline-block;'>";
      echo "<div style='margin-left:90px;margin-top:50px;font-size:60px;margin-bottom:-100px;'>Agenda Kegiatan</div>";
      echo "<div style='margin-left:910px;font-size:60px;margin-bottom:-100px;'>Detail</div>";
      echo"</div>";
      include("kalender.php");
      $k = new Calendar();
      $title="";
      ?>
      

    <div class="row" style="display:inline;">
      <div class="row d-flex ftco-animate" style="align:center;margin-top:-10px; width:50%;"><?php echo $k->show();?></div>
      <div class="col-md-5 wrap-about py-5 pr-md-4 ftco-animate" style="top:-570px;left:700px;border:1px solid;height:450px;">
        <div class="detailAgenda" >
        <?php
        $title = $_GET['title'];
        if($title!=" "){
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
        }
        ?>
        </div>
      </div> 
    </div>
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>What's</span> on iSTTS ?</h2>
            
          </div>
        </div>
				<div class="row">
          <?php
          require("connect.php");
          $listKegiatan = mysqli_query($conn,"SELECT * FROM kegiatan");
          foreach ($listKegiatan as $kegiatan){
            if($kegiatan['kategori']=='Berita'){
                $t = $kegiatan['tanggal']; 
                $tahun = substr($t,0,4);
                $bulan = substr($t,5,2);
                $tgl = substr($t,8,2); 
                $monthName = date('F', mktime(0, 0, 0, $bulan, 10));
                ?>
                  <div class="col-md-8 col-lg-3 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url(<?=$kegiatan['foto']?>);">
                        <div class="meta-date text-center p-2">
                          <span class="day"><?=$tgl?></span>
                          <span class="mos"><?=$monthName?></span>
                          <span class="yr"><?=$tahun?></span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#"><?=$kegiatan['judul_1']?></a></h3>
                        <p><?=$kegiatan['deskripsi_1']?></p>
                        <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="agenda.php?title='.$judul.'" class="btn btn-primary">Baca Selengkapnya<span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                          <a href="#" class="mr-2"><?=$kegiatan['kategori']?></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
               <?php
            }
         } 
              ?>
             

		  <!-- <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/agenda.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Agenda</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_6.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Lowongan</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/pppp.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Kegiatan</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
			</div>
		</section>
    
  

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