<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 03.css">
</head>
<body>
     
  <div class="container">
  
     <form action="signup-check.php" method="post">
     <div class="title">PATIENT SIGN UP</div>
     	<!-- <h1>SIGN UP</h1> -->
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
               <input type="text" name="p_name" placeholder="p_name" value="<?php echo $_GET['p_name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="p_name" placeholder="p_name"><br>
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
          <span class="details">phone_number	</span>
          <?php if (isset($_GET['phone_number'])) { ?>
               <input type="text" name="phone_number" placeholder="phone_number" value="<?php echo $_GET['phone_number']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="phone_number" placeholder="phone_number"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">location</span>
          <?php if (isset($_GET['phone_number'])) { ?>
               <input type="text" name="location" placeholder="location" value="<?php echo $_GET['location']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="location" placeholder="location"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <span class="details">special_note</span>
          <?php if (isset($_GET['special_note'])) { ?>
               <input type="text" name="special_note" placeholder="special_note" value="<?php echo $_GET['special_note']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="special_note" placeholder="special_note"><br>
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