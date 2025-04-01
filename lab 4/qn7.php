<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "labassignment1";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["roll"] . " " . $row["name"] . " " . $row["address"] . " " . $row["contact"] . "<br>";
        // Added spaces between values and fixed the closing <br> tag
    }
} else {
    echo "0 results";
}

$conn->close();
?>