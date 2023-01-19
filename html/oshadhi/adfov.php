<?php	
    
    function delet($Patient_ID,$Doctor_ID){
        $conn = new mysqli('localhost','root','','favouritedoc');

        if($conn->connect_error)
        {
          die('Connection Faild : '.$conn->connect_error);
        }

        else{
              
			$sql = " DELETE FROM fav WHERE Patient_ID='$Patient_ID' AND Doctor_ID ='$Doctor_ID' ";
			$result = $conn->query($sql);                        
			echo"deleeted";
			
			}
    }

    ?>