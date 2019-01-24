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
<body>
  <?php
if(!isset($_SESSION['user']))
{
  $url='login.php';
  $permanent=false;
header('Location: ' . $url, true, $permanent ? 301 : 302);
}
?><div class="container">
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
      <li class="active"><a href="#"> New Students</a></li>
      <li><a href="scpersonal.php"> Back</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
  <?php
  if($_POST["personal"]=="bulk")
  echo '
<div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   action="newstudents.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; border-radius:4px; height:50%; padding:40px 50px 60px 50px;
  background:#CE4914; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Create Student Dataset</center></h2>   
 <br>
 <input type="text" placeholder="Enter Batch ___ ex:2014" name="year1" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
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
</div>';
else
{
  echo '
  <div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   action="newstudents1.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; border-radius:4px; height:50%; padding:40px 50px 60px 50px;
  background:#CE4914; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Create Student Dataset</center></h2>   
 <br>
  <input type="text" placeholder="Enter RollNo ___ ex: 14241A0500" name="roll" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Name ___ ex: Sai" name="name" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Section ___ ex: C" name="sec" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Rank ___ ex: 8000" name="rank" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter DOB ___ ex: 11/11/1996" name="dob" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Father\'s Name ___ ex: Ram" name="father" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Gender ___ ex: Male" name="gen" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Telephone1 ___ ex: 9912199121" name="t1" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Telephone2 ___ ex: 9912199122" name="t2" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Telephone3 ___ ex: 9912199123" name="t3" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter EMail " name="email" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Address1 " name="a1" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Address2 " name="a2" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Street " name="street" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Area " name="area" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter City " name="city" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="text" placeholder="Enter Pin Code" name="pin" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <input type="submit" name="submit" id="submit" value="Upload" style="  width:50%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  </form></center>
    </div>
  </div>
</div>
</div>          
</div>
  ';
}
?>
</body>
</html>
<!--
<form action="newentries.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload"/>
    <input type="submit" value="Upload Image" name="submit"/>
</form>

</body>
</html> -->