<?php
    session_start();
    require_once("connect.php");
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
    $query = "SELECT * FROM tag_bahasa WHERE tag_id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama = $row['tag_nama'];
            $name = $row['tag_nama_2'];
        }
    }
    if(isset($_POST['btnTambah']))
    {
        $nama = $_POST['edTag'];
        $name = $_POST['edTag_2'];
        $query = "UPDATE tag_bahasa SET tag_nama = '$nama',tag_nama_2='$name' WHERE tag_id=$id";
        $conn -> query($query);
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
        <h1>Edit Tag</h1>
        Nama Tag : <input type="text" name="edTag" value='<?=$nama?>' required><br>
        Tag Name : <input type="text" name="edTag_2" value='<?=$name?>' required><br>
        <input type="submit" value="Edit" name="btnTambah">    
    </form>
</body>
</html>