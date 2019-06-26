<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if (isset($_POST['guardSubmit']))
{
    include "connection.php";

    $mem_id = $_POST['mem_id'];
    $memName = $_POST['memName'];
    $memPhone = $_POST['memPhone'];

    $sql = "INSERT INTO member (`mem_id`, `memName`, `memPhone`)
            VALUES
            (
                    '$mem_id',
                    '$memName',
                    '$memPhone'
                    )" ;
    if($connect->query($sql) === TRUE)
    {
        // echo "New record created successfully";
    }else
    {
        echo "Error: ".$sql. "<br>". $connect->error;
    }
    $connect->close();
}
print'<script language="javascript"> alert("New record created successfully..!"); window.location= "securityGuard.php"</script>';
exit;
?>
</body>
</html>
