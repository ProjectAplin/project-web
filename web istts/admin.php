<?php
    require_once("connect.php");
    if(isset($_POST['edTmbhEvent']))
    {
        header("location:tambahKegiatan.php");
    }

    if(isset($_POST['edUpdateEvent']))
    {
        header("location:updateKegiatan.php");
    }

    if(isset($_POST['edTmbhDosen']))
    {
        header("location:tambahDosen.php");
    }

    if(isset($_POST['edUpdateDosen']))
    {
        header("location:updateDosen.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iSTTS - Admin    </title>
</head>
<body>
    <form action="#" method="post">
        <h1>Welcome Admin</h1>
        <input type="submit" value="Tambah Kegiatan Baru" name='edTmbhEvent'>
        <input type="submit" value="Update Kegiatan" name='edUpdateEvent'> <br>
        <input type="submit" value="Tambah Dosen Baru" name='edTmbhDosen'>
        <input type="submit" value="Update Dosen" name='edUpdateDosen'> <br>
    </form>
</body>
</html>