<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Runner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" media="screen" href="search.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #9b41db;
            color: white;
        }
    </style>
    
</head>
<body>
    
<?php require_once("header.php"); ?>

<div class="container">
	<div class="row">
		<center> <h2>ค้นหานักวิ่ง</h2> </center>
           <div id="custom-search-input">
               <center>
                            <div class="input-group col-md-6">
                                <input type="text" class="  search-query form-control" placeholder="ค้นหาจากชื่อ-นามสกุล" size="100"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                
                            <br>

                            <div class="input-group col-md-6">
                                <input type="text" class="  search-query form-control" placeholder="ค้นหาจากเลขที่ใบสมัคร" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                            <br>

                            <div class="input-group col-md-6">
                                <input type="text" class="  search-query form-control" placeholder="ค้นหาจากเลขบัตรประชาชนหรือพาสปอร์ต" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                </center>
            </div>
	</div>
</div>
<br>

<!--dropdown-->

<div class="container">
    <center>
	<div class="row">
		<!-- Our Special dropdown has class show-on-hover -->
        <div class="btn-group show-on-hover">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            เลือกประเภทการวิ่ง <span class="caret"></span>
          </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Full Marathon</a></li>
                <li><a href="#">Half Marathon</a></li>
                <li><a href="#">Mini Marathom</a></li>
                <li><a href="#">Fun run</a></li>
            </ul>
        </div>
    </div>
</center>
</div>

<!--table-->
<div class="container">
  <h3><p>ผลลัพธ์</p></h3>                                                                                   
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>อายุ</th>
        <th>สัญชาติ</th>
        <th>ประเภทการวิ่ง</th>
        <th>Waiver</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>AAA</td>
        <td>BBB</td>
        <td>35</td>
        <td>TH</td>
        <td>Mini marathon</td>
        <td><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></td>
      </tr>

      <tr>
        <td>2</td>
        <td>XXX</td>
        <td>YYY</td>
        <td>24</td>
        <td>TH</td>
        <td>Half Marathon</td>
        <td><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></td>
      </tr>

      <tr>
        <td>3</td>
        <td>ABC</td>
        <td>XYZ</td>
        <td>22</td>
        <td>TH</td>
        <td>Full Marathon</td>
        <td><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<br>

<!--Pagination-->
<center>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</center>

</body>
</html>