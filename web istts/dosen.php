
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require("connect.php");
    $dosen=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from dosen"));
?>
<img src="<?=$dosen["gambar"]?>" alt="">
</body>
</html>