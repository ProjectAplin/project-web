	  <style>
		#sticky{
			position: sticky;
			top: 0px;
		}
		.open .dropdown-toggle.btn-primary {
			color: white;
			background-color: #fec503;
			border-color: #f6bf01;
		}
		.dropdown-menu {
			top:50px;
			left:760px;
		}
	  
	  </style>
	  
	<?php
		require("connect.php");
		session_start();
		// echo "bhs e".$_SESSION['lang'];
	
		if(isset($_POST['btnSearch'])){
			$kata=$_POST["search"];
			header("location:search.php?kata=$kata");
		}
	?>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">𝕚𝕊𝕋𝕋𝕊  <img src="images/logo.png" width=60px height=60px;></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>web_admin@istts.ac.id</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: 0821-2290-7788</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="https://pmb.stts.edu/manajemen/index.php" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>Apply now</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<nav class="navbar navbar-expand-lg navbar-dark  ftco-navbar-light" id="ftco-navbar" style="position:sticky;top:0px;padding:0px;">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" method="post"class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" name="search" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" name="btnSearch" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      
			<?php
				
				if($_SESSION['lang']=="inggris"){
					?>
					<div class="topbnavbar collapse navbar-collapse" id="ftco-nav sticky">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item" id="index"><a href="index.php" class="nav-link pl-0">Home</a></li>
					<li class="nav-item" id="about"><a href="about2.php" class="nav-link">About</a></li>
					<li class="nav-item" id="courses"><a href="courses2.php" class="nav-link">Courses</a></li>
					<li class="nav-item" id="teacher"><a href="teacher.php" class="nav-link">Staff</a></li>
					<li class="nav-item" id="agenda"><a href="blog.php" class="nav-link">Event & Agenda</a></li>
					<li class="nav-item" id="contact"><a href="contact.php" class="nav-link">Student Activity</a></li>
					<li class="nav-item"><a class="nav-link dropdown dropdown-toggle" id="menu-bahasa" href="" data-toggle="dropdown">Language<span class="caret"></span></a>
						<ul class="dropdown-menu ">
						<li style="cursor:pointer;"><a id="indonesia" onclick="ganti('indo')">Indonesia</a></li>
						<li style="cursor:pointer;"><a id="inggris" onclick="ganti('inggris')">English</a></li>
						</ul>
					</li>
					</ul>
					</div>
					<?php
				}
				else{
					?>
					<div class="topnavbar collapse navbar-collapse" id="ftco-nav sticky">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item" id="index"><a href="index.php" class="nav-link pl-0">Beranda</a></li>
					<li class="nav-item" id="about"><a href="about2.php" class="nav-link">Tentang</a></li>
					<li class="nav-item" id="courses"><a href="courses.php" class="nav-link">Akademik</a></li>
					<li class="nav-item" id="teacher"><a href="teacher.php" class="nav-link">Dosen</a></li>
					<li class="nav-item" id="agenda"><a href="blog.php" class="nav-link">Event & Agenda</a></li>
					<li class="nav-item" id="contact"><a href="contact.php" class="nav-link">Aktifitas</a></li>
					<li class="nav-item"><a class="nav-link dropdown dropdown-toggle" id="menu-bahasa" href="" data-toggle="dropdown">Bahasa<span class="caret"></span></a>
						<ul class="dropdown-menu ">
						<li style="cursor:pointer;"><a id="indonesia" onclick="ganti('indo')">Indonesia</a></li>
						<li style="cursor:pointer;"><a id="inggris" onclick="ganti('inggris')">Inggris</a></li>
						</ul>
					</li>
					</ul>
					</div>
					<?php
				}
			?>
	        	


	        
	    </div>
	  </nav>
	  <script src="jquery-3.3.1.min.js"></script>
	  <script>
	  function ganti(bahasa){
		  
		$.ajax({
			  method: "post",
			  url: "gantibahasa.php",
			  data: {
				  bahasa:bahasa
			  },
			  success: function (response) {
				  location.reload();
			  }
		  });
	  }
	  </script>