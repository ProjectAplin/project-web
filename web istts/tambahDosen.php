<?php
    require_once("connect.php");

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
            
            $query = "INSERT INTO dosen VALUE ('','$nama','$email','$jabatan','$fileDestination','$matkul')";
            $conn->query($query);
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Tambah Dosen Baru</h1>
        Nama : <input type="text" name="edNama"><br>
        Email : <input type="text" name="edEmail"><br>
        Jabatan : 
        <select name="edJabatan" id="">
            <option value="Dosen D3 Manajemen Informatika">Dosen D3 Manajemen Informatika</option>
            <option value="Dosen S1 Teknik Informatika">Dosen S1 Teknik Informatika</option>
            <option value="Dosen S1 Desain Produk">Dosen S1 Desain Produk</option>
            <option value="Dosen S1 Sistem Informasi Bisnis">Dosen S1 Sistem Informasi Bisnis</option>
            <option value="Dosen S1 Teknik Elektro">Dosen S1 Teknik Elektro</option>
            <option value="Dosen S1 Desain Komunikasi Visual">Dosen S1 Desain Komunikasi Visual</option>
            <option value="Dosen S1 Teknik Elektro">Dosen S1 Teknik Elektro</option>
            <option value="Dosen S1 Teknik Industri">Dosen S1 Teknik Industri</option>
            <option value="Dosen S2 Teknologi Informasi">Dosen S2 Teknologi Informasi</option>
        </select><br>
        Mata Kuliah yang diajar : <textarea name="edMatkul" id="" cols="30" rows="10"></textarea><br>
        Foto Dosen : <input type="file" name="file"><br>
        <input type="submit" value="Submit" name="btnSubmit"><br>
    </form>
</body>
</html>