<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION['user']))
    {
        header("location:admin.php");
    }
    if(isset($_POST['btnEdit']))
    {
        $_SESSION['id'] = $_POST['btnEdit'];
        header("location:upTag.php");
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
    <h1>Update Tag</h1>
    Cari Tag : <input type="text" name='edCari'>
    <button id="btnCari">Search</button>
    <div id="container"></div>
</body>
<script>
    $(document).ready(function () {
        $('#btnCari').click(function (e) { 
            let nama = $('input[name=edCari]').val();
            $.ajax({
                method: "post",
                url: "cari.php",
                data: {
                    nama : nama,
                    kode : 4
                },
                success: function (response) {
                    $("#container").html(response);
                }
            });
        });
    });
</script>
</html>