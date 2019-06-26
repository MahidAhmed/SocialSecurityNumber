<?php
session_start();
include 'connection.php';

$error = "";

if (isset($_POST['guardLoginCheck']))
{
    if (empty($_POST['sgPhone']) || empty($_POST['sgPassword']))
    {
        $error = "Both field required !";
    }
    else{
        $sgPhone = $_POST['sgPhone'];
        $sgPassword = $_POST['sgPassword'];

        $sql = "SELECT sg_id FROM securityguard where sgPhone = '$sgPhone' AND sgPassword = '$sgPassword'";

        $result =  mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) == 1)
        {
            header("location:securityGuard.php");
        }
        else{
            $error = "Incorrect Phone number or Password";
        }
    }
}
