<?php
// Include database connection
 $con=mysqli_connect("localhost","root","","javatpoint") or die("not connected");
//get post records
// Retrieve user input from form
$Eventno = $_POST['eventno'];
$ClubName = $_POST['clubname'];
$Date = $_POST['date'];
$Venue = $_POST['venue'];
$Time = $_POST['time'];
$Mode = $_POST['mode'];

// Insert user data into MySQL table
$query = "INSERT INTO event (eventno,clubname,date,venue,time,mode) VALUES ('$Eventno', '$ClubName', '$Date', '$Venue', '$Time', '$Mode')";
$result = mysqli_query($con, $query);

if ($result) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close database connection

?>
