<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

        $a_id = $_POST['submit'];
        $appointment_name = $_POST['appointer'];
        $phone_number = $_POST['apptel'];
        $session = $_POST['appointersession'];
        $date = $_POST['appointerdate'];
            		
              require("../../php/chinthaka/connection.php");
                $sql = "UPDATE appointment SET appointment_name='$appointment_name', phone_number='$phone_number', session='$session',date='$date' WHERE a_id='$a_id'";
        
                if ($connection->query($sql) === TRUE) {
                echo "Record updated successfully";
                    header("Location: admin-appointment.php");
                
                } else {
                echo "Error editing details: " . $connection->error;
                }
            
        $connection->close();
?>

