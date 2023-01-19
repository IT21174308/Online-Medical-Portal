<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php

    if (isset($_POST['submit'])) {

        $errors = array();

        if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
            $errors[] = 'Username is Missing / Invalid';
        }

        if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
            $errors[] = 'password is Missing / Invalid';
        }
        if (empty($errors)) {

            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $hashed_password = sha1($password);

            $query = "SELECT * FROM admin 
                        WHERE email = '{$email}'
                        AND password = '{$hashed_password}'
                        LIMIT 10";

            $result_set = mysqli_query($connection, $query);

            if ($result_set) {
                
                if (mysqli_num_rows($result_set) == 10) {
                    
                    header('Location:users.php');

                }else {
                    $errors[] = 'Invalid username/ password';
                }
            }else {
                $errors[] = 'Database query failed';
            }
        }
    }


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In - User Management System</title>
</head>
<body>
    <div class="login">

        <form action="index.php" method="POST">

            <fieldset>
                <legend><h1>Log In</h1></legend>

                <?php
                    if (isset($errors) && !empty($errors)) {
                        echo '<p class="error">Invalid Username / password</p>'; 
                    }
                   ?>
              
                <p>
                    <label for="">Username:</label>
                    <input type="text" name="email" id="" placeholder="Email Address">
                </p>
                <p>
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="password">
                </p>
                <p>
                    <button type="submit" name="submit">Log In</button>
                </p>
            </fieldset>
        </form>
        </div><!--.login-->
</body>
</html>
<?php mysqli_close($connection); ?>