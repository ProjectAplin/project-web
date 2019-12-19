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
            $judul_2 = $row['judul_2'];
            $des_2 = $row['deskripsi_2'];
            $lokasi_2 = $row['lokasi_2'];
            $tag = explode('|',$temp);
        }
    }

    if(isset($_POST['btnSubmit']))
    {
        $judul = $_POST['edJudul'];
        $judul_2 = $_POST['edJudul_2'];
        $desc = $_POST['edDeskripsi'];
        $desc_2 = $_POST['edDeskripsi_2'];
        $tgl = $_POST['edDate'];
        $lokasi = $_POST['edLokasi'];
        $lokasi_2 = $_POST['edLokasi_2'];
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
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1',foto='$fileDestination',judul_2='$judul_2',deskripsi_2='$desc_2',lokasi_2='$lokasi_2' WHERE id=$id";
                $conn->query($query);
            }
            else 
            {
                $query = "UPDATE kegiatan SET judul='$judul',deskripsi='$desc',tanggal='$tgl',lokasi='$lokasi',kategori='$kat',tag='$tag1',judul_2='$judul_2',deskripsi_2='$desc_2',lokasi_2='$lokasi_2' WHERE id=$id";
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
        Nama Kegiatan : <input type="text" name="edJudul" value=<?=$judul?>required><br>
        Event Name [Inggris] : <input type="text" name="edJudul_2" required> <br>
        Gambar Kegiatan : <input type="file" name="file"><br>
        Tanggal Kegiatan : <input type="date" name="edDate"  value=<?=$tgl?>required><br>
        Lokasi Kegiatan : <input type="text" name="edLokasi" value=<?=$lokasi?>required><br>
        Event Location : <input type="text" name="edLokasi_2" value=<?=$lokasi_2?> required><br>
        Deskripsi Kegiatan : <br><textarea name="edDeskripsi" cols="30" rows="10" required> <?=$des?></textarea><br>
        Deskripsi Kegiatan : <br><textarea name="edDeskripsi" cols="30" rows="10" required></textarea><br>
        Kategori Kegiatan :
        <select name="edKategori" id="">
        <option value="Agenda" <?=if($kategori=="Agenda"){echo "selected";}?>>Agenda</option>
            <option value="Berita" <?=if($kategori=="Berita"){echo "selected";}?>>Berita</option>
            <option value="Media" <?=if($kategori=="Media"){echo "selected";}?>>Media</option>
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