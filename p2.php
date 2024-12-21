<html>
<head>
<body bgcolor="lightskyblue">
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
    echo "<th>EVENTNO</th>";
    echo "<th>CLUBNAME</th>";
    echo "<th>DATE</th>";
echo "<th>VENUE</th>";
echo "<th>TIME</th>";
echo "<th>EVENTNAME</th>";
echo "<th>MODE</th>";

 echo "</tr>";
 // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{
echo"<table border=10>";
        echo "<tr>";
        echo "<td>" . $row["eventno"] . "</td>";
        echo "<td>" .$row["clubname"]."</td>"; 
	echo "<td>" .$row["date"]."</td>"; 
	echo "<td>" .$row["venue"]."</td>";
	echo "<td>" .$row["time"]."</td>";
echo "<td>" .$row["eventname"]."</td>"; 
echo "<td>" .$row["mode"]."</td>"; 
	echo"</tr>";
	echo"</table>";   
}
}
?><html
<br><br><a href="guest.html">Home</a></html