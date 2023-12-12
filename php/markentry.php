<html>
    <head>
        <title>mark</title>
    </head>
    <body>
    <center>
    <form method="post" action="markentry.php">
            KTU ID : <input type="text" name="ktuid"> <br>
            Subject: <input type="text" name="subject"> <br>
            Series 1: <input type="number" name="series1"> <br>
            Series 2: <input type="number" name="series2"> <br>
            Assignment 1:  <input type="number" name="assignment1"> <br>
            Assignment 2:<input type="number" name="assignment2"> <br>
            Attendance: <input type="number" name="attendance"> <br>
            <input type="submit" value="Add Score">
        </form>
    </center>
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
    $ktuid=$_POST['ktuid'];
    $subject=$_POST['subject'];
    $series1=$_POST['series1'];
    $series2=$_POST['series2'];
    $assignment1=$_POST['assignment1'];
    $assignment2=$_POST['assignment2'];
    $attendance=$_POST['attendance'];
$sql = "INSERT INTO smark VALUES('$ktuid','$subject',$series1,$series2,$assignment1,$assignment2,$attendance)";
$result = mysqli_query($con,$sql);

$sql = "SELECT * FROM  sreg, smark WHERE sreg.ktuid = smark.ktuid ";
$result = mysqli_query($con,$sql);


echo "<table border = '1'>
        <tr><th>Name</th><th>KTU ID</th><th>Roll Number</th><th>Gender</th><th>Sem</th><th>Subject</th><th>Series 1</th><th>Series 2</th><th>Assignment 1</th><th>Assigment 2</th><th>Attendance</th></tr>";
while($row = mysqli_fetch_row ($result))
{
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
        <td>$row[10]</td><td>$row[11]</td></tr>";
}
echo "</table>";

}
?>
