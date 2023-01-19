<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

        $p_id = $_POST['submitp'];
        $p_name = $_POST['addpatname'];
        $username = $_POST['addpatusername'];
        $location = $_POST['addpatloacation'];
        $email = $_POST['addpatemail'];
        $phone_number = $_POST['addpatvoice'];
        $special_note = $_POST['addpatdescription'];

        require("../../php/chinthaka/connection.php");
        $sql = "UPDATE users SET username='$username', email='$email', p_name='$p_name', location='$location', special_note='$special_note', phone_number='$phone_number' WHERE p_id='$p_id'";

        if ($connection->query($sql) === TRUE) {
        echo "Record updated successfully";
            header("Location: admin-patient.php");
        
        } else {
        echo "Error editing details: " . $connection->error;
        }
    
$connection->close();
?>
