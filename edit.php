<?php 
$id_edit = $_GET['id_edit'];

include 'connection.php';

$sql = "SELECT * FROM `member` WHERE `mem_id` = '$id_edit'";

$result = $connect->query($sql);
$row = $result->fetch_assoc();

$mid = $row['mid'];
$mem_id = $row['mem_id'];
$memName = $row['memName'];
$memPhone = $row['memPhone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/myCustom.css">
	<title>Update Data</title>
</head>
<body>

<div class="container mt-lg-5">
    <div class="row">
        <div class="col-3">

        </div>


            <div class="col-6">
                <div class="card card-hov">
                    <div class="card-header">
                        <h1 class="text-center">Data Update</h1>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <div class="form-group row">
                                <label for="inputId" class="col-sm-3 col-form-label">ID</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" name="mid" value="<?php echo $mid; ?>" readonly id="inputId" placeholder="ID here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputId" class="col-sm-3 col-form-label">Member ID</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" name="mem_id" value="<?php echo $mem_id; ?>" id="inputId" placeholder="ID here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="memName" value="<?php echo $memName; ?>" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" name="memPhone" value="<?php echo $memPhone; ?>" id="inputPhone" placeholder="Phone number">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group row text-center">
                                <div class="col-sm-11">
                                    <input type="submit" class="btn btn-outline-success btn-block" name="dataUpdate" value="Update">
                                    <a href="securityGuard.php" class="btn btn-outline-warning btn-block">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-3">

        </div>
    </div>
</div>

</body>
</html>