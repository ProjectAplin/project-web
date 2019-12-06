<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbase="sttsedunew";
    $conn=mysqli_connect($host,$user,$pass,$dbase);

    if (!$conn) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
?>