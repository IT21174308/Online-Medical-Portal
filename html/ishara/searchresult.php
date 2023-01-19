
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
    <header class="header">
        <nav class="navbar" >
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
    <?php
            $Doctortype = $_POST['Doctortype'];
            $Search = $_POST['doctor_name'];
            $district = $_POST['district'];
            $gender = $_POST['Gender'];


            require("conn.php");

                    if ($Search < 1 AND $Doctortype < 1 AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor ";
                    }

                    elseif($Search > 0 AND $Doctortype < 1 AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' ";
                    }






                    elseif($Search > 0 AND $Doctortype < 1 AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where doctor_type like '$Doctortype' ";
                    }







                    
                    elseif($Search > 0 AND $Doctortype < 1 AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' ";
                    }

                    elseif($Search < 1 AND $Doctortype >0 AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where doctor_type like '%$Doctortype%' ";
                    }

                    elseif($Search < 1 AND $Doctortype <1 AND $district >0 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where location like '$district' ";
                    }

                    elseif($Search < 1 AND $Doctortype <1 AND $district <1 AND $gender > 0 )
                    {
                        $sql = "SELECT * FROM doctor where gender like '$gender' ";
                    }

                    elseif($Search > 0 AND $Doctortype >0  AND $district < 1 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND doctor_type like '%$Doctortype%' ";
                    }

                    elseif($Search > 0 AND $Doctortype <1  AND $district >0 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND location like '$district' ";
                    }

                    elseif($Search > 0 AND $Doctortype <1  AND $district < 1 AND $gender > 0 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND gender like '$gender' ";
                    }

                     elseif($Search < 1 AND $Doctortype >0  AND $district >0 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where  location like '$district' AND doctor_type like '%$Doctortype%' ";
                    }

                    elseif($Search < 1 AND $Doctortype >0  AND $district < 1 AND $gender > 0 )
                    {
                        $sql = "SELECT * FROM doctor where  gender like '$gender' AND doctor_type like '%$Doctortype%' ";
                    }


                    elseif($Search < 1 AND $Doctortype < 1  AND $district >0 AND $gender >0 )
                    {
                        $sql = "SELECT * FROM doctor where  location like '$district' AND  gender like '$gender' ";
                    }

                     elseif($Search > 0 AND $Doctortype >0  AND $district >0 AND $gender < 1 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND doctor_type like '%$Doctortype%' AND location like '$district' ";
                    }

                    elseif($Search > 0 AND $Doctortype >0  AND $district < 1 AND $gender  >0 )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND doctor_type like '%$Doctortype%' AND gender like '$gender' ";
                    }

                    elseif($Search > 0 AND $Doctortype < 1  AND $district >0 AND $gender >0  )
                    {
                        $sql = "SELECT * FROM doctor where d_name like '$Search' AND gender like '$gender' AND location like '$district' ";
                    }

                     elseif($Search <1 AND $Doctortype >0  AND $district >0 AND $gender >0 )
                    {
                        $sql = "SELECT * FROM doctor where gender like '$gender' AND doctor_type like '%$Doctortype%' AND location like '$district' ";
                    }

                    else
                    {
                            $sql = "SELECT * FROM doctor   where d_name like '$Search' AND doctor_type like '%$Doctortype%' AND location like '$district' AND gender like '$gender' "; 
                    }
                        
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {

            ?> 
            
            
            <body>
                <div class= "doctordiv">
                                    <div class="gallery">
                                                <form action="booknow.php" method="post">
                                                    <button  name="Bookname" default value ="<?=$row['d_id'];?>"> 
                                                    <?php
                                                    $my=$row['gender'];
                                                    if( $my=="Male"){
                                                        ?>
                                                        <img src="../../images/ishara/DR-avatar.png" alt="Cinque Terre" width="600" height="400">
                                                        <?php      
                                                    }
                                                    else {
                                                        ?>
                                                        <img src="../../images/ishara/doctorgirl.png" alt="Cinque Terre" width="600" height="400">
                                                        <?php
                                                    }
                                                        ?>
                                                        </button>
                                                </form>
                                            <div class="detils">
                                                <h2><?=$row['d_name'];?></h2>
                                                <p class="title"><?=$row['doctor_type'];?></p>
                                                <p><?=$row['description'];?></p>
                                                <p><?=$row['email'];?></p>
                                                <form method="post"  action="booknow.php">
                                                    <p><button class="button" name="Bookname" default value ="<?=$row['d_id'];?>">Book Now</button>
                                                    </p><p>                                                                                  
                                                </form>
                                            </div>
                                    </div>
                </div>
            <?php
                }
                        }
                        else {
                            echo 'empty table';
                            }
                           
            ?>

            
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