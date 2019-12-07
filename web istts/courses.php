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
  <style>
  
  .cobak li a:hover{
/*  style="background-color:#943434;margin-top:20px;"*/ 
    border-top:8px solid #fff;
    color:#fff;
    background-color:#943434;
    cursor: pointer;
  }
  </style>
  		<?php
			include("topnavbar.php");
			include("title.php");
			include("connect.php");
			//$jurusan=mysqli_query($conn,"SELECT * from jurusan_bahasa where jurusan_bahasa_id<>2");
      $jurusan=mysqli_query($conn,"SELECT * from jurusan_bahasa");
      //sertifikasi.php?jenis=sertifikasi&id=8
	  ?>
    <div class="cobak">
      <h4 style="font-weight:300;">Diploma 3</h4>
        <ul class="list-unstyled text-left" style="font-family:'Roboto';font-weight:400;margin-top:-5px;">
          <li><a href="detail.php?jurusan=01">D3 Sistem Informasi</a></li>
          
         </ul>
      <h4 style="font-weight:300;margin-top:20px;">Strata 1</h4>
        <ul class="list-unstyled text-left" style="font-family:'Roboto';font-weight:400;margin-top:-5px;">
          <li><a href="detail.php?jurusan=11">Strata-1 Informatika</a></li><li><a href="detail.php?jurusan=31">Strata-1 Informatika profesional (kelas malam)</a></li><li><a href="detail.php?jurusan=18">Strata-1 Sistem Informasi Bisnis</a></li><li><a href="detail.php?jurusan=12">Strata-1 Teknik Industri</a></li><li><a href="detail.php?jurusan=10">Strata-1 Teknik Elektro</a></li><li><a href="detail.php?jurusan=17">Strata-1 Desain Komunikasi Visual</a></li><li><a href="detail.php?jurusan=14">Strata-1 Desain Produk</a></li>		    <!--<li><a href="akademik.php?jenis=jurusan&id=14">Strata-1 Desain Produk</a></li>-->
        </ul>
      <h4 style="font-weight:300;margin-top:20px;">Strata 2</h4>
        <ul class="list-unstyled text-left" style="font-family:'Roboto';font-weight:400;margin-top:-5px;">
          <li><a href="detail.php?jurusan=21">S2 Teknologi Informasi</a></li>
        </ul>
       <h4 style="font-weight:300;margin-top:20px;">Program Internasional</h4>
        <ul class="list-unstyled text-left" style="font-family:'Roboto';font-weight:400;margin-top:-5px;">
          <li><a href="detail.php?jurusan=02">Bachelor of Information Technology</a></li>
        </ul>
    </div>
     
		<section class="ftco-section"  style="margin-left:25%";>
			<div class="container-fluid px-4"  style="margin-top:-50%";>				
				<div class="row">
					<?php
						foreach ($jurusan as $key => $value) {
							echo "
							<div class='col-md-3 course ftco-animate'>
								<div class='img' style='background-image: url($value[jurusan_gambar]);'></div>
								<div class='text pt-4'>
									
									<h3><a href='#'>$value[jurusan_nama]</a></h3>
									<p>$value[jurusan_deskripsi2]</p>
									<p><a href='detail.php?jurusan=$value[jurusan_id]' class='btn btn-primary'>See more</a></p>
								</div>
							</div>
							";
						}
					?>
					
				</div>
			</div>
		</section>
		<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
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
      $("#courses").addClass("active");
      $("#title").html("Our Courses");
      $("#title2").html("Courses");
    });
  </script>
  </body>
</html>
