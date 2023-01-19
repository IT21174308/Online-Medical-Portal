<?php session_start(); ?>
<?php
   $id=$_GET['a_id'];
   require("../../php/chinthaka/connection.php");
   echo $id;
   
    $sql="DELETE FROM appointment WHERE a_id='$id'";
    $connection->query($sql);
    if($connection->query($sql)){
        echo"deleted";
        header("Location:admin-appointment.php");

    }

    else
    {
        echo "error";
        header("Location:admin-appointment.php");
    }

?>