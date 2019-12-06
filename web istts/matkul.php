<?php
    include("connect.php");
    $id=$_POST["id"];
    $ke=9;
    if($id==1){
        $id=11;
        $ke=7;
    }
    for ($i=1; $i <$ke;$i++) { 
        $matkul_sem=mysqli_query($conn,"SELECT * from matkul where jurusan_id=$id and matkul_semester=$i");
        echo "<h2> Semester $i</h2>";
        
        ?>
        <table border="1" style="width:95%;margin-bottom:40px">
            <thead>
                <tr>
                    <th style="width:30%">Mata Kuliah</th>
                    <th style="width:5%">SKS</th>
                    <th style="width:65%">Deskripsi</th>
                </tr>
                
                <?php
                    foreach ($matkul_sem as $key => $value) {
                        $matkul_des=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from matkul_bahasa where matkul_id=$value[matkul_id]"));
                        echo"
                            <tr>
                            <td>$matkul_des[matkul_nama]</td>
                            <td>$value[matkul_sks]</td>
                            <td>$matkul_des[matkul_deskripsi]</td>
                            </tr>      
                        ";
                    }
                ?>
            </thead>
        </table>
        <?php
    }
?>