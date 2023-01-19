<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Appointment</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>

<body>

    <span><a href="admin-appointment.php" class="backbtn">Back</a></span><h1>Edit Appointment</h1>

    <?php
    $a_id=$_GET['a_id'];
    include("../../php/chinthaka/connection.php");

    $sql = "SELECT * FROM appointment WHERE a_id = '$a_id'";  
    $result = $connection->query($sql);

    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {
?>

        <form action="edit-appointment.php" method="post" class="adddocform">

                <p>
                    <label for="" ><b>Appointer Name</b></label>
                    <input type="text" placeholder="<?=$row['appointment_name'] ?>" name="appointer" id="appointer">
                </p> 


                <p>    
                <br><label for=""><b>Phone Number</b></label>
                    <input type="text" placeholder="<?=$row['phone_number'] ?>" name="apptel" id="apptel">
                </p> 

                <p>
                    <label for="session"><b>Session<b></label>
                    <select class="input" id="session" name="session">
                        <option value="Morning">Morning</option>
                        <option value="Evening">Evening</option>								
                    </select>
                        
            </p>  

                <p>    
                    <br><label for="">Date</label>
                    <input type="date" placeholder="<?=$row['date'] ?>" name="appointerdate" id="appointerdate" required>
                </p>

                <p>
                    <label for="">&nbsp;</label>
                    <button class="submit" name="submit" default value ="<?=$row['a_id'];?>">Submit</button>
                </p>
                              <!--  
                                          <p>
                    <label for=""><b>Doctor Type</b></label>
                    <input type="text" placeholder="Doctor Type" name="adddoctype" id="adddoctype" required>

                </p>    

                              <a href="admin-doctor.php" class="addoccancelbtn" id="addoccancelbtn" >Cancel</a>-->
        </form>
        <?php
    }   
    }  
?>

</body>
</html>