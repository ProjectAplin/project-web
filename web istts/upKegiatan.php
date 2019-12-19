<?php
    session_start();
    require_once("connect.php");
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
    $tag=[];
    $query = "SELECT * FROM kegiatan WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $judul = $row['judul'];
            $des = $row['deskripsi'];
            $tgl = $row['tanggal'];
            $lokasi = $row['lokasi'];
            $kategori = $row['kategori'];
            $temp = $row['tag'];
            $tag = explode('|',$temp);
        }
    }

    if(isset($_POST['btnSubmit']))
    {
        $judul = $_POST['edJudul'];
        $desc = $_POST['edDeskripsi'];
        $tgl = $_POST['edDate'];
        $lokasi = $_POST['edLokasi'];
        $kat = $_POST['edKategori'];
        $tag1="";
        for ($i=0; $i < count($_POST['tagKegiatan']); $i++) {
            if($tag1=="")
            {
                $tag1 = $_POST['tagKegiatan'][$i];
            }
            else
            {
                $tag1 = $tag1."|".$_POST['tagKegiatan'][$i];
            }
            
        }
        $filename = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $fileDestination = "images//".$filename;
        move_uploaded_file($tempFile,$fileDestination);
        if($judul!=""&&$desc!=""&&$lokasi!="")
        {
            if($filename!="")
            {
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1',foto='$fileDestination' WHERE id=$id";
                $conn->query($query);
            }
            else 
            {
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1' WHERE id=$id";
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
<script src="jquery-3.3.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="updateKegiatan.php" method="post" enctype='multipart/form-data'>
        <h1>Tambah Kegiatan Baru</h1>
        Nama Kegiatan : <input type="text" name="edJudul" value=<?=$judul?>><br>
        Gambar Kegiatan : <input type="file" name="file"><br>
        Tanggal Kegiatan : <input type="date" name="edDate"  value=<?=$tgl?>><br>
        Lokasi Kegiatan : <input type="text" name="edLokasi" value=<?=$lokasi?>><br>
        Deskripsi Kegiatan : <br><textarea name="edDeskripsi" cols="30" rows="10"> <?=$des?></textarea><br>
        Kategori Kegiatan :
        <select name="edKategori" id="">
            <option value="UKK KMK & PD" <?php if($kategori=="UKK KMK & PD"){echo "selected";} ?>>UKK KMK & PD</option>
            <option value="UKK BUDDHIS" <?php if($kategori=="UKK BUDDHIS"){echo "selected";} ?>>UKK BUDDHIS</option>
            <option value="HIMA" <?php if($kategori=="HIMA"){echo "selected";} ?>>HIMA</option>
            <option value="ECC" <?php if($kategori=="ECC"){echo "selected";} ?>>ECC</option>
            <option value="BEM" <?php if($kategori=="BEM"){echo "selected";} ?>>BEM</option>
            <option value="LAIN - LAIN" <?php if($kategori=="LAIN-LAIN"){echo "selected";} ?>>LAIN - LAIN</option>
        </select>
        <br>
        Tag : 
        <?php
            $query = "SELECT * FROM tag_bahasa";
            $list = $conn->query($query);
            foreach ($list as $key => $value) {
                if(in_array($value['tag_id'],$tag))
                {
                    echo "<input type='checkbox' name='tagKegiatan[]' value='$value[tag_id]' checked>$value[tag_nama]";
                }
                else 
                {
                    echo "<input type='checkbox' name='tagKegiatan[]' value='$value[tag_id]'>$value[tag_nama]";
                }
        }
        ?>
        <br>
        <input type="submit" value="Submit" name="btnSubmit"><br>
    </form>
</body>
</html>