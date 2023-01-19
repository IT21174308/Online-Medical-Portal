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
  
    $sql = "SELECT * FROM doctor WHERE username='$username' "; 
    $query_run = mysqli_query($conn,$sql);
    ?>
    
    <?php
        while ($rows = mysqli_fetch_assoc($query_run)) {?>
        
       <div class="container"> 
       <div class="user-details">
       <div class="input-box">
    <!-- <span class="details">doctor Profile</span> -->
            </div>
       
            <div class="input-box">
    <h2 class="details">Name</h2>
    <input type="text" name="d_name" placeholder="d_name" readonly="readonly" value="<?=$rows['d_name']?>" readonly ><br>
            </div>

            <div class="input-box">
    <h2 class="details">Username</h2>
    <input type="text" username="username" placeholder="username" readonly="readonly" value="<?=$rows['username']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Email</h2>
    <input type="text" email="email" placeholder="email" readonly="readonly" value="<?=$rows['email']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Doctor TYPE</h2>
    <input type="text" doctor_type="doctor_type" placeholder="doctor_type" readonly="readonly" value="<?=$rows['doctor_type']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Location</h2>
    <input type="text" location="location" placeholder="location" readonly="readonly" value="<?=$rows['location']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Gender</h2>
    <input type="text" gender="gender" placeholder="gender" readonly="readonly" value="<?=$rows['gender']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Price Per appointment</h2>
    <input type="text" 	price_per_appointment="	price_per_appointment" placeholder="price_per_appointment" readonly="readonly" value="<?=$rows['price_per_appointment']?>"><br>
            </div>

            <div class="input-box">
    <h2 class="details">Description</h2>
    <input type="text"description="description" placeholder="description" readonly="readonly" value="<?=$rows['description']?>"><br>
            </div>

        </div>
        </div>
       
        <?php }?>
        </tbody>

				</table>

    <?php }?>

</body>
</html>