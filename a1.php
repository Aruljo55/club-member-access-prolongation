<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Sample data
$data = array(
    array("John Doe", "john.doe@example.com", "25"),
    array("Jane Smith", "jane.smith@example.com", "30"),
    array("Bob Johnson", "bob.johnson@example.com", "28"),
);

// Display table header
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";

// Display data rows
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
