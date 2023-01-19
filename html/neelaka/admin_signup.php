<!DOCTYPE html>
<html>
<head>
	<title>ADMIN SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 03.css">
    
</head>
<body>

  <div class="container">
  
     <form action="admin_signup_check.php" method="post">
     <div class="title">ADMIN SIGN UP</div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="user-details">


          <div class="input-box">
          <span class="details">name</span>
          <?php if (isset($_GET['a_name'])) { ?>
               <input type="text" name="a_name" placeholder="a_name" value="<?php echo $_GET['a_name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="a_name" placeholder="a_name"><br>
          <?php }?>
          </div>


          <div class="input-box">
          <span class="details">user name</span>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="uname" placeholder="User Name"><br>
          <?php }?>
          </div>


          
          <div class="input-box">
          <span class="details">email</span>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" placeholder="email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="email" placeholder="email"><br>
          <?php }?>
          </div>


     	<div class="input-box">
          <span class="details">password</span>
     	<input type="password"  name="password"   placeholder="Password"><br>
          </div>

           <div class="input-box">
          <span class="details">Confirm Password</span>
          <input type="password" name="re_password" placeholder="Re_Password"><br>
          </div>

          <p>Alrady a user? <a href="login.php">Log in</a></p>

          <div class="button">
     	<button type="submit">Sign Up</button>
          </div>
          
     </form>

     </div> 

     </div> 
</body>
</html>