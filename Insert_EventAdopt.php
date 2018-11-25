<?php
    include("connect.php");

    $event_name = $_POST['event_name'];
    $event_recorddate = $_POST['event_recorddate'];
    $pig_id = $_POST['pig_id'];
    $pig_amountofadopt = $_POST['pig_amountofadopt'];
    
        $sql ="INSERT INTO event (event_name,event_recorddate,pig_amountofadopt,pig_id) 
        VALUES ('$event_name','$event_recorddate','$pig_amountofadopt','$pig_id')";

        $result = mysqli_query($con,$sql);

    mysqli_close($con);
    
    ?>