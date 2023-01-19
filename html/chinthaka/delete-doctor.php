<?php session_start(); ?>
<?php
   $id=$_GET['d_id'];
   require("../../php/chinthaka/connection.php");
   echo $id;
   
    $sql="DELETE FROM doctor WHERE d_id='$id'";
    $connection->query($sql);
    if($connection->query($sql)){
        echo"deleted";
        header("Location:admin-doctor.php");

    }

    else
    {
        echo "error";
        header("Location:admin-doctor.php");
    }

?>