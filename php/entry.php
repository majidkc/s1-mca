<?php
$con=mysqli_connect('localhost','root','','STUDENT');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "connection failed";
}
$rno = $_POST['Rollno'];
$name = $_POST['Name'];
$mark = $_POST['mark'];
$sq = "insert into SCHOOL values('$rno','$name', '$mark')";
$p = mysqli_query($con, $sq);
if($p)
{
    echo "<script> 
    alert('succesfull inserted 1 row');
    </script>";
}
?>