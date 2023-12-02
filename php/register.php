<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body style="background-color: gray;">
    <h1 style="background-color: aquamarine;"><center>STUDENT REGISTRATION</center></h1>
    <center>
    <table border=1px style="background-color: white;" width=30% height="40%">
        <tr>
            <th colspan="2">Registration form</th>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="text" name="Age"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="Password"></td>
        </tr>
        <tr>
            <th>KTU ID</th>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <th>Rollno</th>
            <td><input type="text" name="rollno"></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><input type="text" name="sem"></td>
        </tr>
        <tr>
            <th>Email-id</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input type="text" name="phoneno"></td>
        </tr>

        <tr>
            <td><input type="reset" name="reset"></td>
            <td><input type="submit" name="submit" ></td>
        </tr>
        <tr></tr>
    </table>
    </center>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','STUDENT');

$name = $_POST['Name'];
$age = $_POST['Age'];
$password = $_POST['Password'];
$ktuid = $_POST['id'];
$rollno = $_POST['rollno'];
$sem = $_POST['sem'];
$email = $_POST['email'];
$phone  = $_POST['phoneno'];


$sq = "INSERT INTO portal('Name', 'Age', 'Password','ktuid','Rollno','Semester','Email-id', 'Phone Number') VALUES ('$name','$age','$password','$ktuid','$rollno','$sem','$email','$phone')";
$p = mysqli_query($con, $sq);
if($p)
{
    echo "<script> 
    alert('succesfull inserted 1 row');
    </script>";
}

