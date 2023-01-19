<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['a_name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);

	$re_pass = validate($_POST['re_password']);
	$a_name = validate($_POST['a_name']);

	$data = 'uname='. $uname. '&a_name='. $a_name;


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

	else if(empty($a_name)){
        header("Location: signup.php?error=Name is required&$data");
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

	    $sql = "SELECT * FROM admin WHERE username ='$uname' AND password =  '$pass' AND  email = '$email' ";
		$sqlemail = "SELECT * FROM admin WHERE email = '$email' ";
		$result = mysqli_query($conn, $sql);
		$resultemail = mysqli_query($conn, $sqlemail);

		if ((mysqli_num_rows($result) > 0) || (mysqli_num_rows($resultemail) > 0)) {
			header("Location: signup.php?error=The username or email is taken try another&$data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admin(a_name,email,password,username,role) VALUES( '$a_name', '$email' ,'$pass','$uname', 'admin')";
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
	header("Location: admin_signup.php");
	exit();
}