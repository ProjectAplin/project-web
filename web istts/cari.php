<?php
    require_once("connect.php");

    $kode = $_POST['kode'];
    if($kode==1)
    {
        $nama = $_POST['nama'];

        $query = "SELECT * FROM mata_kuliah WHERE nama LIKE '%$nama%'";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            echo "<form method='post' action='#'>";
            echo "<table border=1>";
            echo "<thead>";
            echo "<tr>";
            echo "<td align='center'>Nama</td>";
            echo "<td align='center'>Deskripsi</td>";
            echo "<td colspan='2' align='center'>Action</td>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($result as $key => $value) {
                echo "<tr id=$value[id]>";
                echo "<td>$value[nama]</td>";
                echo "<td>$value[deskripsi]</td>";
                echo "<td><button type='submit' name='btnEdit' value=$value[id]>Edit</button></td><td><button type='submit' class='btnDel1' name='btnDelete' value=$value[id]>Delete</button></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";  
            echo "</form>";      
        }
        else {
            echo "Data not found";
        }
    }
    else if ($kode==2)
    {
        $nama = $_POST['nama'];
        $query = "SELECT * FROM kegiatan WHERE judul LIKE '%$nama%'";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            echo "<form method='post' action='#'>";
            echo "<table border=1>";
            echo "<thead>";
            echo "<tr>";
            echo "<td align='center'>Judul</td>";
            echo "<td align='center'>Deskripsi</td>";
            echo "<td align='center'>Tanggal</td>";
            echo "<td align='center'>Lokasi</td>";
            echo "<td colspan='2' align='center'>Action</td>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($result as $key => $value) {
                echo "<tr id=$value[id]>";
                echo "<td>$value[judul]</td>";
                echo "<td>$value[deskripsi]</td>";
                echo "<td>$value[tanggal]</td>";
                echo "<td>$value[lokasi]</td>";
                echo "<td><button type='submit' name='btnEdit' value=$value[id]>Edit</button></td><td><button type='submit' class='btnDel2' name='btnDelete' value=$value[id]>Delete</button></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";  
            echo "</form>";      
        }
        else {
            echo "Data not found";
        }
    }
    else if ($kode==3)
    {
        $nama = $_POST['nama'];
        $query = "SELECT * FROM dosen WHERE dosen_nama LIKE '%$nama%'";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            echo "<form method='post' action='#'>";
            echo "<table border=1>";
            echo "<thead>";
            echo "<tr>";
            echo "<td align='center'>Nama</td>";
            echo "<td align='center'>Email</td>";
            echo "<td align='center'>Jabatan</td>";
            echo "<td align='center'>Mata Kuliah</td>";
            echo "<td colspan='2' align='center'>Action</td>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($result as $key => $value) {
                echo "<tr id=$value[dosen_id]>";
                echo "<td>$value[dosen_nama]</td>";
                echo "<td>$value[dosen_email]</td>";
                echo "<td>$value[dosen_jabatan]</td>";
                echo "<td>$value[dosen_makul]</td>";
                echo "<td><button type='submit' name='btnEdit' value=$value[dosen_id]>Edit</button></td><td><button type='submit' class='btnDel3' name='btnDelete' value=$value[dosen_id]>Delete</button></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";  
            echo "</form>";      
        }
        else {
            echo "Data not found";
        }
    }

    
?>
<script src="jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('.btnDel1').click(function (e) {
            let id = $('button[name=btnDelete]').val();
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 1
                },
                success: function (response) {
				    $("tr[id='" + id + "']").remove();
                }
            });
        });

        $('.btnDel2').click(function (e) {
            let id = $('button[name=btnDelete]').val(); 
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 2
                },
                success: function (response) {
                    
                }
            });
        });

        $('.btnDel3').click(function (e) {
            let id = $('button[name=btnDelete]').val(); 
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 3
                },
                success: function (response) {
                    
                }
            });
        });
    });
</script>