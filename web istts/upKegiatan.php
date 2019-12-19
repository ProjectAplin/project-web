<?php
    session_start();
    require_once("connect.php");
    
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
    $tag=[];
    $query = "SELECT * FROM kegiatan WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $judul = $row['judul'];
            $des = $row['deskripsi'];
            $tgl = $row['tanggal'];
            $lokasi = $row['lokasi'];
            $kategori = $row['kategori'];
            $temp = $row['tag'];
            $judul_2 = $row['judul_2'];
            $des_2 = $row['deskripsi_2'];
            $lokasi_2 = $row['lokasi_2'];
            $tag = explode('|',$temp);
        }
    }

    if(isset($_POST['btnSubmit']))
    {
        $judul = $_POST['edJudul'];
        $judul_2 = $_POST['edJudul_2'];
        $desc = $_POST['edDeskripsi'];
        $desc_2 = $_POST['edDeskripsi_2'];
        $tgl = $_POST['edDate'];
        $lokasi = $_POST['edLokasi'];
        $lokasi_2 = $_POST['edLokasi_2'];
        $kat = $_POST['edKategori'];
        $tag1="";
        for ($i=0; $i < count($_POST['tagKegiatan']); $i++) {
            if($tag1=="")
            {
                $tag1 = $_POST['tagKegiatan'][$i];
            }
            else
            {
                $tag1 = $tag1."|".$_POST['tagKegiatan'][$i];
            }
            
        }
        $filename = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $fileDestination = "images//".$filename;
        move_uploaded_file($tempFile,$fileDestination);
        if($judul!=""&&$desc!=""&&$lokasi!="")
        {
            if($filename!="")
            {
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1',foto='$fileDestination',judul_2='$judul_2',deskripsi_2='$desc_2',lokasi_2='$lokasi_2' WHERE id=$id";
                $conn->query($query);
            }
            else 
            {
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1',judul_2='$judul_2',deskripsi_2='$desc_2',lokasi_2='$lokasi_2' WHERE id=$id";
                $conn->query($query);
            }
        }
        else
        {
            echo "Semua field harus diisi";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="acss/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="acss/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="acss/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="acss/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="acss/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="acss/css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="acss/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:acss/partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 d-flex flex-row" style="background: #ecf0f4;">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="acss/index.html">
            <img src="acss/logoSTTS.png" alt="logo" class="logo-dark" style="height: 100%;width: 50%;"/>
          </a>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:acss/partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="designation">Administrator</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Home</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pageAdmin.php">
                <span class="menu-title">Home</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Fitur</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Dosen</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="tambahDosen.php">Tambah Dosen</a></li>
                  <li class="nav-item"> <a class="nav-link" href="updateDosen.php">Update Dosen</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Kegiatan</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="tambahKegiatan.php">Tambah Kegiatan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="updateKegiatan.php">Update Kegiatan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Tag</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="tambahTag.php">Tambah Tag</a></li>
                  <li class="nav-item"> <a class="nav-link" href="updateTag.php">Update Tag</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Kegiatan Baru</h4>
                    <p class="card-description"> Tambah Kegiatan Baru </p>
                    <form class="forms-sample" action="#" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="cth : Kunjungan" name="edJudul" value=<?=$judul?> required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Event Name [Inggris]</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="ex: Visit" name="edJudul_2" value=<?=$judul_2?> required>
                      </div>
                      <div class="form-group">
                        <label>Gambar Kegiatan</label>
                        <div class="input-group col-xs-12">
                         <input type="file" name="file" class="file-upload-browse btn btn-primary" id="">
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Kegiatan / Event Date</label>
                        <div class="input-group col-xs-12">
                         <input type="date" name="edData" class="file-upload-browse btn btn-primary" id="" value=<?=$tgl?> required>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Lokasi Kegiatan</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Lokasi" name="edLokasi" value=<?=$lokasi?> required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Event Location</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Location" name="edLokasi_2" value=<?=$lokasi_2?> required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Deskripsi Kegiatan</label>
                        <textarea name="edDeskripsi" class="form-control" id="exampleTextarea1" rows="4" required><?=$des?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Event Description</label>
                        <textarea name="edDeskripsi_2" class="form-control" id="exampleTextarea1" rows="4" required><?=$des_2?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Kategori Kegiatan</label>
                        <select class="form-control" id="" name="edKategori">
                            <option value="Agenda" <?=if($kategori=="Agenda"){echo "selected";}?>>Agenda</option>
                            <option value="Berita" <?=if($kategori=="Berita"){echo "selected";}?>>Berita</option>
                            <option value="Media" <?=if($kategori=="Media"){echo "selected";}?>>Media</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Tag </label>
                        <?php
                            $query = "SELECT * FROM tag_bahasa";
                            $list = $conn->query($query);
                            foreach ($list as $key => $value) {
                                if(in_array($value['tag_id'],$tag))
                                {
                                    echo "<div class='form-check'>";
                                    echo "<label class='form-check-label'>";
                                    echo "<input type='checkbox' class='form-check-input' name='tagKegiatan[]' value='$value[tag_id]' checked>$value[tag_nama] </label>";
                                    echo "</div>";
                                }
                                else
                                {
                                    echo "<div class='form-check'>";
                                    echo "<label class='form-check-label'>";
                                    echo "<input type='checkbox' class='form-check-input' name='tagKegiatan[]' value='$value[tag_id]'>$value[tag_nama] </label>";
                                    echo "</div>";
                                }
                            }
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="">Acara Jurusan</label>
                        <select class="form-control" id="" name="edJurusan">
                            <?php
                                $query = "SELECT * FROM jurusan_bahasa";
                                $list = $conn->query($query);
                                foreach ($list as $key => $value) {
                                    echo "<option value='$value[jurusan_id]'>$value[jurusan_nama]</option>";
                                }
                            ?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="btnSubmit">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:acss/partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="acss/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="acss/vendors/select2/select2.min.js"></script>
    <script src="acss/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="acss/js/off-canvas.js"></script>
    <script src="acss/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="acss/js/typeahead.js"></script>
    <script src="acss/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>