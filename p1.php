<html>
<head>
<body bgcolor="lightyellow">
</body>
</html> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javatpoint";

// Create connection
 $conn=new mysqli("localhost","root","","javatpoint");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Write the SQL query
$sql = "SELECT * FROM event";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>EVENT DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>eventno</th>";
    echo "<th>clubname</th>";
 echo "<th>date</th>";
    echo "<th>venue</th>";
    echo "<th>time</th>";
 echo "<th>eventname</th>";
 echo "<th>guestname</th>";
 echo "<th>mode</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo "<table border=10>";
        echo "<tr>";
        echo "<td>" .$row["eventno"]."</td>";
	echo "<td>" .$row["clubname"]."</td>";
    echo "<td>" . $row["date"] . "</td>";
        echo "<td>" .$row["venue"]."</td>";
echo "<td>" .$row["time"]."</td>";

	echo "<td>" .$row["eventname"]."</td>";
	echo "<td>" .$row["guestname"]."</td>";

	echo "<td>" .$row["mode"]."</td>";
	echo"</tr>";
	echo"</br>";
	echo"</table>";  
}
}
?>
<html>
<head>
<i><a href="registration.html">Register Here..!</a></i>
</head>
</html>