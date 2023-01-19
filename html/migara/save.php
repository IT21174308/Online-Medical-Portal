<?php

require 'init.php';


if($con)
{
   
    $name=$_POST["name"];
    $card_number=$_POST["card_number"];
    $card_type=$_POST["card_type"];
    $exp_date=$_POST["exp_date"];
    $cvv=$_POST["cvv"];
    $price=$_POST["price"];
    $a_id=$_POST["aid"];

   


    $sql = "SELECT * FROM appointment where a_id = '$a_id'";  
    $result = $con->query($sql);

    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {


        $appoid=$row['a_id'];
        $pationid=$row['p_id'];
        $date = date('d-m-y h:i:s');
        

        $sql="INSERT INTO `card_details`(`a_id`, `p_id`,`p_name`, `number`, `type`, `ex_date`, `cvv`, `price`, `date`) VALUES ('$appoid','$pationid','$name','$card_number','$card_type','$exp_date',$cvv,$price,'$date');";
        if(mysqli_query($con,$sql))
        {
            header("location:../index.php");
        }
        else
        {
        
            echo "Insert Error";
        }
    
    }   
    }
    
    }
else
{
echo"DBERROR";
}
mysqli_close($con);
?>


