<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View / Modify Doctor</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>

<?php
    $d_id=$_GET['d_id'];
    include("../../php/chinthaka/connection.php");

    $sql = "SELECT * FROM doctor WHERE d_id = '$d_id'";  
    $result = $connection->query($sql);

    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {
?>

<body>
<span><a href="admin-doctor.php" class="backbtn">Back</a></span><h1>Edit Doctor</h1>


<form action="edit-doctor.php" method="post" class="adddocform">

        <p>
            <label for="" ><b>Enter Doctor Name</b></label>
            <input type="text" placeholder="<?=$row['d_name'] ?>" name="adddocname" id="adddocname" required>
        </p>

        <p>
            <label for=""><b>Enter Doctor User Name</b></label>
            <input type="text" placeholder="<?=$row['username'] ?>" name="adddocusername" id="adddocusername" required>
        </p>   

        <p>
        <br><label for="Gender"><b>Gender<b></label>
                <select class="input" id="adddocgender" name="adddocgender" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>								
            </select>
                        
        </p> 


        <br><br><br><label for="area"><b>Location</b></label>
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


        <p>
        <br><br> <label for=""><b> Price Per Appointment</b></label>
            <input type="text" placeholder="<?=$row['price_per_appointment'] ?>" name="adddocprice" id="adddocprice" required>
        </p>   

        <p>
        <br> <label for="DoctorType">Doctor Type</label>
                    <select class="input" id="doctor_type" name="doctor_type" >
                        <option value="Specialised">Specialised</option>
                        <option value="Doctor">Doctor</option>								
                    </select>
                        
            </p>   

        <p>    
        <br><br><label for=""><b>Description</b></label>
            <input type="text" placeholder="<?=$row['description'] ?>" name="adddocdescription" id="adddocdescription" required>
        </p>    

        <p>    
            <label for=""><b>Email</b></label>
            <input type="text" placeholder="<?=$row['email'] ?>" name="adddocemail" id="adddocemail" required>
        </p>    

        <p>
            <label for="">&nbsp;</label>
            <button class="submit" name="submit" default value ="<?=$row['d_id'];?>">Update</button>

        </p>
        </form>
        <?php
    }   
    }  
?>
</body>
</html>