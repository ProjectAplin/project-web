<?php
     include("connect.php");
    $id=$_POST["id"];
    $jurusan=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from jurusan_bahasa where jurusan_id=$id"));
    echo $jurusan["jurusan_deskripsi"];
?>
  