<?php

$ServerName = 'localhost';
$UserName = 'root';
$Password = '';
$dbName = 'social_security_management';
//db connection
$connect = new mysqli($ServerName, $UserName, $Password, $dbName);
//connection check

if (!$connect)
{
    echo "Connection Failed..!";
    $connect->close();
    header("Location: home.php");

}
