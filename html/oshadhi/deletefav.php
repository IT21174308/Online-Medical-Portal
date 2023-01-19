<?php session_start(); ?>
<?php
   $fid=$_GET['f_id'];
   require("connection.php");
   echo $fid;
   
    $sql="DELETE FROM favourite WHERE f_id='$fid'";
    $connection->query($sql);
    if($connection->query($sql)){
        echo"deleted";
        header("Location:fav.php");

    }

    else
    {
        echo "error";
        header("Location:fav.php");
    }

?>