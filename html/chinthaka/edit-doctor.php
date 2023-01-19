<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

        $d_id=$_POST['submit'];
        $d_name = $_POST['adddocname'];
        $username = $_POST['adddocusername'];
        $gender = $_POST['adddocgender'];
        $location = $_POST['adddocloacation'];
        $email = $_POST['adddocemail'];
        $price_per_appointment = $_POST['adddocprice'];
        $doctor_type = $_POST['doctor_type'];
        $description = $_POST['adddocdescription'];


              require("../../php/chinthaka/connection.php");
                $sql = "UPDATE doctor SET username='$username', email='$email', d_name='$d_name', doctor_type='$doctor_type', location='$location', gender='$gender', price_per_appointment='$price_per_appointment', description='$description' WHERE d_id='$d_id'";
        
                if ($connection->query($sql) === TRUE) {
                echo "Record updated successfully";
                    header("Location: admin-doctor.php");
                
                } else {
                echo "Error editing details: " . $connection->error;
                }
            
        $connection->close();
?>
