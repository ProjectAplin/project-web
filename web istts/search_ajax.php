<?php
          include("connect.php");
          $kata=$_POST['kata'];
          $bahasa=1;
            session_start();
          if($_SESSION["lang"]=="inggris"){
            $bahasa=2;
          }
          $agenda=mysqli_query($conn,"SELECT * from kegiatan where judul_$bahasa like '%$kata%' or deskripsi_$bahasa like '%$kata%' order by id desc limit 1");
         
         //$dosen=mysqli_query($conn,"SELECT * from dosen where dosen_nama like '%$kata%' or dosen_email like '%$kata%' order by dosen_id desc limit 9");
         
            echo"
            <section class='ftco-section'  > 
                <div class='container-fluid px-4' >				
                    <div class='row'>
            ";
            // <p>";
            // $ket=$value["jurusan_des_$bahasa"];
            // echo "$ket</p>
            foreach ($agenda as $key => $value) {
                // $desc=substr($value["agenda_deskripsi"],0,50);
                    echo"
                    <div class='col-md-3 course ftco-animate'>
                        <div class='img' style='background-image: url($value[foto]);'></div>
                        <div class='text pt-4'>
                            <h3><a href='#'>";
                            $judul=$value["judul_$bahasa"];
                            echo "$judul;</a></h3>
                            <p>";
                            $deskripsi=$value["deskripsi_$bahasa"];
                            echo "$deskripsi</p>
                            <p><a href='detail.php?jurusan=$value[id]' class='btn btn-primary'>See more</a></p>
                        </div>
                    </div>	
                    ";
            }	
            echo" 
                    </div>
                </div>
            </section>
            ";

            
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