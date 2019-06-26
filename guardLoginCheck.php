<?php
if (isset($_POST['guardSubmit']))
{
    include "connection.php";

    $sgPhone = $_POST['sgPhone'];
    $sgPassword = $_POST['sgPassword'];

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