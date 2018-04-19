<!doctype html>
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "marathon";

    $connect  = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($connect, "utf8");

    function make_query($connect)
    {
    $query = "SELECT * FROM events ORDER by race_day DESC LIMIT 3";
    $result = mysqli_query($connect, $query);
    return $result;
    }
    

    function make_slide_indicators($connect)
    {
     $output = ''; 
     $count = 0;
     $result = make_query($connect);
     while($row = mysqli_fetch_array($result))
     {
      if($count == 0)
      {
       $output .= '
       <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
       ';
      }
      else
      {
       $output .= '
       <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
       ';
      }
      $count = $count + 1;
     }
     return $output;
    }
    
    function make_slides($connect)
    {
    $connect->set_charset("urf8");
     $output = '';
     $count = 0;
     $result = make_query($connect);
     while($row = mysqli_fetch_array($result))
     {
      if($count == 0)
      {
       $output .= '<div class="item active">';
      }
      else
      {
       $output .= '<div class="item">';
      }
      $go = "www.google.com";
      $output .= '
       <img src='.$row["img"].' style="width:100%; height:50ch"  class="center" />
       <form name="test" method="post" action="registerdetail.php?id='.$row["event_id"].'">
            <button id="myButton"  type="submit" class="btn" >REGISTRATION NOW</button>
        </form>
      </div>
      ';
      $count = $count + 1;
     }
     return $output;
    }

    
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php require_once("header.php"); ?>
    <!-- slide -->
    <link href="css/css_new.css" rel="stylesheet">
    
    <div class="container">
        <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php echo make_slide_indicators($connect); ?>
            </ol>

            <div class="carousel-inner">
                <?php echo make_slides($connect); ?>
            </div>
            <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>

        </div>
   </div>
   <!-- <script type="text/javascript">
        document.getElementById("myButton").onclick =location.href='registerdetail.php?id=<?=$row["event_id"]?>';
    </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
<?php require_once("footer.php"); ?>