
<!DOCTYPE html>
<?php
include_once '../Controller/readController.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            body {
            background-image: url("2.png");
            }
            .wrapper{
                background-color: white;
                opacity: 0.8;
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="../Controller/readController.php" method="post">

                            <div class="page-header">
                                <h1>View Record</h1>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <p class="form-control-static"><?php echo $row["name"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <p class="form-control-static"><?php echo $row["email"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <p class="form-control-static"><?php echo $row["phonenumber"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Hours</label>
                                <p class="form-control-static"><?php echo $row["hours"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <p class="form-control-static"><?php echo $row["address"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Compensation</label>
                                <p class="form-control-static"><?php echo $row["compensation"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>missionid</label>
                                <p class="form-control-static"><?php echo $row["missionid"]; ?></p>
                            </div>
                            <p><a href="../index.php" class="btn btn-primary">Back</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>