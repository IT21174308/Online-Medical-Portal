<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['p_name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);
	$phone_number = validate($_POST['phone_number']);
	$location = validate($_POST['location']);
	$special_note = validate($_POST['special_note']);

	$re_pass = validate($_POST['re_password']);
	$p_name = validate($_POST['p_name']);

	$data = 'uname='. $uname. '&p_name='. $name;


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

	else if(empty($p_name)){
        header("Location: signup.php?error=Name is required&$data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=email is required&$data");
	    exit();
	}

	else if(empty($phone_number)){
        header("Location: signup.php?error=phone_number is required&$data");
	    exit();
	}

	else if(empty($location )){
        header("Location: signup.php?error=location is required&$data");
	    exit();
	}

	else if(empty($special_note)){
        header("Location: signup.php?error=special_note is required&$data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$data");
	    exit();
	}

	else{

		// hashing the password
        
	    $sql = "SELECT * FROM users WHERE username ='$uname' AND password =  '$pass' AND  email = '$email' ";
		$sqlemail = "SELECT * FROM users WHERE email = '$email' ";
		$result = mysqli_query($conn, $sql);
		$resultemail = mysqli_query($conn, $sqlemail);

		if ((mysqli_num_rows($result) > 0) || (mysqli_num_rows($resultemail) > 0)) {
			header("Location: signup.php?error=The username or email is taken try another&$data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(p_name,email,phone_number,location,special_note,password,username,role) VALUES( '$p_name', '$email' , '$phone_number' , '$location ' , '$special_note' , '$pass','$uname', 'user')";
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
	header("Location: signup.php");
	exit();
}