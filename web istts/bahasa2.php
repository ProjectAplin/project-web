<?php
    require("connect.php");
    session_start();
    $_SESSION["lang"] = $_REQUEST["bahasa_id"];
    // header("location:index.php");
    //  alert($_SESSION["lang"]);
    if($_SESSION['lang']=="inggris"){
        ?>
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
  <script>
    $(document).ready(function(){
      $("#index").addClass("active");
      $("#indonesia , #inggris").click(function(){
        $.post("bahasa.php",{bahasa_id:$(this).attr("id")},function(result){
          $(".topnavbar").html(result);
        });
        $.post("bahasa2.php",{bahasa_id:$(this).attr("id")},function(result2){
          $(".desc").html(result2);
        });
      });
      
    });
  </script>