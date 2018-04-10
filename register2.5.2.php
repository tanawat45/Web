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
$sum = 0;

$sql = "SELECT * FROM runners_bills WHERE bill_id = $bill_id";
$result = $conn->query($sql);

$sqlB = "SELECT * FROM events WHERE event_id = $event_id";
$resultB = $conn->query($sqlB);
$rowB = $resultB->fetch_assoc();

?>


<!doctype html>
<?php require_once("header.php"); ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- <link href="css/acss.css" rel="stylesheet"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="javascript/validateregister.js"></script>
<!------ Include the above in your HEAD tag ---------->


 <!-- process step bar -->
 <!-- <div class="container">
        <ul class="progressbar">
            <li class="active">ลงทะเบียน</li>
            <li class="active">ตรวจสอบ</li>
            <li class="active">ยืนยันข้อมูล</li>
            <li>ชำระเงิน</li>
            <li>เสร็จสิ้น</li>
        </ul>
</div> -->
<center><h4 style="color:green">ความคืบหน้าในการสมัคร</h4></center>
<center><div class="container">
        <div class="progress" style="width:50%;background:gray;height:20px;margin-top:10px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;background:green">
            60%
            </div>
        </div>
    </div>
    </center>

<h4><center><strong>กรุณาตรวจสอบเเละยืนยันความถูกต้องของข้อมูลการสมัครของท่าน</strong></center></h4>
<?php while($row = $result->fetch_assoc()): 
    $text = "";
    $cost = 0;
    if(!empty($row["flag_full"])){
      $text = "Full Marathon";
      $cost = $rowB["charge_full"];
    } else if(!empty($row["flag_half"])){
      $text = "Half Marathon";
      $cost = $rowB["charge_half"];
    }else if(!empty($row["flag_mini"])){
      $text = "Mini Marathon";
      $cost = $rowB["charge_mini"];
    }else if(!empty($row["flag_fun"])){
      $text = "Funrun Marathon";
      $cost = $rowB["charge_fun"];
    }
    if($row["getting"] == "1") {$sum += 100;}
    $sum += $cost;
?>
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
              <div class="panel-heading">
                  <h4 class="panel-title"><strong>ประเภทการวิ่ง</strong>     <?php echo $text ?></h4>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="picture/default.png" class="img-circle img-responsive"> </div>
                  <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                    <?php 
                        $sqlA = "SELECT * FROM runners WHERE run_id = ".$row['run_id'];
                        $resultA = $conn->query($sqlA);
                        $rowA = $resultA->fetch_assoc();

                        $gen = "";
                        if ($rowA["sex"] == "M") $gen = "ชาย";
                        else $gen = "หญิง";

                        $date = explode('-', $rowA['brith_date']);
                        $age = date("Y") - $date[0];

                        $generation_compete = "";
                        if ($age < 20) $generation_compete = "ต่ำกว่า 19 ปี";
                        else if ($age >= 20 && $age < 30) $generation_compete = "20-29 ปี";
                        else if ($age >= 30 && $age < 40) $generation_compete = "30-39 ปี";
                        else if ($age >= 40 && $age < 50) $generation_compete = "40-49 ปี";
                        else if ($age >= 50 && $age < 60) $generation_compete = "50-59 ปี";
                        else if ($age >= 60 ) $generation_compete = "60 ปีขึ้นไป";
                    ?>
                      <tbody>
                        <tr>
                          <td>ชื่อ-สกุล</td>
                          <td><?=$rowA["frist_name"]?>         <?=$rowA["last_name"]?></td>
                        </tr>
                        <tr>
                          <td>เพศ-อายุ</td>
                          <td><?=$gen?>      <?=$age?></td>
                        </tr>
                        <tr>
                          <td>อีเมลล์</td>
                          <td><?=$rowA["email"]?></td>
                        </tr>
                          <tr>
                          <td>เบอร์โทรศัพท์</td>
                          <td><?=$rowA["phone"]?></td>
                        </tr>
                        <tr>
                          <td>รุ่น</td>
                          <td><?=$gen?>   <?=$generation_compete?>      (<?=$cost?> บาท)</td>
                        </tr>
                        <tr>
                          <td>ไซต์เสื้อ</td>
                          <?php 
                             $type_size = "";
                            if($row["size"] == '1') $type_size = "SS";
                            else if($row["size"] == '2') $type_size = "S";
                            else if($row["size"] == '3') $type_size = "M";
                            else if($row["size"] == '4') $type_size = "L";
                            else if($row["size"] == '5') $type_size = "XL";
                            else if($row["size"] == '6') $type_size = "XXL";
                          ?>
                          <td><?=$type_size?></td>
                        </tr>
                        <tr>
                          <td>การรับเสื้อและหมายเลขวิ่ง</td>
                          <?php
                            ($row['getting'] == "0")? $temp="รับด้วยตัวเองที่สถานที่จัดงาน":$temp="ส่งไปรษณีย์ (ค่าส่ง 100 บาท)";
                          ?>
                          <td><?=$temp?></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
<?php endwhile; ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>ข้อตกลงและการสละสิทธิ์เรียกร้อง</strong></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                      <div class="waiver"><div class="instruction">กรุณาอ่านข้อความข้อตกและการสละสิทธิ์เรียกร้องอย่างระมัดระวัง ข้อความดังกล่าวมีผลต่อการเรียกร้องต่างๆ ในภายหลัง หากท่านได้ยอมรับข้อตกลงในทางอิเล็คทรอนิคส์นี้แล้วหมายถึงท่านได้อ่านและทำความเข้าใจข้อความทั้งหมดที่แสดงในขั้นตอนการสมัครนี้</div><div class="content w3-border w3-padding"><div>
                        <p>1.การแข่งขันในสนามวิ่งนี้ เป็นสนามวิ่งอันทรงเกียรติ การตัดสินของคณะกรรมการถือเป็นที่สิ้นสุด
                        <br>2.ผู้สมัครเข้าแข่งขันต้องมีอายุตรงตามกลุ่มอายุที่สมัคร โดยผู้สมัครต้องแสดงบัตรประชาชนหรือหนังสือเดินทางก่อนเข้ารับรางวัล
                        <br>3.ผู้ชนะที่ลงทะเบียนไม่ถูกต้องตามกลุ่มอายุหรือประเภทที่วิ่ง จะถือว่าสละสิทธิ์ในการรับรางวัลและของที่ระลึก
                        <br>4.นักวิ่งต้องผ่านจุด Check Point ครบถ้วน พร้อมแสดงสัญลักษณ์
                        <br>5.เส้นทางการแข่งขัน ได้รับการวัดพิสูจน์อย่างเป็นทางการ โดยผู้แทนเทคนิคของสมาคมกรีฑาแห่งประเทศไทย
                        <br>6.ภาพถ่ายของผู้เข้าแข่งขันถือเป็นทรัพย์สินของ Running Thailand และขอสงวนสิทธิ์ในการนำไปใช้เพื่อการประชาสัมพันธ์
                        <br>7.ไม่สามารถขอคืนเงินค่าสมัครได้
                        <br>8.หากเกิดอุบัติเหตุใดๆแก่นักกีฬา หรือผู้เข้าร่วมกิจกรรม ทั้งระหว่างแข่งขัน และร่วมกิจกรรม นักกีฬาและผู้เข้าร่วมกิจกรรม จะไม่เรียกร้องค่าเสียหายใดๆ กับทางผู้จัดทั้งสิ้น นักกีฬาที่สมัครถือว่ารับทราบเรียบร้อยแล้ว
                        </p>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="agree"><input type="checkbox" class="w3-check" value="on"><span>ฉันได้อ่านและยอมรับข้อตกลงและเงื่อนไขการสละสิทธิ์ตามสัญญาแล้ว</span></div></div>    
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<center>
<button type="button" class="btn btn-warning"><a href="register2.5.1.php">ย้อนกลับ</a></button>
<button type="button" class="btn btn-warning"><a href="payment.php">ยืนยัน</a></button>
</center><br>

<?php
$_SESSION['sum'] = $sum;
$conn->close();
require_once("footer.php");
?>   
