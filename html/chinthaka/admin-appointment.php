<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital-ViewAppointment</title>
    <link rel="stylesheet" href="../../css/chinthaka/admin.css">
    

</head>
<body>
    <section id="menu">
        <div class="adminlogo">
        <img src="../../images/chinthaka/system logo.png" alt="">
            <h2 class="title">Administration</h2>
        </div>
            
        <div class="items">
            <li><img src ="../../images/chinthaka/dashboard.png"><a href="admin-dashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li>
            <li><img src ="../../images/chinthaka/patient.png"><a href="admin-patient.php" id="adpatient"  class="adpatient" >Patients</a></li>
            <li><img src ="../../images/chinthaka/doctors.png"><a href="admin-doctor.php" id="addoctors"  class="addoctors" >Doctors</a></li>
            <li><img src ="../../images/chinthaka/appointment.png"><a href="admin-appointment.php" id="adappointment"  class="adappointment" >Appointments</a></li>
            <li><img src ="../../images/chinthaka/payments.png"><a href="admin-payment.php" id="adpayments"  class="adpayments" >Payments</a></li>
            <li><img src ="../../images/chinthaka/logout.png"><a href="#" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li>
        </div>
    </section>

    <section id="iterface">
        <div class="navigation">

            <div>
                <span><a href="addappointment.php" class="adddobtn" id="adddobtn" >Add Appointment</a></span>
                    <!--<button type="click" class="addappointmentbtn">Add Appointment</button>-->
                </div>
                <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
                <img class="adminpic" src="../../images/chinthaka/mainadmin.jpg">
            
            </div>
            </div>
        <h3 class="d-title">Appointment</h3>
        <div class="board">
            <h3 class="sub-title">Appointment Details</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Appointer</td>
                        <td>Appointment ID</td>
                        <td>Doctor ID</td>
                        <td>Patient ID</td>
                        <td>Number</td>
                        <td>Date</td>
                    </tr>
                </thead>
                <tbody>


                <?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From appointment";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                    <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                                    <div class="appdetails">
                                        <h5><?=$row['appointment_name'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5>A<?=$row['a_id'];?></h5>
                                </td>

                                <td >
                                    <h5>D<?=$row['d_id'];?></h5>
                                </td>


                                <td>
                                    <h5>P<?=$row['p_id'];?></h5>
                                </td>
                                <td>
                                    <h5><?=$row['phone_number'];?></h5>
                                </td>

                                <td>
                                    <h5><?=$row['date'];?></h5>
                                </td>
                                 
                                <!-- <td class="dashdoccheck1" ><a href="#">Edit</a></td> -->
                                <td class="dashdoccheck2" ><a href="modify-appointment.php?a_id=<?=$row['a_id'];?>">Edit</a></td>
                                <td class="dashdoccheck2" ><a href="delete-appointment.php?a_id=<?=$row['a_id'];?>">Remove</a></td>

                            </tr>
                            <?php
                        }
                    }
                }
?>

                </tbody>
            </table>
        </div>

    </section>
    <div class="bg-modal">
        <div class="modal-content">
            <img src="../../images/chinthaka/user.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="logout.php" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../../js/chinthaka/admin.js"></script>
</body>
</html>