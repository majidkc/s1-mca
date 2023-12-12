<?php
    $con = mysqli_connect('localhost','root','','STUDENT');
    if(!$con)
    {
        echo "error";
    }


    $ktuid = $_POST['ktuid'];


    
    $series1=$_POST['series1'];
    $series2=$_POST['series2'];
    $assignment1=$_POST['assignment1'];
    $assignment2=$_POST['assignment2'];
    $attendance=$_POST['attendance'];




    $sql = "update smark set series1 = '$series1', series2 = '$series2', assignment1 = '$assignment1', assignment2 = '$assignment2', attendance = '$attendance' where ktuid = '$ktuid' " ;



    if (mysqli_query($con, $sql)) {
        echo "Updated Successfully....!!";
    } else {
        echo "Fail!!";
    }



?>