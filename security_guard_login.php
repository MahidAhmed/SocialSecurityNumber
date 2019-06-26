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
        <title>Security Guard</title>
        
        <style>
            .card-hov {
                margin-top: 30px;
                padding-top: 20px;
                padding-bottom: 40px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    </head>
    <body>
    <?php

    include 'connection.php';
    include 'loginCheck.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col-6 card-hov">
                    <h1 class="text-center">Security Guard</h1>
                    <br><br>
                    <?php if ($error!= "") { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php   }?>
                    <form method="post" action="">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone number</label>
                          <input type="tele" class="form-control" name="sgPhone" id="exampleInputPhone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="sgPassword" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="guardLoginCheck" class="btn btn-primary" style="width: 120px">Submit</button>
                    </form>
                </div>
                <div class="col-3">
                    
                </div>
            </div>
        </div>

        
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
