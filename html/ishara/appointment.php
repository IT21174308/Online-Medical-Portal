<?php session_start() ?>
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
 </head>

<?php

    $Bookname = $_SESSION["docid"];
    
	$Patient_ID = $_SESSION["pid"];
	$name = $_POST['name'];
	$Pnumber = $_POST['Pnumber'];
	$Session = $_POST['Session'];
	$book_apoienment =$_POST['book_apoienment'];
    		
      require("conn.php");
        if( $Bookname > 0 AND $Patient_ID > 0 AND $name > 0 AND $Pnumber > 0 AND $Session  > 0 AND $Session > 0 AND $book_apoienment > 0)
        {   $stmt = $conn->prepare("insert into appointment(d_id,p_id,appointment_name,phone_number,session,date)
            values(?,?,?,?,?,?)");
            $stmt->bind_param("iissss",$Bookname,$Patient_ID, $name, $Pnumber, $Session,$book_apoienment);
            $stmt->execute();
            
            $stmt->close();
            $conn->close();

            header("Location:../index.php");
        } 
        else 
           {
             
           }   	
?>


    <!-- fotter -->
  
    </body>
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