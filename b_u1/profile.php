<!doctype html>
<?php require_once("header.php"); ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/profile.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="javascript/validateregister.js"></script>


  <div class="row" style="margin-bottom:50px;margin-top:50px">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
      <div class="panel panel-info">
        <div class="panel-heading">
            <center><h4 class="panel-title"><strong>ข้อมูลส่วนตัว</strong></h4></center> 
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> 
              <img alt="User Pic" src="picture/default.png" class="img-responsive"><br>
              <center><button class="glyphicon glyphicon-pencil" onclick="document.getElementById('id01').style.display='block'"><u>แก้ไขข้อมูล</u></button></center>
            </div>
            <div class=" col-md-6 col-lg-6 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>ชื่อ</td>
                    <td>นามสกุล</td>
                  </tr>
                  <tr>
                    <td>อายุ</td>
                    <td>เพศ</td>
                  </tr>
                  <tr>
                    <td>เลขบัตรประชาชน/พาสปอร์ต</td>
                    
                  </tr>
                  <tr>
                    <td>เบอร์โทรศัพท์</td>
                  </tr>
                  <tr>
                    <td>อีเมลล์</td>
                  </tr>
                  <tr>
                    <td>วัน/เดือน/ปีเกิด</td>  
                  </tr>
                  <tr>
                    <td>ที่อยู่</td>
                    <td>จังหวัด</td>  
                  </tr>
                  <tr>
                    <td>ประเทศ</td>  
                    <td>สัญชาติ</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <center>
        <a href="homepage.php"><button type="button" class="btn1">กลับหน้าหลัก</button></a>
      </center><br>
    </div>
  </div>

  <!--modal-->

  <div class="w3-container">
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <div class="row" style="margin-bottom:30px;margin-top:50px">
              <div class="" >
                  <div class="panel panel-info">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-3 col-lg-3 " align="center"> 
                            <img alt="User Pic" src="picture/default.png" class="img-responsive"><br>
                            <center><input type="file" multiple></center>
                          </div>
                          <div class=" col-md-6 col-lg-6 "> 
                            <table class="table table-user-information">
                              <tbody>
                                <tr>
                                  <td>ชื่อ</td>
                                  <td>นามสกุล</td>
                                </tr>
                                <tr>
                                  <td>อายุ</td>
                                  <td>เพศ</td>
                                </tr>
                                <tr>
                                  <td>เลขบัตรประชาชน/พาสปอร์ต</td>
                                  
                                </tr>
                                <tr>
                                  <td>เบอร์โทรศัพท์</td>
                                </tr>
                                <tr>
                                  <td>อีเมลล์</td>
                                </tr>
                                <tr>
                                  <td>วัน/เดือน/ปีเกิด</td>  
                                </tr>
                                <tr>
                                  <td>ที่อยู่</td>
                                  <td>จังหวัด</td>  
                                </tr>
                                <tr>
                                  <td>ประเทศ</td>  
                                  <td>สัญชาติ</td>
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
          <!-- <a href="profile.php"><button type="button" class="btn btn-danger">ยกเลิก</button></a> -->
          <a href="profile.php"><button type="button" class="btn btn-success">บันทึก</button></a>
          </center><br>
        </div>
      </div>
    </div>
  </div>

<?php require_once("footer.php"); ?>