<?php
    require("connect.php");
    session_start();
    $_SESSION["lang"] = $_REQUEST["bahasa_id"];
    // header("location:index.php");
    //  alert($_SESSION["lang"]);
    if($_SESSION['lang']=="inggris"){
        ?>
        <div class="topbnavbar collapse navbar-collapse" id="ftco-nav sticky">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item" id="index"><a href="index.php" class="nav-link pl-0">Home</a></li>
        <li class="nav-item" id="about"><a href="about2.php" class="nav-link">About</a></li>
        <li class="nav-item" id="courses"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item" id="teacher"><a href="teacher.php" class="nav-link">Staff</a></li>
        <li class="nav-item" id="agenda"><a href="blog.php" class="nav-link">Event & Agenda</a></li>
        <li class="nav-item" id="contact"><a href="contact.php" class="nav-link">Student Activity</a></li>
        <li class="nav-item"><a class="nav-link dropdown dropdown-toggle" id="menu-bahasa" href="" data-toggle="dropdown">Language<span class="caret"></span></a>
            <ul class="dropdown-menu ">
            <li style="cursor:pointer;"><a id="indonesia">Indonesia</a></li>
            <li style="cursor:pointer;"><a id="inggris">English</a></li>
            </ul>
        </li>
        </ul>
        </div>

        <section class="desc ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sport Clubs</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

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
        <li class="nav-item" id="contact"><a href="contact.php" class="nav-link">Aktifitas Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link dropdown dropdown-toggle" id="menu-bahasa" href="" data-toggle="dropdown">Bahasa<span class="caret"></span></a>
            <ul class="dropdown-menu ">
            <li style="cursor:pointer;"><a id="indonesia">Indonesia</a></li>
            <li style="cursor:pointer;"><a id="inggris">Inggris</a></li>
            </ul>
        </li>
        </ul>
        </div>

        <section class="desc ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pengajar Tersertifikasi</h3>
                <p>Menyediakan tenaga pengajar berkualitas</p>
              </div>
            </div>      
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Edukasi Terbaik</h3>
                <p>Menggunakan Kurikulum Program Studi terbaru dan terdepan.</p>
              </div>
            </div>    
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tutor</h3>
                <p>Fasilitas tutor gratis untuk mahasiswa baru</p>
              </div>
            </div>      
          </div>
          <div class="col d-flex services align-self-stretch py-5 px-2 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Unit Kegiatan Mahasiswa</h3>
                <p>Seni, Olahraga, dan Musik semuanya tersedia di sini</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
        <?php
    }
?>