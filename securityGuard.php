<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/myCustom.css">
        <title>Member List</title>
        
        <style>
            
        </style>
    </head>
    <body>
        
        <?php
            function secGuardInfo()
            {
                $ServerName = 'localhost';
                $UserName = 'root';
                $Password = '';
                $dbName = 'social_security_management';
                //db connection
                $connect = new mysqli($ServerName, $UserName, $Password, $dbName);
                //connection check
                if($connect-> connect_error)
                {
                    die("Connection Error : ". $connect->connect_error);
                }
                $sql = "SELECT *FROM member";
                $result = $connect-> query($sql);

                while($row = $result->fetch_assoc())
                {
                echo "<tr>
                        <td>".$row['mem_id']."</td>
                        <td>".$row['memName']."</td>
                        <td>".$row['memPhone']."</td>
                        <td>
                            <a href=\"edit.php?id_edit=".$row['mem_id']."\">Edit / </a>
                        
                            <a href=\"del.php?id_del=".$row['mem_id']."\">Delete</a>

                        </td>
                        </tr>";     
                }
            }
        ?>
        
        
        
        <div class="container mt-4">
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col-6">
                    <div class="card card-hov btn-outline-success">
                        <div class="card-header">
                            <h1 class="text-center">Member List</h1>
                        </div>
                        <div class="card-body">
                            <form action="goGuard.php" method="post">
                                <div class="form-group row">
                                    <label for="inputId" class="col-sm-3 col-form-label">Member ID</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="mem_id" id="inputId" placeholder="ID here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="memName" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-8">
                                        <input type="tel" class="form-control" name="memPhone" id="inputPhone" placeholder="Phone number">
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group row text-center">
                                    <div class="col-sm-11">
                                        <input type="submit" class="btn btn-outline-success btn-hover btn-block" name="guardSubmit">
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


        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table border="1" class="table table-striped text-center table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr style="background-color:  blanchedalmond">
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Phone number</th>
                            <th>Edit/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        secGuardInfo();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        
        ?>
        
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
