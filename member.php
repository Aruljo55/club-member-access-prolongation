 <?php
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
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) 
{
    echo "<h2>Club Details</h2>";
   echo "<table border=2>";
    echo "<tr>";
    echo "<th>clubno</th>";
    echo "<th>clubname</th>";
    echo "<th>m1</th>";
    echo "<th>m2</th>";
    echo "<th>m3</th>";
    echo "<th>m4</th>";
  echo "<th>m5</th>";
 echo "<th>m6</th>";
    echo "<th>m7</th>";
    echo "<th>m8</th>";
    echo "<th>m9</th>";
  echo "<th>m10</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo"<table border=2>";
        echo "<tr>";
        echo "<td>" . $row["clubno"] . "</td>";
        echo "<td>" .$row["clubname"]."</td>"; 
	echo "<td>" .$row["m1"]."</td>"; 
	echo "<td>" .$row["m2"]."</td>";
	echo "<td>" .$row["m3"]."</td>";
	echo "<td>" .$row["m4"]."</td>"; 
echo "<td>" .$row["m5"]."</td>";
echo "<td>" .$row["m6"]."</td>"; 
	echo "<td>" .$row["m7"]."</td>";
	echo "<td>" .$row["m8"]."</td>";
	echo "<td>" .$row["m9"]."</td>"; 
echo "<td>" .$row["m10"]."</td>";
	echo"</tr>";
	echo"</br>";
	echo"</table>";  
}
}
?>
<html>
<head>
<i><a href="club.html">Back</a></i>
</head>
</html>