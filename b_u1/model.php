<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<div data-role="page">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div id="pageone" data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" data-position-to="window">
    <img src="picture/img1.jpg" alt="Skaret View" style="width:200px;"></a>
    <div data-role="popup" id="myPopup">
      <p>This is my picture!</p> 
      <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <img src="picture/img1.jpg" style="width:800px;height:400px;" alt="Skaret View">
    </div>
  </div>

  <div id="pageone2" data-role="main" class="ui-content">
    <p>Click on the image to enlarge it.</p>
    <p>Notice that we have added a "back button" in the top right corner.</p>
    <a href="#myPopup1" data-rel="popup" data-position-to="window">
    <img src="picture/img2.jpg" alt="Skaret" style="width:200px;"></a>

    <div data-role="popup" id="myPopup1">s
      <p>This is my picture!</p> 
      <a href="#pageone2" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <img src="picture/img2.jpg" style="width:800px;height:400px;" alt="Skaret">
    </div>
  </div>

              <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" value="Male">Male
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" value="Female">Female
                            </label>
                        </div>
                    </div>
                </div>
              </div>
  
</div> 
<div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</body>
</html>


