<?php session_start(); ?>
<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

   // $errors = array();
   // $username = '';
  //  $email = '';
//$password = '';

    if (isset($_POST['submit'])) {
        
        $d_name = $_POST['adddocname'];
        $username = $_POST['adddocusername'];
        $gender = $_POST['adddocgender'];
        $location = $_POST['adddocloacation'];
        $email = $_POST['adddocemail'];
        $price_per_appointment = $_POST['adddocprice'];
        $doctor_type = $_POST['adddocrole'];
        $description = $_POST['adddocdescription'];
        $password = $_POST['adddocpsw'];
        $hashed_password = sha1($password);

        $query = "INSERT INTO doctor ( ";
        $query .= "d_name, username, gender, location, email, price_per_appointment, doctor_type, description, password";
        $query .= ") VALUES (";
        $query .= "'$d_name', '$username', '$gender', '$location', '$email', '$price_per_appointment', '$doctor_type', '$description', '$hashed_password'";
        $query .= ")"; 
        
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            header ('Location: admin-doctor.php?doctor_added=true');
        }else{
            $errors[] = 'Failed to add the record. ';
        }

}
?>               
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new Doctor</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>   
<body>
    <span><a href="admin-doctor.php" class="backbtn">Back</a></span><h1>Add New Doctor</h1>


        <form action="adddoctor.php" method="post" class="adddocform">

                <p>
                    <label for="" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="adddocname" id="adddocname" required>
                </p>

                <p>
                    <label for=""><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="adddocusername" id="adddocusername" required>
                </p>   

                <p>
                    <label for=""><b>Select Gender<b></label>
                    <select id="gen" name="adddocgender">
                    
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                </p>


                <br><br><label for="area"><b>Location</b></label>
                    <select class="input" id="adddocloacation" name="adddocloacation">
                        <option value="Colombo">Colombo</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Matale">Matale</option>
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



                <p><br><br>
                    <label for=""><b>Price</b></label>
                    <input type="text" placeholder="Enter Price" name="adddocprice" id="adddocprice" required>
                </p>   

                <p><br>
                    <label for=""><b>Doctor Type<b></label>
                    <select id="dotype" name="adddocrole">
                    
                    <option value="Doctor">Doctor</option>
                    <option value="Specialised VP">Specialised VP</option>
                </select>
                </p>   

                <p><br>
                <br><label for=""><b>Description</b></label>
                    <input type="text" placeholder="Type something..." name="adddocdescription" id="adddocdescription" required>
                </p>    

                <p>    
                    <label for=""><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="adddocemail" id="adddocemail" required>
                </p>    

                <p>
                    <br><label for="">Password</label>
                    <input type="password" placeholder="Enter Password" name="adddocpsw" id="adddocpsw" required>
                </p>

                <p>
                    <label for="">&nbsp;</label>
                    <button type="submit" name="submit" class="submit">Submit</button>

                </p>
                              <!--  
                                          <p>
                    <label for=""><b>Doctor Type</b></label>
                    <input type="text" placeholder="Doctor Type" name="adddoctype" id="adddoctype" required>

                </p>    

                              <a href="admin-doctor.php" class="addoccancelbtn" id="addoccancelbtn" >Cancel</a>-->
        </form>

</body>
</html>