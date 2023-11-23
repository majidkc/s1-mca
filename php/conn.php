<?php
$con=mysqli_connect('localhost','root','','STUDENT');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "connection failed";
}

$sq = "insert into SCHOOL values(12,'adhil', 60)";
$p = mysqli_query($con, $sq);
if($p)
{
    echo "<script> 
    alert('succesfull inserted 1 row');
    </script>";
}
?>