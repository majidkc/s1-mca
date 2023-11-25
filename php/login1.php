<?php
$con=mysqli_connect('localhost','root','','STUDENT');

$username = $_POST['user'];
$password = $_POST['password'];


$sql = "SELECT * FROM `LOGIN` WHERE User_name = '$username'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    echo "<table border = '1' widht='75%'>
            <tr><td>Name</td><td>Age</td><td>Email</td><td>Password</td></tr>";
while($row = mysqli_fetch_array($result)){
if($row['Password']==$password)   
  
    echo "<tr><td>".$row['User_name']."</td><td>".$row['Age']."</td><td>".$row['Email_id']."</td><td>".$row['Password']."</td></tr>";
 
else
echo "<script>alert('Incorrect Password')</script>";
}
echo "</table>";
}
?>