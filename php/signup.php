<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><marquee behavior="slide" direction="right">Welcome jucooo..</marquee></h2>
    <h4>Register here</h4>
    <form action="" method="POST">
        Name: <br><input type="text" name = "user"><br>
        Age: <br><input type="number" name = "age"><br>
        Email_id:<br> <input type="text" name="email"><br>
        Password: <br><input type="password" name = "pass"><br>
        <button type="submit">Register</button>
        <a href = "login.php">Login</a>
    </from>



        <?php
$con=mysqli_connect('localhost','root','','STUDENT');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "connection failed";
}

$name = $_POST['user'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];

$sq = "INSERT INTO `LOGIN`(`User_name`, `Age`, `Email_id`, `Password`) VALUES ('$name','$age','$email','$password')";
$p = mysqli_query($con, $sq);
if($p)
{
    echo "<script> 
    alert('succesfull inserted 1 row');
    </script>";
}
?>

</body>
</html>