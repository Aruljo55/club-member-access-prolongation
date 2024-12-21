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
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>SUGGESTIONS&FEEDBACK DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Rollno</th>";
    echo "<th>Class</th>";
 echo "<th>Eventno</th>";
    echo "<th>eventname</th>";
    echo "<th>clubname</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo "<table border=10>";
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" .$row["Rollno"]."</td>";
	echo "<td>" .$row["Class"]."</td>";
    echo "<td>" . $row["Eventno"] . "</td>";
        echo "<td>" .$row["eventname"]."</td>";
	echo "<td>" .$row["clubname"]."</td>";
	echo"</tr>";
	echo"</br>";
	echo"</table>";  
}
}
?>
<html>
<head>
<a href="p1.php">Back</a>
</head>
</html>
