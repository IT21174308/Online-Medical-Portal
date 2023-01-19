
<?php
   $a_id=$_GET['a_id'];
   
   require("conn.php");
   
    $sql="DELETE FROM appointment WHERE a_id='$a_id'";
    $conn->query($sql);
    if($conn->query($sql)){
        echo"deleted";
        header("Location:../index.php");

    }

    else
    {
        echo "error";
        header("Location:../index.php");
    }

?>