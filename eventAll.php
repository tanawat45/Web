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
$year = $_GET['year'] ;
?>

<!DOCTYPE html>
<html>
    
<head>
        <title>Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- css file -->   
        <link href="css/eventAll.css" rel="stylesheet" type="text/css">
        
    
 
<?php require_once("header.php"); ?>

<br>
<center>
<div class="container">
                <div class="row">
                        <p class="lead"><h3>ค้นหางานวิ่งจากเดือน หรือ ปี</h3></p>    <br>                   
													                  
                                    <!-- Our Special dropdown has class show-on-hover -->
                                    <div class="btn-group show-on-hover">
                                    <button type="button" class=" btn-danger dropdown-toggle" data-toggle="dropdown">
                                       <?=$year?> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
										<li><a href="eventAll.php?year=2018">2018</a></li>
                                        <li><a href="eventAll.php?year=2017">2017</a></li>
                                        <li><a href="eventAll.php?year=2016">2016</a></li>
                                        <li><a href="eventAll.php?year=2015">2015</a></li>
                                        <li><a href="eventAll.php?year=2014">2014</a></li>
                                        <li><a href="eventAll.php?year=2013">2013</a></li>
									</ul>
                                    </div>
                </div>
        </div>
</center>

<?php 
$sql = "SELECT * FROM events WHERE YEAR(race_day) = $year";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()):
$date = explode('-', $row['race_day']);
$years = $date[0];
$date_date = getdate();
switch ($date[1])
{ 
case 1 : $month="ม.ค."; break;
case 2 : $month="ก.พ."; break;
case 3 : $month="มี.ค."; break;
case 4 : $month="เม.ย."; break;
case 5 : $month="พ.ค."; break;
case 6 : $month="มิ.ย."; break;
case 7 : $month="ก.ค."; break;
case 8 : $month="ส.ค."; break;
case 9 : $month="ก.ย."; break;
case 10 : $month="ต.ค."; break;
case 11 : $month="พ.ย."; break;
case 12 : $month="ธ.ค."; break;
}
$day = $date[2]; 
?>
<br><br>
<!--event-->
<div class="container">
            <div class="w3-col">
                <div class="row">                
                    <ul class="event-list">
                        <!--cmu-->                                                
                            <li>
                                <time datetime=<?=$row['race_day']?>>
                                    <span class="day"><?=$day?></span>
                                    <span class="month"><?=$month?></span>
                                    <span class="year"><?=$years?></span>
                                    <span class="time">All Day</span>
                                </time>
                                <img  src="<?=$row["img"]?>"/>
                                <div class="info">
                                    <h2 class="title"><?=$row["name"]?></h2>
                                    <ul>
                                        <?php if(!empty($row['flag_full'])){?>
                                        <li style="width:25%;"><span class="fa fa-male"></span> [42.195K]</li>
                                        <?php } ?>
                                        <?php if(!empty($row['flag_half'])){?>
                                        <li style="width:25%;"><span class="fa fa-male"></span> [21.1K]</li>
                                        <?php } ?>
                                        <?php if(!empty($row['flag_mini'])){?>
                                        <li style="width:25%;"><span class="fa fa-male"></span> [10.5K]</li>
                                        <?php } ?>
                                        <?php if(!empty($row['flag_fun'])){?>
                                        <li style="width:25%;"><span class="fa fa-child"></span> [4.6K]</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="detail">
                                    <ul>
                                        <li class="additional" style="width:25%;"><a href="registerdetail.php?id=<?=$row['event_id']?>"> ข้อมูลเพิ่มเติม <span class="glyphicon glyphicon-info-sign"></span> </a></li>
                                        <li class="register" style="width:25%;"><a href="registerdetail.php?id=<?=$row['event_id']?>"> สมัครวิ่ง <span class="glyphicon glyphicon-pencil"></span></a></li>
                                        <li class="searchrunner" style="width:25%;"><a href="search.php"> ค้นหานักวิ่ง <span class="glyphicon glyphicon-search"></span></a></li>
                                    </ul>
                                </div>
                            </li>
<?php endwhile;?>
                    </ul> 
                </div>          
            </div>
        </div>

</body>
</html>

<?php $conn->close();?>




    


