<html>
    <body>
   <form action="" method="POST">
        <table>
            <h2>
        Student Registration
            </h2>
        <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>KTU ID:</td>
                <td><input type="text" name="ktuid"></td>
            </tr>
            <tr>
                <td>Roll No:</td>
                <td><input type="number" name="rollno"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                </td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td>
                <Select name="semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </Select>
                </td>
            </tr>
            <tr>
            <th><input type="submit" value="Register"></th>
            <th><input type="submit" value="Clear"></th>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','STUDENT');
if(!$con)
{
    echo "error";
}
if($_POST)
{
$name = $_POST['name'];
$ktuid = $_POST['ktuid'];
$rollno = $_POST['rollno'];
$gender = $_POST['gender'];
$semester = $_POST['semester'];

$sql = "INSERT INTO sreg VALUES('$name','$ktuid',$rollno,'$gender',$semester)";
$result = mysqli_query($con,$sql);
if (!$result) {
    echo "datea not enetered";
}
}

$sql = "SELECT * FROM sreg";
$result = mysqli_query($con,$sql);
echo "<table border ='1'>
        <tr><th>Name</th><th>ktuid</th><th>rollno</th><th>gender</th><th>semester</th></tr>";
while($row = mysqli_fetch_row($result))
{
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
}
echo "</table>";
?>
