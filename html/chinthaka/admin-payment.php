<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital-ViewAppointment</title>
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
        <div class="adminloggedin">Welcome Admin!</div>
            <div class="admintop">
                <img class="adminpic" src="../../images/Chinthaka/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Payments</h3>
        <div class="board">
            <h3 class="sub-title">Payments History</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Patient Name</td>
                        <td>Payment ID</td>
                        <td>Appointment ID</td>
                        <td>Patient ID</td>
                        <td>Price(RS.)</td>
                    </tr>
                </thead>
                <tbody>

                <?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From card_details";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                    <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                                    <div class="appdetails">
                                        <h5><?=$row['p_name'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5>PM<?=$row['payment_id'];?></h5>
                                </td>

                                <td >
                                    <h5>A<?=$row['a_id'];?></h5>
                                </td>


                                <td>
                                    <h5>P<?=$row['p_id'];?></h5>
                                </td>
                                <td>
                                    <h5><?=$row['price'];?>.00</h5>
                                </td>

                                 
                               

                            </tr><?php
                        }
                    }
                }
?>
                    <tr>
                        <td class="paypatient">
                            <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                            <div class="appdetails">
                                <h5></h5>
                            </div>
                        </td>
                        <td class="payappno">
                            <h5></h5>
                        </td>
                        <td class="payapppatientnumber">
                            <h5></h5>
                        </td>
                        <td class="payappdoctor">
                            <h5></h5>
                        </td>
                        <td class="payapppayment">
                            <h5></h5>
                        </td>
                     <!--   <td class="paybillcheck" ><a href="#">View bill</a></td>-->
                    </tr>
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