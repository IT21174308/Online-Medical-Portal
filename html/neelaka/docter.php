<?php  

if (isset($_SESSION['username']) ) {
    
    $sql = "SELECT * FROM doctor ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: login.php");
} 