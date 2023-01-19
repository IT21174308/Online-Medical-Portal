<?php session_start(); ?>
<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

   // $errors = array();
   // $username = '';
  //  $email = '';
//$password = '';

    if (isset($_POST['submit'])) {
        
        $p_name = $_POST['addpatname'];
        $username = $_POST['addpatusername'];
        $role = $_POST['addpatrole'];
        $location = $_POST['addpatloacation'];
        $email = $_POST['addpatemail'];
        $phone_number = $_POST['addpatvoice'];
        $special_note = $_POST['addpatdescription'];
        $password = $_POST['addpatpsw'];
        $hashed_password = sha1($password);

        $query = "INSERT INTO users ( ";
        $query .= "p_name, username, role, location, email, phone_number, special_note, password";
        $query .= ") VALUES (";
        $query .= "'$p_name', '$username', '$role', '$location', '$email', '$phone_number', '$special_note', '$hashed_password'";
        $query .= ")"; 
        
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            header ('Location: admin-patient.php?patient_added=true');
        }else{
            $errors[] = 'Failed to add the record. ';
        }

}               

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new Patient</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>   
<body>
    
    <span><a href="admin-patient.php" class="backbtn">Back</a></span><h1>Add New Patient</h1>


        <form action="addpatient.php" method="post" class="adddocform">

                <p>
                    <label for="" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="addpatname" id="addpatname" required>
                </p>

                <p>
                    <label for=""><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="addpatusername" id="addpatusername" required>
                </p>   
                
                <br><br><label for="area"><b>Location</b></label>
                    <select class="input" id="addpatloacation" name="addpatloacation">
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
                    <label for=""><b>Number</b></label>
                    <input type="text" placeholder="Enter number" name="addpatvoice" id="addpatvoice" required>
                </p>   

                <p><br>
                    <label for=""><b>Role<b></label>
                    <select id="dotype" name="addpatrole">
                    
                    <option value="Patient">Patient</option>
                </select>
                </p>   

                <p>  <br>  
                <br><label for=""><b>Special Note</b></label>
                    <input type="text" placeholder="Type something..." name="addpatdescription" id="addpatdescription" required>
                </p>    

                <p>    
                    <label for=""><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="addpatemail" id="addpatemail" required>
                </p>    

                <p>    
                    <br><label for="">Password</label>
                    <input type="password" placeholder="Enter Password" name="addpatpsw" id="addpatpsw" required>
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