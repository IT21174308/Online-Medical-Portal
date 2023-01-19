<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" type="text/css" href="../../css/neelaka/style 04.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <ul>
            <li><a href="../index.php">Home</a></li>
                <li>Customer Care</li>
                <li><a href="../ishara/search.php"> Doctors </a></li>
                <li><a href="../ishara/labtest .php">Lab Upload</a> </li>
                <li>Facilities</li>
                <li>Emergency</li>
                
                <div class="prof">
                <div class="prof">
<div class="dropdown-item">
<div class="imageBox" onclick="myFunction()">
    <image src="../../images/pr.jpg" alt="Pure Coding" width="40px">
</div>
<div class="dropdown-content">
    <div class="content">
        <div class="name"><?=$_SESSION['name']?></div>
    </div>
    <ul class="links">
        <li><a href="#"><image class="img" src="../../images/pr.jpg"><a href="doctor_profile.php">Profile</a></li>
        <!-- <div class="divider"></div>
        <li><a href="#"><img class="img" src="images/edit.png"><a href="update.php">Edit Profile</a></li>
        <div class="divider"></div>
        <li><a href="#"><img class="img" src="images/helpe.png"><a href="#">Help</a></li>
        <div class="divider"></div> -->
        <li><a href="#"><image class="img" src="../../images/logout.png"><a href="logout.php"> Logout</a></li>
    </ul>
</div>
</div>

<script>
function myFunction() {
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('dropdown-toggle');
}
</script>
    </header>
            </ul>
        </nav>
        <div class="logo"></div>   
    </header>
</body>