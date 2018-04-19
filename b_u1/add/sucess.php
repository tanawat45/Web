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
$bill_id = $_SESSION['bill_id'];
$event_id = $_SESSION['event_id'];


$sql = "UPDATE bills SET payment='".$_GET['pay']."', flag_success = '1'  WHERE bill_id = $bill_id";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location:../success.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
