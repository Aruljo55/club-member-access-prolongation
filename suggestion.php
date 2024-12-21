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
$sql = "SELECT * FROM suggestion";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>SUGGESTIONS&FEEDBACK DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>name</th>";
    echo "<th>suggestion</th>";
    echo "<th>feedback</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo "<table border=10>";
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" .$row["suggestion"]."</td>";
	echo "<td>" .$row["feedback"]."</td>";
	echo"</tr>";
	echo"</br>";
	echo"</table>";  
}
}
?>
<html>
<head>
<a href="guest.html">Back</a>
</head>
</html>
