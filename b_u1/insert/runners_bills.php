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
$sql = "INSERT INTO runners_bills(bill_id, run_id, flag_full, flag_half , flag_mini, flag_fun ,generation_compete)
VALUES (1 , 1, 1, 0, 0 ,0,'16-26'),(1, 2, 1, 0, 0 ,0,'27-36'),(2 , 3, 0, 1, 0, 0,'16-26')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>