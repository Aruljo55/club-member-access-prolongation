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
    die("Connection failed: " . $con->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$Event = $_POST["event"];
$Clubname = $_POST["clubname"];
$Date = $_POST["date"];
$Venue =$_POST["venue"];
$Time = $_POST["time"];
$Mode = $_POST["mode"];
$sql="INSERT INTO event VALUES('$Event','$Clubname','$Date','$Venue','$Time','$Mode')";
if($conn ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
header("Location:p1.php");
?>