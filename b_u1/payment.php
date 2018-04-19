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
$sum = $_SESSION['sum'];

$conn->close();

?>
<?php require_once("header.php"); ?>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="css/payment.css" rel="stylesheet">
<script src="javascript/payment.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="javascript/validateregister.js"></script>

<style>
	.b {
		text-align: center;
	}
</style>
<!-- process step bar -->
<!-- <br><div class="container">
        <ul class="progressbar">
            <li class="active">ลงทะเบียน</li>
            <li class="active">ตรวจสอบ</li>
            <li class="active">ยืนยันข้อมูล</li>
            <li class="active">ชำระเงิน</li>
			<li>เสร็จสิ้น</li>
        </ul>
    </div> -->
	<br>
	<center><h4 style="color:green">ความคืบหน้าในการสมัคร</h4></center>
	<center><div class="container">
        <div class="progress" style="width:50%;background:gray;height:20px;margin-top:10px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;background:green">
            80%
            </div>
        </div>
    </div>
    </center>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="paymentCont">
			<div class="headingWrap">
				<h3 class="headingTop text-center">กรุณาเลือกช่องทางการชำระเงิน</h3>	
				<p class="text-center">กรุณาชำระเงินภายใน 72 ชั่วโมงหลังการสมัครเสร็จสิ้น</p><br>
			</div>
		</div>
	</div>
</div>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">บัตรเครดิตหรือเดบิต</h4>
                </a></li>
                <li class="active"><a href="#step-2">
                    <h4 class="list-group-item-heading">อินเตอร์เน็ตแบงก์กิ้ง</h4>
                </a></li>
                <li class="active"><a href="#step-3">
                    <h4 class="list-group-item-heading">เคาน์เตอร์เซอร์วิส</h4>
				</a></li>
				<li class="active"><a href="#step-4">
                    <h4 class="list-group-item-heading">โอนเงิน</h4>
                </a></li>
            </ul>
        </div>
	</div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
			<div class="col-md-12 well">
			<center>
				<div class="imglogo">
					<img src="picture/credit.png" alt="Logocredit">
				</div>
			</center>
				<div class="b">
					<!-- <img class="imglogo" src="picture/credit.png" alt="Credit Card"> -->
					<h1 class=""><font color="red">*****ค่าบริการ 24.50 บาท*****</font></h1>
					<div class="w3-small w3-opacity">* บัตรเดบิตที่ออกโดยธนาคารในประเทศไทย รองรับบัตรที่ออกโดยธนาคารต่อไปนี้ ธนาคารกรุงเทพ ธนาคารกรุงไทย ธนาคารกรุงศรีอยุธยา ธนาคารกสิกรไทย ธนาคารไทยพาณิชย์ ธนาคารธนชาติ</div>
					<br><br>
				</div>
				<div class="w3-col m8 instruction">
					<div>
						<h4>ขั้นตอนการชำระเงินผ่านบัตรเครดิตหรือเดบิต </h4><br>
						<ol>
							<li>กดปุ่ม 'ชำระเลย' บริเวณด้านล่าง</li><br>
							<li>กรอกข้อมูลบัตรเครดิตหรือเดบิตให้ครบถ้วน และกดปุ่ม 'ชำระ'</li><br>
							<li>ระบบจะส่งรหัส OTP ไปทางหมายเลขโทรศัพท์</li><br>
							<li>นำรหัส OTP ที่ได้รับมาใส่ในขั้นตอนต่อไปเพื่อเป็นการยืนยันการชำระเงิน</li><br>
							<li>เมื่อทำรายการเสร็จสมบูรณ์แล้ว รอรับอีเมล์ยืนยันการสมัครได้เลย</li><br>
						</ol>
					</div>
					<div class="b">
						<div class="sc-hwwEjo cyNieD w3-padding">
							<span><h3>ราคารวมค่าบริการ</h3></span>
							<span ><font color="red" ><h2><u> <?=$sum+24.5?> บาท</u></h2></font></span>
						</div><br>
						<a href="add/sucess.php?pay=<?=$sum+24.5?>"><button class="btn1">ชำระเลย</button><br></a>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">
				<center>
					<div class="imglogo">
						<img src="picture/netbank.png" alt="Logo" height="52" width="150">
					</div>
				</center>
				<div class="b">
					<!-- <img class="imglogo" src="picture/credit.png" alt="Credit Card"> -->
					<h1 class=""><font color="red">*****ค่าบริการ 24.50 บาท*****</font></h1>
					<br><br>
				</div>			
				<div class="w3-col m4 w3-center brand">
					<div class="w3-col m8 instruction">
						<div>
							<h4>ขั้นตอนการชำระเงินผ่านอินเตอร์เน็ตแบงก์กิ้ง</h4><br>
							<ol>
								<li>กดปุ่ม 'ชำระเลย' บริเวณด้านล่าง</li><br>
								<li>เลือกธนาคารที่ท่านมีบัญชีใช้งานอินเตอร์เน็ตแบงก์กิ้ง</li><br>
								<li>ระบบจะส่งท่านไปยังเว็บไซต์ของธนาคารที่ท่านเลือก</li><br>
								<li>ล็อกอินเข้าสู่เว็บไซต์ด้วย ชื่อผู้ใช้งานและรหัสผ่าน ของธนาคารที่ท่านใช้บริการ</li><br>
								<li>ยืนยันเพื่อชำระเงินตามยอดที่ระบบระบุ</li><br>
								<li>เมื่อทำรายการเสร็จสมบูรณ์แล้ว รอรับอีเมล์ยืนยันการสมัครได้เลย</li><br>
							</ol>
						</div>
						<div class="b">
							<div class="sc-hwwEjo cyNieD w3-padding">
								<span><h3>ราคารวมค่าบริการ</h3></span>
								<span ><font color="red" ><h2><u> <?=$sum+24.5?> บาท</u></h2></font></span>
							</div><br>
							<a href="add/sucess.php?pay=<?=$sum+24.5?>"><button class="btn1 b">ชำระเลย</button><br></a>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
				<center>
					<div class="imglogo">
						<img src="picture/eleven7.png" alt="Logoeleven7">
					</div>
				</center>
				<div class="b">
					<!-- <img class="imglogo" src="picture/credit.png" alt="Credit Card"> -->
					<h1 class=""><font color="red">*****ค่าบริการ 24.50 บาท*****</font></h1>
					<br><br>
				</div>
				<div class="w3-col m4 w3-center brand">
					<div class="w3-col m8 instruction">
						<div>
							<h4>ขั้นตอนการชำระเงินผ่านเค้าน์เตอร์เซอร์วิส</h4><br>
							<ol>
								<li>กดปุ่ม 'ชำระเลย' บริเวณด้านล่าง</li><br>
								<li>ระบบจะส่งท่านไปยังเว็บไซต์ของเค้าน์เตอร์เซอร์วิส</li><br>
								<li>พิมพ์ใบแจ้งการชำระเงินหรือจด รหัส 15 หลักใต้บาร์โค้ด เพื่อนำไปชำระเงินที่เค้าน์เตอร์เซอร์วิส (เซเว่นอีเลฟเว่น)</li><br>
								<li>เมื่อทำรายการเสร็จสมบูรณ์แล้ว รอรับอีเมล์ยืนยันการสมัครได้เลย</li><br>
							</ol>
						</div>
						<div class="b">
							<div class="sc-hwwEjo cyNieD w3-padding">
								<span><h3>ราคารวมค่าบริการ</h3></span>
								<span ><font color="red" ><h2><u> <?=$sum+24.5?> บาท</u></h2></font></span>
							</div><br><br>
							<a href="add/sucess.php?pay=<?=$sum+24.5?>"><button class="btn1 b">ชำระเลย</button><br></a>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
	<div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well" style="margin-bottom:60px;">
				<center>
					<div class="imglogo">
						<img src="picture/banktransfer.png" alt="Logobanktransfer">
					</div>
				</center>
				<div class="b">
					<!-- <img class="imglogo" src="picture/credit.png" alt="Credit Card"> -->
				</div>
				<div class="w3-col m8 instruction">
					<div>
						<h4>ขั้นตอนการชำระเงินโดยการโอนเงินผ่านบัญชีธนาคาร</h4><br>
						<ol>
							<li>โอนเงินไปบัญขีที่ระบุด้านล่างเต็มจำนวน โดยไม่หักค่าธรรมเนียมการโอน</li><br>
							<li>เก็บหลักฐานการโอนเงิน พร้อมทั้งถ่ายภาพไว้</li><br>
							<li>แจ้งข้อมูลการโอนเงินผ่านเว็บไซต์ โดยแจ้ง วัน เวลา และจำนวนเงิน พร้อมทั้งแนบไฟล์หลักฐานการโอนที่ท่านถ่ายไว้</li><br>
							<li>เจ้าหน้าที่จะใช้เวลาตรวจสอบ 1-2 วัน และส่งอีเมล์ยืนยันการสมัครให้ท่านทราบ</li><br>
						</ol>
					</div>
					<div class="w3-border w3-padding w3-margin-bottom b">
						<h2><u>ข้อมูลบัญชีธนาคารสำหรับโอนเงิน</u></h2><br>
						<div>
							<div class="w3-row-padding">
								<div class="w3-col m4">
									<h4>ชื่อธนาคาร <font color="red">   ธนาคารไทยพาณิชย์</font></h4>
								</div>
								<div class="w3-col m4"><h4>ประเภทบัญชี <font color="red">   ออมทรัพย์</font></h4></div>
								<div class="w3-col m4"><h4>หมายเลขบัญชี <font color="red">   206-245147-7</font></h4></div>
								<div class="w3-col m4"><h4>ชื่อบัญชี <font color="red">   บริษัท อินโนสปริ้นท์ จำกัด</font></h4></div>
							</div>
						</div>
					</div>
					<div class="b">
						<div class="sc-hwwEjo cyNieD w3-padding">
							<span><h3>ราคารวม</h3></span>
							<span ><font color="red" ><h2><u> <?=$sum?> บาท</u></h2></font></span>
						</div><br>
						<a href="confirmpayment.php?pay=<?=$sum?>"><button class="btn1 b">แจ้งการโอนเงิน</button><br></a>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<?php require_once("footer.php"); ?>