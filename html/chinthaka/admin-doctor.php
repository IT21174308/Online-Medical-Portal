<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital-viewDoctor</title>
    <link rel="stylesheet"  href="../../css/chinthaka/admin.css">
    
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
                     <span><a href="adddoctor.php" class="adddobtn" id="adddobtn" >Add Doctor</a></span>
                   <!--<button type="click" class="adddobtn" id="adddobtn">Add Doctor</button>-->
                </div>
                <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../../images/Chinthaka/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Doctors</h3>

        <div class="board">
            <h3 class="sub-title">Available Doctors</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Doctor ID</td>
                        <td>Doctor Type</td>
                        <td>Email</td>
                        <td>Gender</td>
                    </tr>
                </thead>
                <tbody>

                <?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From doctor";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                    <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                                    <div class="appdetails">
                                        <h5><?=$row['d_name'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5>D<?=$row['d_id'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['doctor_type'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['email'];?></h5>
                                </td>
                                <td>
                                    <h5><?=$row['gender'];?></h5>
                                </td>

                                 
                                <!-- <td class="dashdoccheck1" ><a href="#">Edit</a></td> -->
                                <td class="dashdoccheck2" ><a href="modify-doctor.php?d_id=<?=$row['d_id'];?>"> Edit</a></td>
                                <td class="dashdoccheck2" ><a href="delete-doctor.php?d_id=<?=$row['d_id'];?>"> Remove</a></td>

                            </tr><?php
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