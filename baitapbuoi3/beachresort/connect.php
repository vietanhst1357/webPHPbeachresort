<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $database='lop518a';
    $conn=mysqli_connect($hostname,$username,$password,$database);
    mysqli_query($conn,'setnames"utf8"');
?>