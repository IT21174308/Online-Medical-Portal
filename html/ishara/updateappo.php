<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/ishara/style.css">
    <script src="../../js/ishara/script.js"></script>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <nav class="navbar">
        <ul>
               <li>Customer Care</li>
                <li><a href="search.php"> Doctors </a></li>
                <li><a href="../oshadhi/history.php">Payment History</a> </li>
                <li><a href="../oshadhi/fav.php">Favourite Doctors</a> </li>
                <li><a href="labtest .php">Lab Upload</a> </li>
                <li>Emergency</li>
                <li><a href="../neelaka/login.php">Sign Up</a></li>
            </ul>
        </nav>
        <div class="logo"></div>   
    </header>
<div class="">    
<?php
    $a_id=$_GET['a_id'];
    include("conn.php");

    $sql = "SELECT * FROM appointment   where a_id = ' $a_id'";  
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {
     ?>
     <div class="appodiv"> 
         <h1>Update Table</h1> 
        <form method="post" action="updatephp.php">

                <label for="name">Name*</label>
                <input  class="input" type="text" id="name" name="name" placeholder="<?=$row['appointment_name'] ?>">

                <label for="Pnumber">Phone Number*</label>
                <input  class="input" type="text" id="Pnumber" name="Pnumber" placeholder="<?=$row['phone_number'] ?>">

                <label for="Session">Session</label>
                <select class="input" id="Session" name="Session" placeholder="<?=$row['session'] ?>">
                        <option value=""></option>
                        <option value="Morning">Morning</option>
                        <option value="Evening">Evening</option>								
                </select>

                <label for="Bokking_day">Bokking day:</label>
                <input class="input" type="date" id="Bokk" name="book_apoienment" placeholder="<?=$row['date'] ?>">

                <br><br><br>

                <button class="button" name="updateappo" default value ="<?=$row['a_id'];?>">Update</button>
        </form>
        </div>

    <?php
    }   
    }
    
?>

    </body>

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

</html>


