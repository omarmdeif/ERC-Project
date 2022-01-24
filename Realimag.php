<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Realimag
 *
 * @author Mohamed Alaa
 */
include_once 'img.php';
class Realimag implements img {
    //put your code here
    public $result;
    function __construct() {
        $this->loaadfromdatabase();
        ;
    }
    function loaadfromdatabase ()
    {
        require_once 'Database.php';
        echo 'loded from database';
        $this->result = $db->query("SELECT image FROM images where id = 1 ORDER BY id DESC"); 
        

    }
    public function show() {
        
        if($this->result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $this->result->fetch_assoc()){ ?> 
            echo 'in show';
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php }
    }

}
