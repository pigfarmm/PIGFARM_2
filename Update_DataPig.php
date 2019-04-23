<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        include("connect.php");
        
        $pig_no = $_POST["pig_no"];
        $pig_id = $_POST["pig_id"];
        //$pig_preglist = $_POST["pig_preglist"];
        $pig_recorddate = $_POST["pig_recorddate"];
        $pig_birthday = $_POST["pig_birthday"];
        $pig_breed = $_POST["pig_breed"];
        $pig_idbreeder = $_POST["pig_idbreeder"];
        $pig_idbreeder2 = $_POST["pig_idbreeder2"];
        $pig_from = $_POST["pig_from"];
        $pig_idreserve = $_POST["pig_idreserve"];

        $sql = "UPDATE profile_pig SET pig_id = '$pig_id', pig_recorddate = '$pig_recorddate', pig_birthday = '$pig_birthday', pig_breed = '$pig_breed', pig_idbreeder = '$pig_idbreeder' , pig_idbreeder2 = '$pig_idbreeder2' ,
                       pig_from = '$pig_from', pig_idreserve = '$pig_idreserve' WHERE pig_no = $pig_no";

        if(mysqli_query($con,$sql)) {
            echo "อัพเดตข้อมูลสำเร็จ";

        }else{
            echo "อัพเดตข้อมูลไม่สำเร็จ";
        }
    }
        mysqli_close($con);


    ?>