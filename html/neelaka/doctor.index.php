<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/neelaka/style_home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 04.css">
    <script src="../../js/neelaka/app.js"></script>
</head>
<body>
<header>
        <nav class="navbar">
            <ul>
                <li>Customer Care</li>
                <li><a href="../ishara/search.php"> Doctors </a></li>
                <li><a href="../ishara/labtest .php">Lab Upload</a> </li>
                <li>Facilities</li>
                <li>Emergency</li>
                <!-- <li>Sign Up</li> -->
<div class="dropdown-item">
<div class="imgBox" onclick="myFunction()">
    <img src="../../images/pr.jpg" alt="Pure Coding" width="40px">
</div>
<div class="dropdown-content">
    <div class="content">
        <div class="name"><?=$_SESSION['name']?></div>
    </div>
    <ul class="links">
        <li><a href="#"><img class="img" src="../../images/pr.jpg"><a href="doctor_profile.php">Profile</a></li>
        <div class="divider"></div>
        <!-- <li><a href="#"><img class="img" src="images/edit.png"><a href="update.php">Edit Profile</a></li>
        <div class="divider"></div>
        <li><a href="#"><img class="img" src="images/helpe.png"><a href="#">Help</a></li>
        <div class="divider"></div> -->
        <li><a href="#"><img class="img" src="../../images/logout.png"><a href="logout.php"> Logout</a></li>
    </ul>
</div>
</div>

<script>
function myFunction() {
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('dropdown-toggle');
}
</script>
            </ul>
        </nav>
        <div class="logo"></div>   
</header>
<div class = "imagebar">
    <div class="slider-track">
        <div class="slide-item fade">
            <img class="image-1" src="../../images/slide-1.jpg" width="1080px">
        </div>
        <div class="slide-item fade">
            <img class="image-2" src="../../images/slide-2.jpg">
        </div>
        <div class="slide-item fade">
            <img class="image-3" src="../../images/slide-3.jpg">
        </div>
        <div class="slide-item fade">
            <img class="image-4" src="../../images/slide-4.jpg">
        </div>
        <div class="slide-item fade">
            <img class="image-5" src="../../images/slide-5.jpg">
        </div>
    </div>
</div>

    <div class="pavbar" id="pbar">
        <div class="btn-bars"><a href= #pbar >About us</a></div>
        <div class="btn-bars">Our Centers</div>
        <div class="btn-bars">our services</div>
        <div class="btn-bars">Medical Packages</div>
        <div class="btn-bars">Media Information</div>
        <div class="emergency">Emergency</div>
    </div>
    <div class="about-us">
        <div class="pic" id = "bp1"></div>
        <div class="text">
            <p>
                We’re not your typical healthcare provider we’re here to give the care and coverage you need to thrive. We are operating since 1993 under the new management while adding enormous value to the Healthcare service of Sri Lanka. Appolo Hospital not only provides specialized medical services but also has a staff that understands its patients’ varied needs thus providing them and their families a personalized service in a truly comfortable environment.

                We partner with Lanka Hospital Diagnostics services (LHD) so you have the accurate
            </p>
            <div id="btn-about"class="btn-about">About Us</div>
        </div>
    </div>
    <hr>
    <div class="about-us">
        <div class="text">
            <p>
                Providing an exceptional care like no other.
                Appolo Hospital stands apart from others by its unique ability to offer a quality healthcare service which is efficient and effective. We are a fastest growing hospital in the country and we remain committed to delivering exceptional care and creating a legacy that will improve healthcare service in Sri Lanka. We’ve earned our reputation for excellence by providing more than 25 years of kind, attentive, and respectful healthcare services to our patients
            </p>
            <div id="btn-about"class="btn-about">Service</div>
        </div>
        <div class="pic" id = "bp2"></div>
    </div>
    <hr>
    <div class="about-us">
        <div class="pic" id = "bp3">
            
        </div>
        <div class="text">
            <p>
                Let us know what is important to you so we can help you meet your requirements efficiently and effectively. Our contact portal is an easy and convenient way to get in touch with your healthcare providers.
            </p>
            <div id="btn-about"class="btn-about">Contact Us</div>
        </div>
    </div>
    
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
