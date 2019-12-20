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
        <?php
    }
?>
  <script>
    $(document).ready(function(){
      $("#index").addClass("active");
      $("#indonesia , #inggris").click(function(){
        $.post("bahasa.php",{bahasa_id:$(this).attr("id")},function(result){
          $(".topnavbar").html(result);
          $(".desc").html(result);
          
        });
      });
      
    });
  </script>