<?php session_start(); ?>
<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

    if (isset($_POST['submit'])) {
        
        $d_id = $_POST['appdocid'];
        $p_id = $_POST['apppatid'];
        $appointment_name = $_POST['appointer'];
        $phone_number = $_POST['apptel'];
        $session = $_POST['appointersession'];
        $date = $_POST['appointerdate'];

        $query = "INSERT INTO appointment ( ";
        $query .= "d_id, p_id, appointment_name, phone_number, session, date";
        $query .= ") VALUES (";
        $query .= "'$d_id', '$p_id', '$appointment_name', '$phone_number', '$session', '$date'";
        $query .= ")"; 
        
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            header ('Location: admin-appointment.php?appointment_added=true');
        }else{
            $errors[] = 'Failed to add the record. ';
        }

}
?>               
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new Appointment</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
</head>   
<body>
    <span><a href="admin-appointment.php" class="backbtn">Back</a></span><h1>Add New Appointment</h1>


        <form action="addappointment.php" method="post" class="adddocform">

                <p>
                    <label for="" ><b>Appointer Name</b></label>
                    <input type="text" placeholder="Enter Name" name="appointer" id="appointer" required>
                </p>

                <p>
                    <label for=""><b>Appointment ID</b></label>
                    <input type="text" placeholder="Enter User Name" name="appointerid" id="appointerid" required>
                </p>   


                <p>
                <br><label for=""><b>Patient ID</b></label>
                    <input type="text" placeholder="Enter Location" name="apppatid" id="apppatid" required>
                </p>

                <p>
                    <label for=""><b>Doctor ID</b></label>
                    <input type="text" placeholder="Enter Price" name="appdocid" id="appdocid" required>
                </p>   

                <p>    
                <br><label for=""><b>Phone Number</b></label>
                    <input type="text" placeholder="Type something..." name="apptel" id="apptel" required>
                </p> 

                <p>
                    <label for=""><b>Session<b></label>
                    <select id="appointersession" name="appointersession">
                    
                    <option value="Morning">Morning</option>
                    <option value="Eveing">Eveing</option>
                </select>
               
            </p>  

                <p>    
                    <br><label for="">Date</label>
                    <input type="date" placeholder="Enter Password" name="appointerdate" id="appointerdate" required>
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