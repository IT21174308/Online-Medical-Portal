<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="../../css/neelaka/style2.css" media="screen">
</head>
<body>
<?php include('login_header.php') ?>
      <div class="container" >
      	<form class="#" action="check-login.php" method="post" >

      	      <h1 class="#">LOGIN</h1>

      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert" role="alert" style="background-color: rgb(171, 255, 192); padding:10px; text-align: center;">
				  <?=$_GET['error']?>
			  </div>

			  <?php } ?>

		  <div class="#">
		    <label for="username" class="form-label">User name</label>
		    <input type="text" class="form-control"  name="username"  id="username">
		  </div>

		  <div class="#">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" name="password" class="form-control" id="password">
		  </div>

		  <div class="#">
		    <label class="form-label">Select User Type:</label>
		  </div>

		  <select class="#" name="role"  aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="doctor">Docter</option>
			  <option value="admin">Admin</option>
		  </select>

		  
			<div class="button">
		  <button type="submit" class="btn btn-primary">LOGIN</button>
			</div>

			<div class="link">
               <p>Don't have an account? <a href="register_page.php">Register</a></p>
            <div>
		  
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>