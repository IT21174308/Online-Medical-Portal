<!DOCTYPE html>
<html>
<head>
	<title>DOCTER SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 03.css">
</head>
<body>
     
  <div class="container">
  
     <form action="docter_signup_check.php" method="post">
     	<div class="title">DOCTER SIGN UP</div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="user-details">

          <div class="input-box">
          <span class="details">name</span>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="d_name" placeholder="d_name" value="<?php echo $_GET['d_name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="d_name" placeholder="d_name"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">doctor_type</span>
          <?php if (isset($_GET['doctor_type'])) { ?>
               <input type="text" name="doctor_type" placeholder="doctor_type" value="<?php echo $_GET['doctor_type']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="doctor_type" placeholder="doctor_type"><br>
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
          <span class="details">location</span>
          <?php if (isset($_GET['location'])) { ?>
               <input type="location" name="location" placeholder="location" value="<?php echo $_GET['location']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="location" placeholder="location"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">gender</span>
          <?php if (isset($_GET['gender'])) { ?>
               <input type="location" name="gender" placeholder="gender" value="<?php echo $_GET['gender']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="gender" placeholder="gender"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">price_per_appointment</span>
          <?php if (isset($_GET['price_per_appointment'])) { ?>
               <input type="price_per_appointment" name="price_per_appointment" placeholder="price_per_appointment" value="<?php echo $_GET['price_per_appointment']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="price_per_appointment" placeholder="price_per_appointment"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">description</span>
          <?php if (isset($_GET['description'])) { ?>
               <input type="description" name="description" placeholder="description" value="<?php echo $_GET['description']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="description" placeholder="description"><br>
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