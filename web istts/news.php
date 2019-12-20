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
          $judul=""; $isi="";
          $listKegiatan = mysqli_query($conn,"SELECT * FROM kegiatan");
          foreach ($listKegiatan as $kegiatan){
             if($kegiatan['kategori']=="Berita"){
                $t = $kegiatan['tanggal']; 
                $tahun = substr($t,0,4);
                $bulan = substr($t,5,2);
                $tgl = substr($t,8,2); 
                if($_SESSION['lang']=="inggris"){
                  $judul = $kegiatan['judul_2'];
                  $isi = $kegiatan['deskripsi_2'];
                }else{
                  $judul = $kegiatan['judul_1'];
                  $isi = $kegiatan['deskripsi_1'];
                }
                $monthName = date('F', mktime(0, 0, 0, $bulan, 10));
                ?>
                  <div class="ftco-animate" style="margin:0 auto; flex: 0 0 45%;
    max-width: 30%;">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url(<?=$kegiatan['foto']?>);">
                        <div class="meta-date text-center p-2">
                          <span class="day"><?=$tgl?></span>
                          <span class="mos"><?=substr($monthName,0,3)?></span>
                          <span class="yr"><?=$tahun?></span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#"><?=$judul?></a></h3>
                        <p><?=$isi?></p>
                        <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="agenda.php?title=<?=$judul?>" class="btn btn-primary">Selengkapnya <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
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
          </div>
        </div>
			</div>
		</section>