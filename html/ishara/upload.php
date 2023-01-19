<?php

	$email = $_POST['d_email'];
	$username = $_POST['username'];
	$Pnumber = $_POST['Pnumber'];
	$area = $_POST['area'];
	$note =$_POST['note'];
	$filename = $_POST['filename'];			
//databas connection
if($email>0 AND $username >0 AND $Pnumber >0 AND $area  >0 AND  $filename)
{
 require("conn.php");
		$stmt = $conn->prepare("insert into lab_upload(email, username, phone_number, L_location, sp_note,file)
		values(?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$email, $username, $Pnumber, $area,$note,$filename);
		$stmt->execute();
		echo "Successfully submitted";
		header("Location:../index.php");
		
		$stmt->close();
		$conn->close();
	
}

else{
	header("Location:labtest .php");
}
?>