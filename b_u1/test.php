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


$sql = "SELECT * FROM runners_bills WHERE bill_id = $bill_id";
$result = $conn->query($sql);

while($row =  $result->fetch_assoc()):
    $sqlA = "SELECT * FROM runners WHERE run_id = ".$row['run_id'];
    $resultA = $conn->query($sqlA);
    $rowA = $resultA->fetch_assoc();
endwhile;
?>
