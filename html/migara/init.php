
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'online_medical_protal';

$con= mysqli_connect('localhost', 'root', '', 'online_medical_protal');

//checking the connection
if(mysqli_connect_error()){
    die('Database connection failed ' . mysqli_connect_error());


}

?>
