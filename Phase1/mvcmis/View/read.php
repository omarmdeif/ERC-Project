
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
                                <label>Date</label>
                                <p class="form-control-static"><?php echo $row["date"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <p class="form-control-static"><?php echo $row["address"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Participants</label>
                                <p class="form-control-static"><?php 
                                define('DB_SERVER', 'localhost');
                                define('DB_USERNAME', 'root');
                                define('DB_PASSWORD', '');
                                define('DB_NAME', 'oop');
                                 
                                $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                    $sql = "SELECT id, name from volunteers where missionid = " .$row["id"]. "";
                                    $result = $link->query($sql);
                                    
                                   
                                      while($row = $result->fetch_assoc()) {
                                        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
                                      }
                                    
                                ?></p>
                            </div>
                            <p><a href="../index.php" class="btn btn-danger">Back</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>