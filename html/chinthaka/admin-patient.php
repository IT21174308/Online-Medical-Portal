<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital-ViewPatients</title>
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
                <span><a href="addpatient.php" class="addpabtn" id="addpabtn" >Add Patient</a></span>
               <!-- <a href="#" class="addpabtn" id="addpabtn" >Add Patient</a>
              <button type="text" class="addpabtn" id="addpabtn">Add Patient</button>-->
            </div>
            <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../../images/Chinthaka/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Patients</h3>
        <div class="board">
            <h3 class="sub-title">Patient Details</h3>
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
                <?php
                require("../../php/chinthaka/connection.php");
                $sql="SELECT * From users";
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
                                    <h5>P<?=$row['p_id'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['phone_number'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['email'];?></h5>
                                </td>
                                <td>
                                    <h5><?=$row['location'];?></h5>
                                </td>

                                 
                                <!-- <td class="dashdoccheck1" ><a href="#">Edit</a></td> -->
                                <td class="dashdoccheck2" ><a href="modify-patient.php?p_id=<?=$row['p_id'];?>"> Edit</a></td>
                                <td class="dashdoccheck2" ><a href="delete-patient.php?p_id=<?=$row['p_id'];?>"> Remove</a></td>

                            </tr><?php
                        }
                    }
                }
?>
                
                <tr>
                        <td class="patientname">
                           <!--<img src="../../images/chinthaka/dp1.jpg" alt="">-->
                            <div class="patientdetails">
                                <h5></h5>
                            </div>
                        </td>
                        <td class="patientdate">
                            <h5></h5>
                        </td>
                        <td class="userdorpnum">
                            <h5></h5>
                        </td>
                        <td class="patientmail">
                            <h5></h5>
                        </td>
                        <td class="patientgender">
                            <h5></h5>
                        </td>
                        <!--<td class="patientcheck1" ><a href="#">Edit</a></td>
                        <td class="patientcheck2" ><a href="#">Remove</a></td> -->
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
    <!--  <div class="addpatcontainer">
            <form method="post">
                <div class="adpatform-group">

                    <br><label for="addpatname" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="addpatname" id="addpatname" required>

                </div>
                <div class="adpatform-group">

                    <label for="addpatusername"><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="addpatusername" id="addpatusername" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatloacation"><b>Location</b></label>
                    <input type="text" placeholder="Enter Location" name="addpatloacation" id="addpatloacation" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatdescription"><b>Special Note</b></label>
                    <input type="text" placeholder="Type something..." name="addpatdescription" id="addpatdescription" required>
                </div>

                                
                    <div class="adpatform-group">
                    <label for="addpatrole"><b>Role</b></label>
                    <input type="text" placeholder="Enter Role" name="addpatrole" id="addpatrole" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatemail"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="addpatemail" id="addpatemail" required>
                </div>

                    <div class="adpatform-group">
                    <label for="addpatvoice"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Email" name="addpatvoice" id="addpatvoice" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatpsw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="addpatpsw" id="addpatpsw" required>
                </div>

                    <div class="adpatform-group">
                    <button type="submit" name="submit" class="adpatbtn">Add Patient</button>
                    <button type="text" class="adpatcancelbtn" id="adpatcancelbtn">Cancel</button>
                </div>
  
        
            </form>
        </div> -->
        <script src="../../js/chinthaka/admin.js"></script>
</body>
</html>