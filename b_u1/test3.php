<?php require_once("header.php"); ?>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="css/registerdetail.css" rel="stylesheet">
<script src="javascript/payment.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="javascript/validateregister.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="carousel-inner">
        <div class="item active" > 
            <center><img src="<?=$row["img"]?>" style="width:820px; height:400px" class="img-responsive"></center>
            <br>
        </div>
        <form name="test" method="post" action="add/addbill.php">
            <button class="btn1" >สมัครเลย</button>
        </form>
    </div>

	<div class="row">

        <!-- <div class="col-md-3 col-sm-6 col-xs-6">      
            <button data-target="step-3" class="btn btnAgenda blue"><i class="mar-course"></i> รายละเอียดการแข่งขัน</button>    
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">      
            <button href="category" class="btn btnAgenda blue"><i class="mar-course"></i> แผนที่การแข่งขัน</button>    
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">      
            <button data-target="category" class="btn btnAgenda blue"><i class="mar-course"></i> ประเภทการเเข่ง</button>    
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">      
            <button data-target="category" class="btn btnAgenda blue"><i class="mar-course"></i> รายชื่อนักวิ่ง</button>    
        </div> -->

        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav">
                <li class="active">
                <a href="#step-1"><button class="btn list-group-item-heading">รายละเอียดการแข่งขัน</button></a>
                </li>
            </ul>        
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav">
                <li class="active">
                    <a href="#step-2"><button class="btn list-group-item-heading">แผนที่การแข่งขัน</button></a>
                </li>
            </ul>       
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav">
                <li class="active">
                    <a href="#step-3"><button class="btn list-group-item-heading">ประเภทการเเข่ง</button></a>
                </li>
            </ul>       
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <ul class="nav">
                <li class="active">
                    <a href="#step-4"><button class="btn list-group-item-heading">รายชื่อนักวิ่ง</button></a>
                </li>
            </ul>       
        </div>
	</div>

    <div>
    <div class="" id="step-1">
        <div class="col-xs-12">
			<div class="col-md-12 well">
			<center>
                <h2><u>กำหนดการ</u></h2><br>
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
                    <button class="btnn" >สมัครเลย</button>
                </form>
			</div>
		</div>
    </div>

    <div class="" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">
            <center><img src="<?=$row["map"]?>" style="width:600px; height:500px" class="img-responsive"></center>
                
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn1" >สมัครเลย</button>
                </form>
			</div>
        </div>
    </div>

    <div class="" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
            <center>
                <?php
                    $text = file($row["generation_competing"]);     
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                </center>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn2" >สมัครเลย</button>
                    </form>
			</div>
        </div>
    </div>

	<div class="" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well" style="margin-bottom:60px;">
            <center>
                <?php
                    $text = file($row["generation_competing"]);     
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                </center>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn2" >สมัครเลย</button>
                    </form>
			</div>
        </div>
    </div>
    </div>

    <!-- <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12 well" style="margin-bottom:60px;">
            <center>
                <?php
                    $text = file($row["generation_competing"]);     
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                </center>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn2" >สมัครเลย</button>
                    </form>
			</div>
        </div>
    </div> -->
</div>

    <?php require_once("footer.php"); ?>   