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

$_POST['brith_date'] = $_POST['year'].  "-"  .$_POST['month']. "-" .$_POST['day'];


$sql = "INSERT INTO runners (essn, frist_name, last_name, sex, email, brith_date, blood, nationality, country, address, province,  postcode, phone, disease, medicine, allergic_drug, emergency_contact_name, emergency_contact_phone)
        VALUES ('".$_POST["essn"]."', '".$_POST["frist_name"]."','".$_POST["last_name"]."','".$_POST["sex"]."','".$_POST["email"]."','".$_POST["brith_date"]."','".$_POST["blood"]."','".$_POST["nationality"]."','".$_POST["country"]."','".$_POST["address"]."','".$_POST["province"]."','".$_POST["postcode"]."','".$_POST["phone"]."','".$_POST["disease"]."','".$_POST["medicine"]."','".$_POST["allergic_drug"]."','".$_POST["emergency_contact_name"]."','".$_POST["emergency_contact_phone"]."')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

session_start();
$bill_id = $_SESSION['bill_id'];
$event_id = $_SESSION['event_id'];


if($_POST['flag'] == "1"){
    $flag_full = 1;
}else if($_POST['flag'] == "2"){
    $flag_half = 1;
}else if($_POST['flag'] == "3"){
    $flag_mini = 1;
}else if($_POST['flag'] == "4"){
    $flag_fun = 1;
}



$sql1 = "INSERT INTO runners_bills (bill_id, run_id, flag_full, flag_half, flag_mini, flag_fun, getting, size, type_shirt)
        VALUES ('".$bill_id."', '".$last_id."','".$flag_full."','".$flag_half."','".$flag_mini."','".$flag_fun."','".$_POST["getting"]."','".$_POST["size"]."','".$_POST["type_shirt"]."')";


if ($conn->query($sql1) === TRUE) {
    header('Location:../register2.5.1.php');
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

?>
