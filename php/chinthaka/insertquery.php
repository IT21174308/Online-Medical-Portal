<?php require_once('connection.php'); ?>
<?php

    /*
        INSERT INTO table_name (
            column1, column2, etc
        ) VALUES (
            value1, value2, etc
        )
    */
        $username = 'chinthaka12';
        $email = 'admin123@gmail.com';
        $password = '12345';
        $a_name = 'chinthaka';
        $role = 'admin';

        $hashed_password = sha1($password);
       
       $query = "INSERT INTO ADMIN (username, email, password, a_name, role)
                VALUES ('chinthaka12', 'admin123@gmail.com', '12345', 'chinthaka', 'admin')";

        $result = mysqli_query($connection, $query);
        
        if ($result) {
            echo "1 Record added";
        }else{
            echo "Database query failed.";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>insert Query</title>
</head>
<body>


</body>
</html>
<?php mysqli_close($connection); ?>