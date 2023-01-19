<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/oshadhi/summary.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<header class="header">
        <nav class="navbar">
            <ul>
                <li>Customer Care</li>
                <li>Doctors</li>
                <li>Payment History</li>
                <li>Favourite Doctors</li>
                <li>Offers</li>
                <li>Emergency</li>
                <li>Sign Up</li>
            </ul>
        </nav>
        <div class="logo"></div>   
</header>        
<body>
    

<?php

    $patientid="1";
   
    include("connection.php");

    $sql = "SELECT * FROM card_details   where p_id = '$patientid' ";  
    $result = $connection->query($sql);

    if($result->num_rows > 0)
    {
  ?>
    <div class="bill">
      <h2>Bill History</h2>
   <table id="customers" >
   <tr>
   <th>Patient name</th>
   <th>Date</th>
   <th>Paymnet type</th>
   <th>Payment</th>
   <th>Remove</th>

   </tr>
   <br><br>
   <?php

    while($row = $result->fetch_assoc())
    {
     ?>
       
       <tr>   
       <td><?=$row['p_name'] ?></td>
       <td><?=$row['date'] ?></td>
       <td><?=$row['type'] ?></td>
       <td><?=$row['price'] ?></td>


       <td><a href="delhistory.php?payment_id=<?=$row['payment_id'];?>"> Remove</a></td>
        </tr>
    <?php
    } ?>  
    </table>
</div>
    <?php
    }
    
?>
  <script src="../../js/oshadhi/summary.js"></script>
     <!-- fotter -->
     <footer>
        <div class="column" id="c1">
            <span>Awards</span>
            <div class="awards">
                <div class="aws a1"></div>
                <div class="aws a2"></div>
            </div>
        </div>
        <div class="column" id="c2">
            <span>Address</span>
            <div class="map">
                <p>No 02, <br> Galle Road, <br> Colombo 03</p>   
            </div>
        </div>
        <div class="column" id="c3">
            <span>Follow Us On</span>
            <div class="icons">
                
                    <a href="https://www.facebook.com/checkpoint/828281030927956/?next=https%3A%2F%2Fwww.facebook.com%2F">
                        <i class="fa-brands fa-facebook-square"></i>
                    </a>
                    <a href="https://www.google.com/webhp?hl=en&sa=X&ved=0ahUKEwi05-eH6Nz3AhVfIbcAHXcVA8EQPAgI">
                        <i class="fa-brands fa-google-plus-square"></i>
                    </a>
                    <a href="https://twitter.com/">
                        <i class="fa-brands fa-twitter-square"></i>
                    </a>
                    <a href="https://www.instagram.com/?hl=en">
                        <i class="fa-brands fa-instagram-square"></i>
                    </a>  
            </div>
        </div>
</footer>
</body>
</html>