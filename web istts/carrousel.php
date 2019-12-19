  <?php
    require("connect.php");
		// session_start();
    if($_SESSION['lang']=="inggris"){
      ?>
       <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/yas.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>We don't teach you how to solve a problem, we teach you how to create one.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/cover.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Institute of Science & Technology</h1>
			<p>For the very first time the Ministry of Education and Culture implemented full accreditation system, STTS was announced as an Accredited Higher Institution (the first in Eastern Indonesia among similar private universities).</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
	  
	  <div class="slider-item" style="background-image:url(images/kepik.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4" style="font-family:Flaticon;">Help to Shape little minds</h1>
            <p>We facilitate our students with many opportunities to get involved and to make bold deccisions that would impact their lifes.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
      <?php
    }
    else{
      ?>
       <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/yas.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Menghadapi Tantangan Indrustri 4.0</h1>
            <p>Kami tidak mengarjakan anda mengatasi masalah, namun bagaiaman cara menciptakan permasalahan baru.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/cover.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Institut Sains & Teknologi Terapadu Surabaya</h1>
			<p>iSTTS pada mulanya dikenal dengan Institut Teknisi Elektro Surabaya (ITES) yang didirikan pada tanggal 1 Maret 1979. ITES berlokasi di jalan Bali no. 17 Surabaya dan dibawah naungan Yayasan Perguruan Tinggi Teknik Nusantara.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
	  
	  <div class="slider-item" style="background-image:url(images/kepik.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4" style="font-family:Flaticon;">Membentuk Pola Pikir yang Cerdas</h1>
            <p>Kami menyediakan berbagai wadah bagi mahasiswa untuk mencoba tantangan baru dan membentuk pola pikir baru yang akan berguna di masa depan.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
      <?php
    }
  ?>
