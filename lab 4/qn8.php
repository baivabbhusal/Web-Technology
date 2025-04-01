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

$sql="update student set address=\"dallu\" where name=\"suresh\"";
$result=$conn->query($sql);
if(mysqli_affected_rows($conn)>0){
    echo "Updated";
}
else{
    echo "Couldn't Update".$conn->error;
}

// Close connection
$conn->close();
?>