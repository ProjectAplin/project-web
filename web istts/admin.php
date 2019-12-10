<?php
    session_start();
    if(isset($_POST['btnSubmit']))
    {
        $user = $_POST['edUser'];
        $pass = $_POST['edPass'];
        if($user=="admin")
        {
            if($user==$pass)
            {
                $_SESSION["user"]="admin";
                header("location:home.php");
            }
            else
            {
                echo "Password salah";
            }
        }
        else
        {
            echo "Username salah";
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
    <form action="#" method="post">
        <h1>Login to Page Admin</h1>
        Username : <input type="text" name="edUser"><br>
        Password : <input type="password" name="edPass"><br>
        <input type="submit" value="Login" name="btnSubmit">
    </form>
</body>
</html>