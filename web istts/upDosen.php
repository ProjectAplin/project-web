<?php
    session_start();
    require_once("connect.php");
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }

    $query = "SELECT * FROM dosen WHERE dosen_id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama = $row['dosen_nama'];
            $email = $row['dosen_email'];
            $jabatan = $row['dosen_jabatan'];
            $matkul = $row['dosen_makul'];
        }
    }

    if(isset($_POST['btnSubmit']))
    {
        $nama = $_POST['edNama'];
        $email = $_POST['edEmail'];
        $jabatan = $_POST['edJabatan'];
        $matkul = $_POST['edMatkul'];
        $name = $_FILES['upImage']['name'];
        $filename = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $fileDestination = "images//".$filename;
        move_uploaded_file($tempFile,$fileDestination);
        if($nama!=""&&$email!="")
        {
            if($filename!="")
            {
                $query = "UPDATE dosen SET dosen_nama='$nama',dosen_email='$email',dosen_jabatan='$jabatan',dosen_gambar='$fileDestination',dosen_makul='$matkul' WHERE dosen_id=$id";
                $conn->query($query);
            }
            else 
            {
                $query = "UPDATE dosen SET dosen_nama='$nama',dosen_email='$email',dosen_jabatan='$jabatan',dosen_makul='$matkul' WHERE dosen_id=$id";
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
            <li class="nav-item"> <a class="nav-link" href="admin.php">Logout</a></li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Dosen</h4>
                    <p class="card-description">Edit Dosen</p>
                    <form class="forms-sample" action="#" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label for="exampleInputName1" required>Nama</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="edNama" value=<?=$nama?>>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3" required>Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="edEmail" value=<?=$email?>>
                      </div>
                      <div class="form-group">
                        <label for="">Jabatan</label>
                        <select class="form-control" id="" name="edJabatan">
                            <option value="Dosen D3 Manajemen Informatika" <?php if($jabatan=="Dosen D3 Manajemen Informatika"){echo "selected";} ?>>Dosen D3 Manajemen Informatika</option>
                            <option value="Dosen S1 Teknik Informatika" <?php if($jabatan=="Dosen S1 Teknik Informatika"){echo "selected";} ?>>Dosen S1 Teknik Informatika</option>
                            <option value="Dosen S1 Desain Produk" <?php if($jabatan=="Dosen S1 Desain Produk"){echo "selected";} ?>>Dosen S1 Desain Produk</option>
                            <option value="Dosen S1 Sistem Informasi Bisnis" <?php if($jabatan=="Dosen S1 Sistem Informasi Bisnis"){echo "selected";} ?>>Dosen S1 Sistem Informasi Bisnis</option>
                            <option value="Dosen S1 Teknik Elektro" <?php if($jabatan=="Dosen S1 Teknik Elektro"){echo "selected";} ?>>Dosen S1 Teknik Elektro</option>
                            <option value="Dosen S1 Desain Komunikasi Visual" <?php if($jabatan=="Dosen S1 Desain Komunikasi Visual"){echo "selected";} ?>>Dosen S1 Desain Komunikasi Visual</option>
                            <option value="Dosen S1 Teknik Industri" <?php if($jabatan=="Dosen S1 Teknik Industri"){echo "selected";} ?>>Dosen S1 Teknik Elektro</option>
                            <option value="Dosen S2 Teknologi Informasi" <?php if($jabatan=="Dosen S2 Teknologi Informasi"){echo "selected";} ?>>Dosen S2 Teknologi Informasi</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mata Kuliah Yang diajar</label>
                        <textarea name="edMatkul" class="form-control" id="exampleTextarea1" rows="4" required><?=$matkul?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Foto Dosen</label>
                        <div class="input-group col-xs-12">
                         <input type="file" name="upImage" class="file-upload-browse btn btn-primary" id="">
                          </span>
                        </div>
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