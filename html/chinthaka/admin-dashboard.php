<?php session_start(); ?>
<?php require_once('../../php/chinthaka/connection.php'); ?>
<?php require_once('../../php/chinthaka/functions.php'); ?>
<?php

$users_list = '';

//getting the patient details

    $query = "SELECT * FROM users ORDER BY p_id"; // WHERE is_deleted=0
    $user = mysqli_query($connection, $query);

    verify_query($user);
    while ($users = mysqli_fetch_assoc($user)) {
        $users_list .= "<tr>";
        $users_list .= "<td>{$users['p_name']}</td>";
        $users_list .= "<td>P0{$users['p_id']}</td>";
        $users_list .= "<td>{$users['phone_number']}</td>";
        $users_list .= "<td>{$users['email']}</td>";
        $users_list .= "<td>{$users['location']}</td>";
        //$users_list .= "<td><a href=\"modify-patient.php?d_id={$users['p_id']}\">Edit</a></td>";
        //$users_list .= "<td><a href=\"delete-patient.php?d_id={$users['p_id']}\">Delete</a></td>";
        $users_list .= "</tr>";
        
    }

$docter_list = '';

//getting the doctor details

    $query = "SELECT * FROM doctor ORDER BY d_id"; // WHERE is_deleted=0
    $docters = mysqli_query($connection, $query);

    verify_query($docters);
    while ($docter = mysqli_fetch_assoc($docters)) {
        $docter_list .= "<tr>";
        $docter_list .= "<td>{$docter['d_name']}</td>";
        $docter_list .= "<td>D0{$docter['d_id']}</td>";
        $docter_list .= "<td>{$docter['doctor_type']}</td>";
        $docter_list .= "<td>{$docter['email']}</td>";
        $docter_list .= "<td>{$docter['gender']}</td>";
       // $docter_list .= "<td><a href=\"modify-doctor.php?d_id={$docter['d_id']}\">Edit</a></td>";
       //$docter_list .= "<td><a href=\"delete-doctor.php?d_id={$docter['d_id']}\">Delete</a></td>";
        $docter_list .= "</tr>";
        
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital-Admin-Dashboard</title>
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
        <div class="adminloggedin">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../../images/Chinthaka/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Dashboard</h3>

        <div class="values">
            <div class="v-box">
                <img class="medicalappointment" src="../../images/Chinthaka/medicalappointment.png">
                <div>
                    <h3><?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From appointment";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?></h3>
                    <span>Appointments</span>
                </div>
            </div>
            <div class="v-box">
                <img class="medicalappointment" src="../../images/Chinthaka/patient.png">
                <div>
                    <h3><?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From users";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?></h3>
                    <span>Patients</span>
                </div>
            </div>
            <div class="v-box">
                <img class="medicalappointment" src="../../images/Chinthaka/doctors.png">
                <div>
                    <h3><?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From doctor";
                if($result=$connection->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;   
                    }
                }

?></h3>
                    <span>Doctors</span>
                </div>
            </div>

            </div>
            </div>
        </div>
        <div class="board">
            <h3 class="sub-title">Recent Users</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Patient Name</td>
                        <td>Patient ID</td>
                        <td>Number</td>
                        <td>Email</td>
                        <td>Location</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="userdorp">
                            <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                            <div class="appdetails">
                                <h5></h5>
                            </div>
                        </td>
                        <td class="userdorpdate">
                            <h5></h5>
                        </td>
                        <td class="userdorpnum">
                            <h5></h5>
                        </td>
                        <td class="userdorpgender">
                            <h5></h5>
                        </td>
                        <td class="userdorpdashrole">
                            <h5></h5>
                        </td>
                        <!--<td class="dashusercheck" ><a href="#">Check</a></td>-->
                    </tr>
                </tbody>
                <?php echo $users_list; ?>
            </table>
        </div>
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
                    <tr>
                        <td class="dashdoc">
                            <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                            <div class="appdetails">
                                <h5></h5>
                            </div>
                        </td>
                        <td class="docid">
                            <h5></h5>
                        </td>
                        <td class="doctype">
                            <h5></h5>
                        </td>
                        <td class="docmail">
                            <h5</h5>
                        </td>
                        <td class="docgender">
                            <h5></h5>
                        </td>
                        <!--<td class="dashdoccheck1" ><a href="#">Check</a></td> -->
                    </tr>
                </tbody>
                <?php echo $docter_list; ?>
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