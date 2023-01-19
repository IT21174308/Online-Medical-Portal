<?php session_start(); ?>
<?php
   $id=$_GET['p_id'];
   require("../../php/chinthaka/connection.php");
   echo $id;
   
    $sql="DELETE FROM users WHERE p_id='$id'";
    $connection->query($sql);
    if($connection->query($sql)){
        echo"deleted";
        header("Location:admin-patient.php");

    }

    else
    {
        echo "error";
        header("Location:admin-patient.php");
    }

?>