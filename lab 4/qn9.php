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

$sql="delete from student where address=\"lalitpur\"";
$result=$conn->query($sql);
echo mysqli_affected_rows($conn);
if(mysqli_affected_rows($conn)>0){
    echo "Deleted";
}
else{
    echo "Couldn't Delete".$conn->error;
}

// Close connection
$conn->close();
?>