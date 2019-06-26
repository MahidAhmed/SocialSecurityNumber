<?php
if (isset($_POST['dataUpdate']))
{
    include "connection.php";

    $mid = $_POST['mid'];
    $mem_id = $_POST['mem_id'];
    $memName =$_POST['memName'];
    $memPhone =$_POST['memPhone'];

    $sql = "UPDATE `member` SET    
            `mem_id` = '$mem_id', 
            `memName` = '$memName', 
            `memPhone` = '$memPhone'
            WHERE `mid` = '$mid'
            ";

    if ($connect->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connect->error;
    }


$connect->close();

header('location: securityGuard.php');

}