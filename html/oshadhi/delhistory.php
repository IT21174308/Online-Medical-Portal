<?php
$payment_id=$_GET['payment_id'];
echo $payment_id;
require("connection.php");

$sql="DELETE FROM card_details WHERE payment_id='$payment_id'";
$connection->query($sql);
if( $connection->query($sql)){
    echo"deleted";
    header("Location:history.php");
}

else{
    echo"error";

}
?>