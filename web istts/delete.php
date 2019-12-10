<?php
    require_once("connect.php");

    $kode = $_POST['kode'];
    if($kode==1)
    {
        $id = $_POST['id'];
        $query = "DELETE FROM mata_kuliah WHERE id=$id";
        mysqli_query($conn, $query);
    }
    else if ($kode==2)
    {
        $id = $_POST['id'];
        $query = "DELETE FROM kegiatan WHERE id=$id";
        mysqli_query($conn, $query);
    }
    else if ($kode==3)
    {
        $id = $_POST['id'];
        $query = "DELETE FROM dosen WHERE dosen_id=$id";
        mysqli_query($conn, $query);
    }
    else if($kode==4)
    {
        $id = $_POST['id'];
        echo "$id";
        // $query = "DELETE FROM tag_bahasa WHERE tag_id=$id";
        // mysqli_query($conn,$query);
        // $query1 = "DELETE FROM tag WHERE tag_id=$id";
        // mysqli_query($conn,$query1);
    }
?>