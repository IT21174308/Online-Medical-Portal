<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['d_name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);
	$doctor_type = validate($_POST['doctor_type']);
	$location = validate($_POST['location']);
	$gender = validate($_POST['gender']);
	$price_per_appointment = validate($_POST['price_per_appointment']);
	$description = validate($_POST['description']);

	$re_pass = validate($_POST['re_password']);
	$d_name = validate($_POST['d_name']);

	$data = 'uname='. $uname. '&d_name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$data");
	    exit();
	}

	else if(empty($d_name)){
        header("Location: signup.php?error=Nameis required&$data");
	    exit();
	}

	else if(empty($doctor_type)){
        header("Location: signup.php?error=doctor_typeis required&$data");
	    exit();
	}

	else if(empty($location)){
        header("Location: signup.php?error=locationis required&$data");
	    exit();
	}

	else if(empty($gender)){
        header("Location: signup.php?error=genderis required&$data");
	    exit();
	}

	else if(empty($price_per_appointment)){
        header("Location: signup.php?error=price_per_appointmentis required&$data");
	    exit();
	}

	else if(empty($description)){
        header("Location: signup.php?error=descriptionis required&$data");
	    exit();
	}

	else if(empty($email)){
        header("Location: signup.php?error=email is required&$data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM doctor WHERE username ='$uname' AND password =  '$pass' AND  email = '$email' ";
		$sqlemail = "SELECT * FROM doctor WHERE email = '$email' ";
		$result = mysqli_query($conn, $sql);
		$resultemail = mysqli_query($conn, $sqlemail);

		if ((mysqli_num_rows($result) > 0) || (mysqli_num_rows($resultemail) > 0)) {
			header("Location: signup.php?error=The username or email is taken try another&$data");
	        exit();
		}else {
           $sql2 = "INSERT INTO doctor(d_name,doctor_type,location,gender,price_per_appointment,description,email,password,username,role) 
		   VALUES( '$d_name', '$doctor_type' , '$location' , '$gender' , '$price_per_appointment' , '$description' , '$email' ,'$pass','$uname', 'doctor')";
           $result2 = mysqli_query($conn, $sql2);

           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
				header("Location: login.php");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: docter_signup.php");
	exit();
}