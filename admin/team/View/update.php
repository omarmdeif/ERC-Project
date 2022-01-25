<?php
include_once '../Controller/updateController.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Record</title>
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
                        <div class="page-header">
                            <h2>Update Record</h2>
                        </div>
                        <p>Please edit the input values and submit to update the record.</p>
                        <form action="../Controller/updateController.php" method="post">
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                <span class="help-block"><?php echo $name_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                <span class="help-block"><?php echo $email_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($phonenumber_err)) ? 'has-error' : ''; ?>">
                                <label>Phone Number</label>
                                <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>">
                                <span class="help-block"><?php echo $phonenumber_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($hours_err)) ? 'has-error' : ''; ?>">
                                <label>Hours</label>
                                <input type="text" name="hours" class="form-control" value="<?php echo $hours; ?>">
                                <span class="help-block"><?php echo $hours_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                                <label>Address</label>
                                <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                                <span class="help-block"><?php echo $address_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($compensation_err)) ? 'has-error' : ''; ?>">
                                <label>Compensation</label>
                                <input type="text" name="compensation" class="form-control" value="<?php echo $compensation; ?>">
                                <span class="help-block"><?php echo $compensation_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($missionid_err)) ? 'has-error' : ''; ?>">
                                <label>missionid</label>
                                <input type="text" name="missionid" class="form-control" value="<?php echo $missionid; ?>">
                                <span class="help-block"><?php echo $missionid_err; ?></span>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>