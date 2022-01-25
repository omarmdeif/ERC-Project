<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
       
        interface donate
        {
             public function donatecash();
        }
        class guest
        {
                
        }
        class donateadapter implements donate
        {
             
            
            public function __construct()
            {
                 $temp = new guest();
            }

            public function donatecash() {
                
                $temp2 = new guest();
            }

        }
        class donors implements donate
        {
            public function donatecash() {
             print("cash stock increase");   
            }

        }
         class mainn
        {
            public $res;
            public $rev;
            public function __construct(donor $ref)
            {
                $this->ref = ref;
                $ref = new donors();
                $ref->donatecash();
            }
            public static function main(donate $res)
            {
                $res->donatecash();
            }
        }
         $debugg = new donateadapter();
        $debug->donatecash();
        
        ?>
    </body>
</html>
