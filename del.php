<?php
$id_del = $_GET['id_del'];
include 'connection.php';

$sql = "DELETE FROM `member`  WHERE `mem_id` = '$id_del'";

if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
$connect->close();
header("Location: securityGuard.php");
