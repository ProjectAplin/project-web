<?php
     include("connect.php");
    $id=$_POST["id"];
    $bahasa=1;
    session_start();
    if($_SESSION["lang"]=="inggris"){
      $bahasa=2;
    }
    $jurusan=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from jurusan_bahasa where jurusan_id=$id"));
    echo $jurusan["jurusan_deskripsi_$bahasa"];
?>
  