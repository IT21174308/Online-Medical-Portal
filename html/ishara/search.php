
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

<body  class="bodyimg">
    <div id="fistdiv" class="firstdiv">
        <div id="searchbtnmy" class="div2">
                <form method="post" action="doctor.php">                       
                            Doctor Name
                            <br>
                            <input  class="doctortype" type="search" name='doctor_name' placeholder="Search.." >            
                            <br><br>
                            <br>
                                <button  class="submitBtn" type="submit" value="Search">Search</button>
                </form>            
            <button id="mys" class="submitBtn" onclick="myFunction()" >Additional Search</button>    
        </div>
                    <!-- additonl page popup -->
                <div id="demo" class="addipage">

                <form method="post" action="searchresult.php">

                    Select Type
                        <br>
                        <select class="doctortype" name="Doctortype">
                            <option value="">Any</option>                    
                            <option value="Doctor">Doctor</option>
                            <option value="Specialised">Specialised Doctor</option>
                        </select>
                        <br><br>

                        Doctor Name
                        <br>
                        <input  class="doctortype" type="search" name='doctor_name' placeholder="Search.." >             
                        <br>  
                    <br>  
                        <label >Location</label>
                    <br>
                        <select class="doctortype" name="district">
                            <option value="">Any</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Kalutara">Kalutara</option>                   
                            <option value="Kandy">Kandy</option>
                            <option value="Matale">Matale</option>                 
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Galle">Galle</option>
                            <option value="Matara">Matara</option>                    
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kilinochchi">Kilinochchi</option>                   
                            <option value="Mannar">Mannar</option>
                            <option value="Vavuniya">Vavuniya</option>
                            <option value="Mullaitivu">Mullaitivu</option>                    
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Puttalam">Puttalam</option>                    
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Badulla">Badulla</option>                  
                            <option value="Moneragala">Moneragala</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Kegalle">Kegalle</option>
                        </select>
                    <br> <br>
                    
                    Gender
                    <br>
                    <select class="doctortype" name="Gender"> 
                            <option value="">Any</option>                   
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                    </select>
                    <br><br>

                                   
                    <button class="submitBtn" type="submit" value="Search">Search</button>
                    
                </form>
                    <button id="mys" class="submitBtn" onclick="myFunction()" >Additional Search Close</button>
                </div>    
            </div>
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
