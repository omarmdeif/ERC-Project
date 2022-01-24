<?php

include_once('iAid.php');
class MoneyAid implements iAid{
    public function RequestAid() {
     
    }
    
    public function Display()
    {
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Create Record</title>
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
                            <h2 >Financial aid request</h2>
                        </div>
                        <p>Please fill this form to apply for our financial aid programme.</p>
                        <form action="CreateController.php" method="post">
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group <?php echo (!empty($phoneno_err)) ? 'has-error' : ''; ?>">
                                <label>Phone number</label>
                                <input type= "number" name="PhoneNumber" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                                   <div class="form-group <?php echo (!empty($phoneno_err)) ? 'has-error' : ''; ?>">
                                <label>Income</label>
                                         <input type= "number" name="Income" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                                <label>Address</label>
                                <textarea name="address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                               <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                               
                           
                                <span class="help-block"></span>
                            </div>
                            
                         
                                <input type= "hidden" name="FamNumber" class="form-control" value="">
                              <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                                    <label>Description</label>
                                <textarea value="What qualifies you for this programme " name="desc" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                            <input type="submit" class="btn btn-danger" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
        <?php
        
    }
}
