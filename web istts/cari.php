<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION['user']))
    {
        header("location:admin.php");
    }
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
                echo "<td><button type='submit' name='btnEdit' value=$value[id]>Edit</button></td><td><button type='submit' class='btnDel1' name='btnDelete' id='$value[id]'>Delete</button></td>";
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
        $query = "SELECT * FROM kegiatan WHERE judul_1 LIKE '%$nama%'";
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
                echo "<td>$value[judul_1]</td>";
                echo "<td>$value[deskripsi_1]</td>";
                echo "<td>$value[tanggal]</td>";
                echo "<td>$value[lokasi]</td>";
                echo "<td><button type='submit' name='btnEdit' value=$value[id]>Edit</button></td><td><button type='submit' class='btnDel2' name='btnDelete' id='$value[id]'>Delete</button></td>";
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
                echo "<td><button type='submit' name='btnEdit' value=$value[dosen_id]>Edit</button></td><td><button type='submit' class='btnDel3' name='btnDelete' id='$value[dosen_id]'>Delete</button></td>";
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
    else if($kode==4)
    {
        
        echo "<div id=container></div>";
        $nama = $_POST['nama'];
        $query = "SELECT * FROM tag_bahasa WHERE tag_nama LIKE '%$nama%' or tag_nama_2 LIKE '%$nama%'";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            echo "<form method='post' action='#'>";
            echo "<table border=1>";
            echo "<thead>";
            echo "<tr>";
            echo "<td align='center'>Nama Tag</td>";
            echo "<td align='center'>Tag Name</td>";
            echo "<td colspan='2' align='center'>Action</td>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($result as $key => $value) {
                echo "<tr id='$value[tag_id]'>";
                echo "<td>$value[tag_nama]</td>";
                echo "<td>$value[tag_nama_2]</td>";
                echo "<td><button type='submit' name='btnEdit' value=$value[tag_id]>Edit</button></td><td><button type='submit' class='btnDel4' name='btnDelete' id='$value[tag_id]'>Delete</button></td>";
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
            let id = $(this).attr("id");
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
            let id = $(this).attr("id");
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 2
                },
                success: function (response) {
				    $("tr[id='" + id + "']").remove();
                }
            });
        });

        $('.btnDel3').click(function (e) {
            let id = $(this).attr("id"); 
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 3
                },
                success: function (response) {
				    $("tr[id='" + id + "']").remove();
                }
            });
        });

        $('.btnDel4').click(function (e) {
            let id = $(this).attr("id"); 
            $.ajax({
                method: "post",
                url: "delete.php",
                data: {
                    id : id,
                    kode : 4
                },
                success: function (response) {
				     $("tr[id='" + id + "']").remove();
                    //$("#container").html(response);
                }
            });
        });
    });
</script>