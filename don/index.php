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
    <h1>Online Donation</h1>
    <form action="DonationConroller.php" method="POST" >
        <label >Name on Card:</label><br>
        <input type="text"  name="CardName"><br>

        <label >Card Number:</label><br>
        <input type="number"  name="CardNumber" ><br><br>

        <label >Expiry Date:</label><br>
        <input type="month" name="ExpieyData"><br><br>
        
        <label >Sec code:</label><br>
        <input type="number" name="scode"><br><br>

        <label >Amount:</label><br>
        <input type="number" name="Amount"><br><br>





        <input type="submit" value="Submit">
        
        
    </form>

    <?php
        echo 'hi';
        // put your code here
        ?>
</body>

</html>