<?php
   $con=mysqli_connect('localhost','root','','STUDENT');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "connection failed";
}
$s ="select * from SCHOOL";
$q = mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
    echo "<table border=1px><tr>
    <th>Rollno</th><th>Name</th><th>mark</th></tr>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>".$row["Rollno"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["mark"]."</td>";
        echo "</tr>";
    }
}

?>
