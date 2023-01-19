<?php

    $a_id=$_POST['updateappo'];
	$name = $_POST['name'];
	$Pnumber = $_POST['Pnumber'];
	$Session = $_POST['Session'];
	$book_apoienment =$_POST['book_apoienment'];
    		
      require("conn.php");
        $sql = "UPDATE appointment SET appointment_name='$name',phone_number	='$Pnumber', session='$Session',date='$book_apoienment'WHERE a_id='$a_id'";

        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
            header("Location:../index.php");

        } else {
        echo "Error updating record: " . $conn->error;
        }

$conn->close();
?>
