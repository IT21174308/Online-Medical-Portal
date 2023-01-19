<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
      <div class="#" >
		  
      	<?php if ($_SESSION['role'] == 'admin') {?>

			<?php include('../chinthaka/admin-dashboard.php') ?>
      		<!-- For Admin -->
      		<!-- <div class="card" style="width: 18rem;">
			  <img src="img/admin-default.png" class="#"  alt="admin image">

			  <div class="#">
			    <h5 class="#">
			    	<?=$_SESSION['name']?>
			    </h5> -->
			    <a href="logout.php" class="#">Logout</a>
				<a href="update.php" class="btn btn-dark">Update</a>
			
			  </div>
			</div>

			</div>
      	<?php }elseif ($_SESSION['role'] == 'doctor') { ?>
		
			<?php include('doctor.index.php') ?>
	

			
      		<!-- FOR USERS -->
			  
      		<!-- <div class="#" >
			  <img src="img/user-default.png"    class="#" alt="user image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
				
			
				
			  </div>
			</div> -->
      	<?php }else { ?>
			<?php include('user_index.php') ?>	

		  <div class="#" >
			  <img src="img/user-default.png"    class="#" alt="user image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			
				
			  </div>
			</div>
			<?php }?>
      </div>
</body>
</html>
<?php }else{
	header("Location: login.php");
} ?>