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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="updateDosen.php" method="post">
        Nama : <input type="text" name="edNama" value=<?=$nama?>><br>
        Email : <input type="text" name="edEmail" value=<?=$email?>><br>
        Jabatan : 
        <select name="edJabatan" id="">
            <option value="Dosen D3 Manajemen Informatika" <?php if($jabatan=="Dosen D3 Manajemen Informatika"){echo "selected";} ?>>Dosen D3 Manajemen Informatika</option>
            <option value="Dosen S1 Teknik Informatika" <?php if($jabatan=="Dosen S1 Teknik Informatika"){echo "selected";} ?>>Dosen S1 Teknik Informatika</option>
            <option value="Dosen S1 Desain Produk" <?php if($jabatan=="Dosen S1 Desain Produk"){echo "selected";} ?>>Dosen S1 Desain Produk</option>
            <option value="Dosen S1 Sistem Informasi Bisnis" <?php if($jabatan=="Dosen S1 Sistem Informasi Bisnis"){echo "selected";} ?>>Dosen S1 Sistem Informasi Bisnis</option>
            <option value="Dosen S1 Teknik Elektro" <?php if($jabatan=="Dosen S1 Teknik Elektro"){echo "selected";} ?>>Dosen S1 Teknik Elektro</option>
            <option value="Dosen S1 Desain Komunikasi Visual" <?php if($jabatan=="Dosen S1 Desain Komunikasi Visual"){echo "selected";} ?>>Dosen S1 Desain Komunikasi Visual</option>
            <option value="Dosen S1 Teknik Industri" <?php if($jabatan=="Dosen S1 Teknik Industri"){echo "selected";} ?>>Dosen S1 Teknik Industri</option>
            <option value="Dosen S2 Teknologi Informasi" <?php if($jabatan=="Dosen S2 Teknologi Informasi"){echo "selected";} ?>>Dosen S2 Teknologi Informasi</option>
        </select><br>
        Mata Kuliah yang diajar : <textarea name="edMatkul" id="" cols="30" rows="10"><?=$matkul?></textarea><br>
        Foto Dosen : <input type="file" name="file"><br>
    </form>
</body>
</html>