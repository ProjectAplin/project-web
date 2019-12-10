<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION['user']))
    {
        header("location:admin.php");
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
            $query = "INSERT INTO kegiatan VALUES ('','$judul','$desc','$tgl','$lokasi','$kat','$tag','$fileDestination','$judul_2','$desc_2','$lokasi_2')";
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
        Nama Kegiatan : <input type="text" name="edJudul" required><br>
        Event Name [Inggris] : <input type="text" name="edJudul_2"  required> <br>
        Gambar Kegiatan : <input type="file" name="file"><br>
        Tanggal Kegiatan : <input type="date" name="edDate" required><br>
        Lokasi Kegiatan : <input type="text" name="edLokasi" required><br>
        Event Location : <input type="text" name="edLokasi_2" required><br>
        Deskripsi Kegiatan : <br><textarea name="edDeskripsi" cols="30" rows="10" required></textarea><br>
        Event Description [Inggris] : <br><textarea name="edDeskripsi_2" cols="30" rows="10" required></textarea><br>
        Kategori Kegiatan :
        <select name="edKategori" id="">
            <option value="Agenda">Agenda</option>
            <option value="Berita">Berita</option>
            <option value="Media">Media</option>
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
        Acara Jurusan :
        <select name="edJurusan" id="">
            <?php
                $query = "SELECT * FROM jurusan_bahasa";
                $list = $conn->query($query);
                foreach ($list as $key => $value) {
                    echo "<option value='$value[jurusan_id]'>$value[jurusan_nama]</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Submit" name="btnSubmit"><br>
    </form>
</body>
</html>