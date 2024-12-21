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
$clubno = $_POST["clubno"];
$clubname = $_POST["clubname"];
$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];
$m6 = $_POST["m6"];
$m7 = $_POST["m7"];
$m8 = $_POST["m8"];
$m9 = $_POST["m9"];
$m10 = $_POST["m10"];
///$sql="INSERT INTO member VALUES('$clubno','$clubname','$m1','$m2','$m3','$m4','$m5,'$m6,'$m7','$m8','$m9','$m10')";

$sql = "INSERT INTO member VALUES('$clubno','$clubname','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10')";
if($conn ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location:member.php");
?>