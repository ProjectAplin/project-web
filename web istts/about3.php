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
  <body>
      <?php
        require("connect.php");
        include("topnavbar.php");
        include("title.php");
      ?>
   
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<!-- <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch"> -->
						<!-- <div class="img" style="background-image: url(images/about.jpg); border"></div> -->
            <div class="col-md-5 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Visi</h2>
            <p>Pada Tahun 2022, iSTTS menjadi perguruan tinggi bidang sains, teknologi, dan desain yang mampu bersaing di tingkat Asia Tenggara, dengan mengedepankan kualitas, inovasi, dan nilai-nilai keindonesiaan.</p>
            <h2 class="mb-4">Misi</h2>
            <ul>
              <li>Memberikan materi pendidikan dan pengajaran terbaik di bidang sains, teknologi, dan desain, dengan beberapa warna keindonesiaan di dalamnya, mengacu pada berbagai standar internasional, disesuaikan dengan situasi dan kondisi kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara.</li>
              <li>Melakukan penelitian berstandar internasional di bidang sains, teknologi, dan desain, sesuai kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara, menggunakan keindonesiaan sebagai bagian dari elemen penelitian.</li>
              <li>Menyediakan berbagai solusi inovatif dan unggulan berbasis sains, teknologi, dan desain bagi berbagai masalah sosial, ekonomi, dan budaya, mengacu pada berbagai standar internasional, khususnya dalam menghadapi pasar masyarakat ekonomi ASEAN (AEC)</li>
            </ul>
					</div>
					<div class="col-md-5 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 style="margin-left:100px;">Berdiri Sejak 1979</h2>
            <?php
              include("timeline.php");
            ?>
            <!-- <p>ISTTS was initially known as Institut Teknisi Elektro Surabaya (ITES), founded on March 1, 1979, located on Jalan Bali 17, Surabaya, under Yayasan Perguruan Tinggi Teknik Nusantara foundation. The establishment of this institution was based on the awareness to participate in supplying the needs of higher education, especially in electrical engineering.</p>
            <p>For the very first time the Ministry of Education and Culture implemented full accreditation system, STTS was announced as an Accredited Higher Institution (the first in Eastern Indonesia among similar private universities).</p>
            <p>Having recognized as the best performing Sekolah Tinggi in East Java, STTS had officially received an honor to become an Institute.
            <p>In year 2022, iSTTS shall be a higher institution in science, technology, and design which can compete at Southeast Asia level, emphasizing quality, innovation, and Indonesian values.</p> -->
		  
					</div>
				</div>
			</div>
		</section>
		<?php
      include("campus.php");
      include("testi.php");
      include("gallery.php");
      include("footer.php");
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
      $("#about").addClass("active");
      $("#title").html("About Us");
      $("#title2").html("About Us");
    });
  </script>
  </body>
</html>