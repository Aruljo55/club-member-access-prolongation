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
$sql = "SELECT * FROM guest";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>MARKING DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>name</th>";
    echo "<th>regno</th>";
 echo "<th>marks</th>";
    echo "<th>eventname</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo "<table border=10>";
        echo "<tr>";
        echo "<td>" .$row["name"]."</td>";
	echo "<td>" .$row["regno"]."</td>";
    echo "<td>" . $row["marks"] . "</td>";
        echo "<td>" .$row["eventname"]."</td>";
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


