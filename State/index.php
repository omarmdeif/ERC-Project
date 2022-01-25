
        <?php
        $executing;
        include_once 'TypeA.php';
        include_once 'TypeAB.php';
        include_once 'TypeB.php';
        include_once 'TypeO.php';
        include_once 'StateInterface.php';
        include_once 'Executor.php'; 
        include_once 'StateContext.php';       
        $executing = new StateContext();
        $check = $executing->setState("TypeA");

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
                            <h2 >Donate Blood</h2>
                        </div>
                        <p>Please fill this form to apply for our blood donation programme.</p>
                        <form action="CreateController.php" method="post">
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                              <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                                 <form action="/action_page.php">
                                 <p>Please select your favorite Web language:</p>
                                 <input type="radio" id="Type_A" name="bloodtype" value="TYPEA">
                                 <label for="typea">TypeA</label><br>
                                 <input type="radio" id="Type_B" name="bloodtype" value="TYPEB">
                                 <label for="typeb">TypeB</label><br>
                                 <input type="radio" id="Type_AB" name="bloodtype" value="TYPEAB">
                               <label for="typeab">TypeAB</label><br>
                                 <input type="radio" id="Type_O" name="bloodtype" value="TYPEO">
                                 <label for="typeo">TypeO</label>

                                   <br>  

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
        
   
