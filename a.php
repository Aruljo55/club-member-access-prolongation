<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
</head>
<body>

<?php
// Define variables to store user input
$name = $email = $message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user input
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Display submitted data (you can modify this part based on your needs)
    echo "<h2>Submitted Information:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>User Input Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
