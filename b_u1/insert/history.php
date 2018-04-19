<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
$sql = "INSERT INTO history (run_id, event_id, size, generation_competing, getting, flag_full, flag_half , flag_mini, flag_fun)
VALUES (1 , 1 , 'M', 'Female 16-29','safe getting', 1, 0, 0, 0),(2 , 1 , 'L', 'Male 16-29','post', 0, 1, 0, 0)";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>