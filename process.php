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
$Event = $_POST["Event"];
$Clubname = $_POST["Clubname"];
$Date = $_POST["Date"];
$Venue =$_POST["Venue"];
$Time = $_POST["Time"];
$Mode = $_POST["Mode"];
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