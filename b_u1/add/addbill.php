<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marathon";
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
$event_id = $_SESSION['event_id'];

$sql = "INSERT INTO bills (event_id) VALUES ('".$event_id."')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    session_start();
    $_SESSION['bill_id'] = $last_id;
    header('Location:../register1.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>