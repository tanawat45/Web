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
$sql = "INSERT INTO events (name, img, schedule_event, rules, charge, map,  generation_competing, race_day, flag_full, num_full, charge_full, flag_half, num_half, charge_half, flag_mini, num_mini,charge_mini, flag_fun, num_fun, charge_fun, phone, email, shirtimg1, shirtimg2)
VALUES ('CMUmarathon', 'event/CMU/even.jpg', 'event/CMU/Schedule.jpg', 'event/CMU/rules.txt', 'event/CMU/Fee.jpg', 'event/CMU/map.png', 'event/CMU/generation.txt', '2018-2-11', 1, 400, 900, 1, 500, 700, 1, 500, 400, 1, 500, 300, 'none', 'none', 'none', 'none'),
('Run To Sea', 'event/RunToSea/even1.jpg', 'event/RunToSea/Schedule.png', 'event/RunToSea/rule.txt', 'event/RunToSea/Fee.png', 'event/RunToSea/map1.jpg', 'event/RunToSea/generation.txt', '2018-4-1', 0, 0 , 0, 1, 600, 690, 1, 500, 590, 1, 500, 490, 'none', 'none', 'event/RunToSea/shirt1.jpg', 'event/RunToSea/shirt2.jpg'),
('วิ่งอมยิ้ม', 'event/VingAomYem/even2.jpg', 'event/VingAomYem/Schedule.png', 'event/VingAomYem/rules.txt', 'event/VingAomYem/Fee.png', 'event/VingAomYem/map.jpg', 'event/VingAomYem/generation.txt', '2018-4-1', 0, 0, 0, 1, 500, 500, 1, 500, 400, 1, 500, 300, 'none', 'none', 'event/VingAomYem/shirt1.jpg','none')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
