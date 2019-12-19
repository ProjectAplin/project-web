<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION['user']))
    {
        header("location:admin.php");
    }
    if(isset($_POST['btnTambah']))
    {
        $nama = $_POST['edTag'];
        $name = $_POST['edTag_2'];
        $result = mysqli_query($conn,"INSERT INTO tag VALUES('',1)");
        $result = mysqli_query($conn,"INSERT INTO tag_bahasa VALUES('',".mysqli_insert_id($conn).",1,'$nama','$name')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Tambah Tag Baru</h1>
        Nama Tag : <input type="text" name="edTag" required><br>
        Tag Name : <input type="text" name="edTag_2" required><br>
        <input type="submit" value="Tambah" name="btnTambah">    
    </form>
</body>
</html>