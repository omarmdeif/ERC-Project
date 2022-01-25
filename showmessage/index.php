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
        include_once 'Database.php';
         $db = new Database();
        $link = $db->connectToDB();
$sql  = "SELECT messages.messagetemp FROM messageuser LEFT JOIN messages ON messageuser.messageid = messages.id WHERE messageuser.userid =1";  
    $res = mysqli_query($link, $sql);
    if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_array($res)){
            echo $row['messagetemp'] ;
            echo "<br>"; 
        }
    }
  // put your code here
        ?>
    </body>
</html>
