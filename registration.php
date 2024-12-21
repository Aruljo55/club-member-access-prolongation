<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javatpoint";
// Create connection
 $conn=new mysqli("localhost","root","","javatpoint");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name = $_POST["Name"];
$Rollno= $_POST["Rollno"];
$Class = $_POST["Class"];
$Eventno = $_POST["Eventno"];
$eventname= $_POST["eventname"];
$clubname = $_POST["clubname"];
$sql="INSERT INTO registration VALUES('$Name','$Rollno','$Class','$Eventno','$eventname','$clubname')";
if($conn ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location:registration1.php");
?>