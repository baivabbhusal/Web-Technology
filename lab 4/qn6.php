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

// Array of student data
$students = [
    [101, 'John Doe', '123 Main St, Cityville', '1234567'],
    [102, 'Jane Smith', '456 Oak Ave, Townsville', '2345678'],
    [103, 'suresh', '789 Pine Rd, Villageton', '3456789'],
    [104, 'Emily Davis', '321 Elm St, Hamletville', '4567890'],
    [105, 'Michael Wilson', 'lalitpur', '5678901'],
    [106, 'Sarah Brown', '987 Cedar Ln, Countyville', '6789012'],
    [107, 'David Taylor', '159 Birch Blvd, Township', '7890123'],
    [108, 'Jessica Miller', '753 Spruce Ct, Districtown', '8901267'],
    [109, 'Thomas Anderson', '426 Willow Way, Parishburg', '9012678'],
    [110, 'Lisa Martinez', '864 Aspen St, Shireville', '0123459']
];

// Prepare and execute insert statements
foreach ($students as $student) {
    $roll = $student[0];
    $name = $student[1];
    $address = $student[2];
    $contact = $student[3];
    
    $sql = "INSERT INTO student (roll, name, address, contact) 
            VALUES ('$roll', '$name', '$address', '$contact')";
    
    if ($conn->query($sql)){
        echo "Record inserted successfully for Roll No: $roll<br>";
    } else {
        echo "Error inserting record for Roll No: $roll - " . $conn->error . "<br>";
    }
}

// Close connection
$conn->close();
?>