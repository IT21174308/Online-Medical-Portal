<?php  

if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    
    $sql = "SELECT * FROM admin ORDER BY email ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: login.php");
} 