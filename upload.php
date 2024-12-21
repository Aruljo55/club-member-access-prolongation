<html>
<head></head>
<body bgcolor="lightblue"></html><?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javatpoint";

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get data from form
$id = $_POST['id'];
$name = $_POST['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];

//
$target_file = "uploads/";

move_uploaded_file($photo_tmp_name, $target_file);

// Store data and photo path in MySQL
$sql = "INSERT INTO upload (id, name,photo_path) VALUES ('$id', '$name','$target_file')";

if ($con->query($sql) === TRUE) {
    echo "Data and photo uploaded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();
?>
<html>
<head></head><body>
<br>
<a href="club.html">Back</a>
</body>
</html>
