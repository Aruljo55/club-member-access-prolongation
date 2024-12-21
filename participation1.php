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
$sql = "SELECT * FROM part";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>PARTICIPATION DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>Rollno</th>";
    echo "<th>Class</th>";
 echo "<th>Eventno</th>";
    echo "<th>Eventname</th>";
    echo "<th>Clubname</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo "<table border=10>";
        echo "<tr>";
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
<a href="student.html">Back</a>
</head>
</html>
