<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          
          
          <?php
            require("connect.php");
            if(isset($_SESSION['aktif'])){
              // echo $_SESSION['aktif']." ini";
            }else{
              echo "KOSONG";
            }
            if($_SESSION['lang']=='inggris'){
                if($_SESSION['aktif']==1){
                  ?>
                  <h1 class="mb-2 bread" id="title">About Us</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">About Us</span></p>
                  <?php
                }else if($_SESSION['aktif']==2){
                  ?>
                  <h1 class="mb-2 bread" id="title">Courses</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Courses</span></p>
                  <?php
                
                }else if($_SESSION['aktif']==3){
                  ?>
                  <h1 class="mb-2 bread" id="title">Certified Lecturer</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Lecturer</span></p>
                  <?php
                }
                else if($_SESSION['aktif']==4){
                  ?>
                  <h1 class="mb-2 bread" id="title">Event & Agenda</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Event & Agenda</span></p>
                  <?php
                
                }else if($_SESSION['aktif']==5){
                  ?>
                  <h1 class="mb-2 bread" id="title">Student Activity</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Student Activity</span></p>
                  <?php
                }
            }else{
              if($_SESSION['aktif']==1){
                ?>
                <h1 class="mb-2 bread" id="title">Tentang</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Tentang</span></p>
                <?php
              }else if($_SESSION['aktif']==2){
                ?>
                <h1 class="mb-2 bread" id="title">Akademik</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Akdemik</span></p>
                <?php
              
              }else if($_SESSION['aktif']==3){
                ?>
                <h1 class="mb-2 bread" id="title">Dosen</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Dosen</span></p>
                <?php
              }
              else if($_SESSION['aktif']==4){
                ?>
                <h1 class="mb-2 bread" id="title">Event & Agenda</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Event & Agenda</span></p>
                <?php
              
              }else if($_SESSION['aktif']==5){
                ?>
                <h1 class="mb-2 bread" id="title">Aktifitas Mahasiswa</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span id="title2">Aktifitas</span></p>
                <?php
              }
            }
          ?>
          </div>
        </div>
      </div>
    </section>