<?php
  include('db_conn.php');
  session_start();
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
  <title>
    profile
  </title>
  <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 04.css">

<body>
   <?php include('header.php') ?>
  
</div>
  <?php

  if(empty($username))
  {

  }
  else
  { 
  
    $sql = "SELECT * FROM users WHERE username='$username' "; 
    $query_run = mysqli_query($conn,$sql);
    ?>
    
    <?php
        while ($rows = mysqli_fetch_assoc($query_run)) {?>
        
       <div class="container"> 
       <div class="user-details">

    <div class="input-box">
    <!-- <span class="details">Profile</span> -->
            </div>

         <!-- <h1>Profile</h1> -->

       <!-- <h2> name </h2>  -->
       <div class="input-box">
    <h1 class="details">Name</h1>
    <input type="text" name="p_name" placeholder="p_name" value="<?=$rows['p_name']?>"><br>
            </div>
     
            <div class="input-box">
    <h1 class="details">Username</h1>
    <input type="text" username="username" placeholder="username" value="<?=$rows['username']?>"><br>
            </div>

        <!-- <h2>username</h2>
          <?=$rows['username']?><br> -->

          <div class="input-box">
    <h1 class="details">Email</h1>
    <input type="text" email="email" placeholder="email" value="<?=$rows['email']?>"><br>
            </div>

        <!-- <h2>email</h2> 
        <?=$rows['email']?><br> -->

        <div class="input-box">
    <h1 class="details">Phone Number</h1>
    <input type="text" phone_number="phone_number" placeholder="phone_number" value="<?=$rows['phone_number']?>"><br>
            </div>

        <!-- <h2>phone </h2>
         <?=$rows['phone_number']?><br> -->

         <div class="input-box">
    <h1 class="details">location</h1>
    <input type="text" location="location" placeholder="location" value="<?=$rows['location']?>"><br>
            </div>
<!-- 
        <h2>address </h2> 
         <?=$rows['location']?><br>
         -->
        
        </div>
       
        <?php }?>
        </tbody>

				</table>

    <?php }?>
        </div>
        </div>
</body>
</html>