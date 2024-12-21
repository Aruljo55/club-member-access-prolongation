<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","javatpoint")or die("not connected");
// Initialize variables to empty values
$clubname = $event = $date= $time= $venue = $mode ;
// Check if the form is submitted
if(isset($_POST["ok"])){
    // Collect and sanitize user input
$clubname = $_POST["clubname"];
$eventname = ($_POST["event"]);
$date = ($_POST["date"]);
$time = ($_POST["time"]);
$venue = ($_POST["venue"]);
$mode = ($_POST["mode"]);
$query="INSERT INTO student VALUES('".$clubname."','".$event."','".$date."','".$time."','".$venue."','".$mode."')";
if(mysqli_query($con,$query))
{
echo"event record submitted";
header("Location:home.html");
}
}
// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>User Input Form</h2>
<form method="post" action="b.php" name="form1">
<label for="clubname"> ClubName:</label>
    <input type="text" id="clubname" name="clubname" value="" required>
    <br>
<label for="event">EventName:</label>
    <input type="text" id="event" name="eventname" value="" required>
    <br>
<label for="date">Date:</label>
    <input type="date" id="date" name="date" value="" required>
    <br>
<label for="time">Time:</label>
    <input type id="time" name="time" value=""required>
    <br>
<label for="venue">Venue:</label>
    <input type="text" id="venue" name="venue" value="" required>
    <br>
<label for="mode">Mode:</label>
    <input type="text" id="mode" name="mode" value="" required>
    <br>
 <input type="submit" value="Submit">
</form>
<?php
// Display submitted data in a table if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Submitted Information:</h2>";
    echo "<table>";
    echo "<tr><th>ClubName</th><th>EventName</th><th>Date</th><th>Time</th><th>Venue</th><th>Mode</th></tr>";
    echo "<tr><td>".$clubname."</td><td>".$event."</td><td>".$date."</td><th>".$time."</td><td>".$venue."</td><td>".$mode."</td></tr>";
    echo "</table>";
}
?>
</body>
</html>

