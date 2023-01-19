<?php 

function my($Patient_ID,$Doctor_ID)         
{
     require("conn.php");
     $sql = "SELECT * FROM favourite WHERE p_id ='$Patient_ID' AND d_id ='$Doctor_ID'";         
     $result = $conn->query($sql);
     if($result->num_rows > 0)
         {
           echo "Added";
        } 
        else
     {
      echo "ADD Favourite";          
      $stmt = $conn->prepare("insert into favourite(p_id,d_id)
      values(?,?)");
      $stmt->bind_param("ii",$Patient_ID,$Doctor_ID);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      }  
    }
?>