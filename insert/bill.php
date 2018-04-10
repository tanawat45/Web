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
$sql = "INSERT INTO bills ( payment, pay_through, flag_success)
VALUES ( 900 , 'promtpay', 1),( 300 , 'scb' ,1),( 490, 'ktb', 1)";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>