<?php
    session_start();
    require_once("connect.php");
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
    $query = "SELECT * FROM tag_bahasa WHERE tag_id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama = $row['tag_nama'];
            $name = $row['tag_nama_2'];
        }
    }
    if(isset($_POST['btnTambah']))
    {
        $nama = $_POST['edTag'];
        $name = $_POST['edTag_2'];
        $query = "UPDATE tag_bahasa SET tag_nama = '$nama',tag_nama_2='$name' WHERE tag_id=$id";
        $conn -> query($query);
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
                    <h4 class="card-title">Edit Tag</h4>
                    <p class="card-description">Edit Tag</p>
                    <form class="forms-sample" action="#" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Tag</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="cth: Pendidikan" name="edTag" value='<?=$nama?>' required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name Tag [Inggris]</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="ex: Education" name="edTag_2" value='<?=$name?>' required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="btnTambah">Submit</button>
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