<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GRIET-SIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/bootstrap.min.js"></script>
</head>
<body><div class="container">
   <center> <img class="img-responsive" src="griet1.png" alt="Chania"></center> </div>
<div class="container-fluid">
  <div class="container-fluid">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Information System</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"> Home</a></li>
      <li class="active"><a href="#"> New Mentors</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
  <?php
if(!isset($_SESSION['user']))
{
  $url='login.php';
  $permanent=false;
header('Location: ' . $url, true, $permanent ? 301 : 302);
}
?>
<div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   action="newentries.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; border-radius:4px; height:50%; padding:40px 50px 60px 50px;
  background:#6028D2; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Create Mentor Dataset</center></h2>   
 <br>
 <input type="text" placeholder="Enter Batch ___ ex:2014" name="year" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="file"  placeholder=" .csv files only" name="fileToUpload" id="fileToUpload" style="width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  
  <input type="submit" name="submit" id="submit" value="Upload File" style="  width:50%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
<x>*</x>please upload only<x> .csv</x> files
  </form></center>
    </div>
  </div>
</div>
</div>          
</div>
</body>
</html>
<!--
<form action="newentries.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload"/>
    <input type="submit" value="Upload Image" name="submit"/>
</form>

</body>
</html> -->