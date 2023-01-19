<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View / Modify Patient</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>

<?php
    $p_id=$_GET['p_id'];
    include("../../php/chinthaka/connection.php");

    $sql = "SELECT * FROM users WHERE p_id = '$p_id'";  
    $result = $connection->query($sql);

    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {
?>

<body>
        <span><a href="admin-patient.php" class="backbtn">Back</a></span><h1>Edit New Patient</h1>


        <form action="edit_patient.php" method="post" class="adddocform">

        <p>
            <label for="" ><b>Enter Patient Name</b></label>
            <input type="text" placeholder="<?=$row['p_name'] ?>" name="addpatname" id="addpatname" required>
        </p>

        <p>
            <label for=""><b>Enter Patient User Name</b></label>
            <input type="text" placeholder="<?=$row['username'] ?>" name="addpatusername" id="addpatusername" required>
        </p>   

        <p>
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

        <p>
        <br><br><label for=""><b>Number</b></label>
            <input type="text" placeholder="<?=$row['phone_number'] ?>" name="addpatvoice" id="addpatvoice" required>
        </p>     

        <p>    
        <br><label for=""><b>Special Note</b></label>
            <input type="text" placeholder="<?=$row['special_note'] ?>" name="addpatdescription" id="addpatdescription" required>
        </p>    

        <p>    
            <label for=""><b>Email</b></label>
            <input type="text" placeholder="<?=$row['email'] ?>" name="addpatemail" id="addpatemail" required>
        </p>    

        <p>
            <label for="">&nbsp;</label>
            <button type="submit" name="submitp" class="submit" default value ="<?=$row['p_id'];?>">Submit</button>

        </p>

</form>

</form>
        <?php
    }   
    }  
?>
</body>
</html>