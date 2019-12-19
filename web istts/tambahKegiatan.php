<?php
    require_once("connect.php");

    if(isset($_POST['btnSubmit']))
    {
        $judul = $_POST['edJudul'];
        $desc = $_POST['edDeskripsi'];
        $tgl = $_POST['edDate'];
        $lokasi = $_POST['edLokasi'];
        $kat = $_POST['edKategori'];
        $tag="";
        for ($i=0; $i < count($_POST['tagKegiatan']); $i++) {
            if($tag=="")
            {
                $tag = $_POST['tagKegiatan'][$i];
            }
            else
            {
                $tag = $tag."|".$_POST['tagKegiatan'][$i];
            }
            
        }
        $filename = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $fileDestination = "images//".$filename;
        move_uploaded_file($tempFile,$fileDestination);
        if($judul!=""&&$desc!=""&&$lokasi!=""&&$tag!="")
        {
            $query = "INSERT INTO kegiatan VALUES ('','$judul','$desc','$tgl','$lokasi','$kat','$tag','$fileDestination')";
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
    <form action="#" method="post" enctype='multipart/form-data'>
        <h1>Tambah Kegiatan Baru</h1>
        Nama Kegiatan : <input type="text" name="edJudul"><br>
        Gambar Kegiatan : <input type="file" name="file"><br>
        Tanggal Kegiatan : <input type="date" name="edDate"><br>
        Lokasi Kegiatan : <input type="text" name="edLokasi"><br>
        Deskripsi Kegiatan : <br><textarea name="edDeskripsi" cols="30" rows="10"></textarea><br>
        Kategori Kegiatan :
        <select name="edKategori" id="">
            <option value="UKK KMK & PD">UKK KMK & PD</option>
            <option value="UKK BUDDHIS">UKK BUDDHIS</option>
            <option value="HIMA">HIMA</option>
            <option value="ECC">ECC</option>
            <option value="BEM">BEM</option>
            <option value="LAIN - LAIN">LAIN - LAIN</option>
        </select>
        <br>
        Tag : 
        <?php
            $query = "SELECT * FROM tag_bahasa";
            $list = $conn->query($query);
            foreach ($list as $key => $value) {
                echo "<input type='checkbox' name='tagKegiatan[]' value='$value[tag_id]'>$value[tag_nama]";
            }
        ?>
        <br>
        <input type="submit" value="Submit" name="btnSubmit"><br>
    </form>
</body>
</html>