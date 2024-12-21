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
$name= $_POST["name"];
$regno = $_POST["regno"];
$marks = $_POST["marks"];
$eventname= $_POST["eventname"];
$sql="INSERT INTO guest VALUES('$name','$regno','$marks','$eventname')";
if($conn ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location:mark.php");
?>