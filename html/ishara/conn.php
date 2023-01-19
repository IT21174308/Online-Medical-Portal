<?php
    
        $conn = new mysqli('localhost','root','','online_medical_protal');

        if($conn->connect_error)
        {
          die('Connection Faild : '.$conn->connect_error);
        }
      
?>




