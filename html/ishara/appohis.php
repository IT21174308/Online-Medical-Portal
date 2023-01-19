

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/ishara/style.css">
    <script src="../../js/ishara/script.js"></script>
</head>
<body>



<?php

    $Bookname = $_SESSION["docid"];
    $Patient_ID=$_SESSION["pid"];
    
   
    include("conn.php");

    $sql = "SELECT * FROM appointment   where p_id = '$Patient_ID' AND d_id = '$Bookname' ";  
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
  ?>
   <table id="customers" >
   <tr>
   <th>Appointment name</th>
   <th>session</th>
   <th>date</th>
   <th>Update</th>
   <th>Remove</th>
   <th>Payment</th>
   </tr>
   <br><br>
   <?php

    while($row = $result->fetch_assoc())
    {
     ?>
       <tr>   
       <td><?=$row['appointment_name'] ?></td>
       <td><?=$row['session'] ?></td>
       <td><?=$row['date'] ?></td>
       <td><a href="updateappo.php?a_id=<?=$row['a_id'];?>"> Update</a></td>
       <td><a href="deletefav.php?a_id=<?=$row['a_id'];?>"> Remove</a></td>
       <td><a href="../migara/payment.php?a_id=<?=$row['a_id'];?>"> Pay Now</a></td>
        </tr>
    <?php
    }   
    echo"</table>";
    }
    
?>
</body>
</html>  


