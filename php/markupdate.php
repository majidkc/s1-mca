<html>
    <body>
        <form action = "" method = "POST">
        Enter your ktu_id:<input type="text" name="ktuid" ><br>
        Enter subject:<input type="text" name="subject" >
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$con = mysqli_connect('localhost','root','','STUDENT');
if(!$con)
{
    echo "error";
}

    $ktuid = $_POST['ktuid'];
    $subject = $_POST['subject'];

$sql = "SELECT * FROM smark WHERE ktuid = '$ktuid' and subject = '$subject'";
$result = mysqli_query($con,$sql);
                                                                                                 
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_array($result)){

if($row['ktuid'] == $ktuid)
{
    echo "<form  action='update_query.php' method='POST'>
        KTU ID : <input type='text' readonly value='".$row['ktuid']."'> <br>
        Subject : <input type='text' name='subject' value = '".$row['subject']."'> <br>
        Series 1: <input type='number' name='series1' value = '".$row['series1']."'> <br>
        Series 2: <input type='number' name='series2' value = '".$row['series2']."'> <br>
        Assignment 1:  <input type='number' name='assignment1' value = '".$row['assignment1']."'> <br>
        Assignment 2:<input type='number' name='assignment2' value = '".$row['assignment1']."'> <br>
        Attendance: <input type='number' name='attendance' value = '".$row['attendance']."'> <br>
        <input type='submit' value='Update'>
        </form>";
}
}
} else {
    echo mysqli_error($con);
}

?>  