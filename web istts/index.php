<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iSTTS - Website</title>
	
	<style>
	@font-face {
	  font-family:Flaticon;
	  src:url(DancingScript-Regular.otf),format('truetype');
	}
  
	h1{
		font-family:times new roman;
		font-style: italic;
	}
	h2{
		font-family:times header;
	}
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
	
  </head>
  <body>

	  <?php
        $_SESSION['lang'] = "inggris";
        // echo "bhs ".$_SESSION['lang'];
        include("topnavbar.php"); 
        include("carrousel.php"); 
        include("desc.php"); 
        include("mission.php"); 
        include("campus.php"); 
        // include("courses.php"); 
        // include("teachers.php"); 
        include("news.php"); 
        include("testi.php"); 
        include("gallery.php"); 
        include("footer.php"); 
      ?>
  <div class="isi">aa</div>
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
    $(document).ready(function(){
      $("#index").addClass("active");
      $("#indonesia , #inggris").click(function(){
        $.post("bahasa.php",{bahasa_id:$(this).attr("id")},function(result){
          $(".topnavbar").html(result);
        });
        $.post("bahasa2.php",{bahasa_id:$(this).attr("id")},function(result){
          $(".desc").html(result);
        });
      });
      
    });
  </script>
  </body>
</html>