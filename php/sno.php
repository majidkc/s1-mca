<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
       Rollno: <input type = "text" name = "Rollno"><br>

   
        <input type="submit" name = "search" value = "search">
</body>
</html>
<?php
   $con=mysqli_connect('localhost','root','','STUDENT');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "connection failed";
}
$Rno= $_POST['Rollno'];
$s ="select * from SCHOOL where Rollno = '$Rno'";
$q = mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
    
    $row=mysqli_fetch_assoc($q);
      
    echo "<form>";
    echo "Rollno:<input type = 'text' value='".$row["Rollno"]."' >";
    echo "Name:<input type = 'text' value='".$row["Name"]."' >";
    echo "mark:<input type = 'text' value='".$row["mark"]."' >";
    echo "<button name = 'upadate'>update</button>";
    echo "</form>";
    
}

?>