


<?php
            $Patient_ID = "1001";

             require("conn.php");
                    

                
                    if ($Patient_ID < 1)
                    {
                        $sql = "SELECT * From doctor ";
                    }
                    
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            

    ?>  


    <body id="body ">
        <div class= "doctordiv">
                            <div class="gallery">

                                    <form action="booknow.php" method="post">
                                                    <button  name="Bookname" default value ="<?=$row['Doctor_ID'];?>"> 
                                                    <?php
                                                    $my=$row['Gender'];
                                                    if( $my=="Male"){
                                                        ?>
                                                        <img src="../../images/ishara/DR-avatar.png" alt="Cinque Terre" width="600" height="400">
                                                        <?php      
                                                    }
                                                    else {
                                                        ?>
                                                        <img src="../../images/ishara/doctorgirl.png" alt="Cinque Terre" width="600" height="400">
                                                        <?php
                                                    }
                                                        ?>
                                                        </button>
                                    </form>
                                    <div class="detils">
                                        <h2><?=$row['Doctor_Names'];?></h2>
                                        <p class="title"><?=$row['Doctor_Types'];?></p>
                                        <p><?=$row['Description'];?></p>
                                        <p><?=$row['Email'];?></p>
                                        <form method="post" action="booknow.php">
                                        <p><button class="button" name="Bookname" default value ="<?=$row['Doctor_ID'];?>">Book Now</button></p><p>                                                                                  
                                        </form>
                                    </p>                                       
                                    </div>
                            </div>
        <?php
        }
                }
                else {
                    echo 'empty table';
                }
                  
     ?> 