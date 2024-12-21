
<?php
// Include database connection
 $con=mysqli_connect("localhost","root","","javatpoint") or die("not connected");
//get post records
// Retrieve user input from form
$eventno = $_POST['eventno'];
$clubname = $_POST['clubname'];
$date = $_POST['date'];
$venue = $_POST['venue'];
$time = $_POST['time'];
$eventname = $_POST['eventname'];
$guestname = $_POST['guestname'];
$Mode = $_POST['mode'];

// Insert user data into MySQL table
$query = "INSERT INTO event (eventno,clubname,date,venue,time,eventname,guestname,mode) VALUES ('$eventno', '$clubname', '$date', '$venue', '$time','$eventname','$guestname', '$Mode')";
$result = mysqli_query($con, $query);

if ($result) {
    echo "";
} else {
    echo "Error: " . mysqli_error($con);
}
// Close database connection


header("Location:p1.php");
?>