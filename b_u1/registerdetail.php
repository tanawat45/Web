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
$event_id = $_GET['id'];


$sql = "SELECT * FROM events WHERE event_id = $event_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$last_id = $conn->insert_id;
session_start();
$_SESSION['event_id'] = $event_id;





$conn->close();

?>

<!doctype html>
<?php require_once("header.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/test2.css" rel="stylesheet">
<script src="javascript/payment.js"></script>
    <!-- slide -->
<div class="container" style="margin-top:20px">
    <div class="carousel-inner">
        <div class="item active" > 
            <center><img src="<?=$row["img"]?>" style="width:820px; height:400px" class="img-responsive"></center>
            <br>
        </div>
        <form name="test" method="post" action="add/addbill.php">
            <button class="btnn" >สมัครเลย</button>
        </form>
    </div>

	<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav setup-panel">
                <li class="">
                    <a href="#step-3"><button class="btn list-group-item-heading">รายชื่อนักวิ่ง</button></a>
                </li>
            </ul>        
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav setup-panel">
                <li class="active">
                    <a href="#step-2"><button class="btn1 list-group-item-heading">แผนที่</button></a>
                </li>
            </ul>       
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav setup-panel">
                <li class="active">
                    <a href="#step-3"><button class="btn2 list-group-item-heading">ประเภท</button></a>
                </li>
            </ul>       
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav setup-panel">
                <li class="active">
                    <a href="#step-4"><button class="btn3 list-group-item-heading">รายละเอียด</button></a>
                </li>
            </ul>       
        </div>
	</div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="" style="margin-bottom:100px;border-left-width:100px;border-right-width:100px;margin-top:20px;">
            <center>
                <br><h2><u>แผนที่</u></h2><br><img src="<?=$row["map"]?>" style="width:600px; height:500px" class="img-responsive"></center>
                
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn2" >สมัครเลย</button>
                </form>
			</div>
        </div>
    </div>

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="" style="margin-bottom:100px;border-left-width:100px;border-right-width:100px;margin-top:20px;">
            <center>
                <?php
                    $text = file($row["generation_competing"]);     
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                </center>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn3" >สมัครเลย</button>
                </form>
			</div>
        </div>
    </div>


    <div class="setup-content" id="step-4">
        <div class="col-xs-12">
			<div class=" active" style="margin-bottom:100px;border-left-width:100px;border-right-width:100px;margin-top:20px;">
            <center>
                <br><h2><u>กำหนดการ</u></h2><br>
                <img src="<?=$row["img"]?>" style="width:400px; height:200px" class="img-responsive">
                <h2>ค่าธรรมเนียม</h2><br>
                <img src="<?=$row["charge"]?>" style="width:400px; height:170px" class="img-responsive">
                <?php if($row["shirtimg1"] != "none" or $row["shirtimg2"] != "none"){?>
                    <h2>เสื้อที่จะได้ในรายการแข่งขัน</h2><br>
                    <?php if($row["shirtimg1"] != "none") {?>
                    <img src="<?=$row["shirtimg1"]?>" style="width:400px; height:250px" class="img-responsive"><br>
                    <?php 
                        }
                        if($row["shirtimg2"] != "none"){
                    ?>
                    <img src="<?=$row["shirtimg2"]?>" style="width:400px; height:250px" class="img-responsive">
                <?php }} ?></center>
                <h2>กติกา</h2>
                <?php
                    $text = file($row["rules"]);
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                
                <form name="test" method="post" action="add/addbill.php">
                    <button class="btnn1" >สมัครเลย</button>
                </form>
			</div>
		</div>
    </div>


</div>

    <?php require_once("footer.php"); ?>