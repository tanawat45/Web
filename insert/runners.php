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
$sql = "INSERT INTO runners (essn, frist_name, last_name, sex, email, brith_date, blood, nationality, country, address, province,  postcode, phone, disease, medicine, allergic_drug, emergency_contact_name, emergency_contact_phone)
VALUES ('1525152515869', 'somnam', 'somnue', 'F', 'banana.potato@cmu.ac.th', '1996-6-30', 'B', 'Thai', 'Thailand', '227 m29 t99 jittree village lampang capital ', 'lampang', '52000', '0815935788', 'none', 'none', 'none', 'satid', '0896580887'),
('6915558244858', 'pitak', 'thammoo', 'M','pitak.T@gmail.com', '1936-8-30', 'O','Thai', 'Thailand', '999 m99 t.highway hangdong', 'CheingMai', '51200','0688871669', 'none', 'none', 'none','santad' , '0658071221')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
