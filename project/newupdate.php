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
      <li class="active"><a href="#">Update Info</a></li>
      <li><a href="update.php">Back</a></li>
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
    <?php
    error_reporting(E_ALL ^ E_NOTICE); 
$roll1=$_POST["year"];
$x=$_POST["sel"];
$roll=substr($roll1,0,2);
$y=date("Y");
$z=date("m");
$sem=substr($y,2,4)-$roll;
if($z>5)
{
    $sem=2*$sem+1;
}else{
    $sem=2*$sem;
}
if($sem>8)
{
    $sem=8;
}
echo '<div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   action="modify.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; border-radius:4px; height:50%; padding:40px 50px 60px 50px;
  background:#10C9D3; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Update Data Entries</center></h2><br>
  <input type="text" name="roll" id="roll" value="'.$roll1.'" readonly style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;"/><br>';
if($x=="academic")
{
    echo'   
 <br><select id="sem" name="sem" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
 <option value="semister">Semister</option>';
 for($i=1;$i<$sem;$i++)
 echo '<option value="'.$i.'">'.$i.'</option>';
 echo '</select> <br><br/><select id="sel" name="sel" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">   
   <option value="sub1">Subject 1</option>
   <option value="sub2">Subject 2</option>
   <option value="sub3">Subject 3</option>
   <option value="sub4">Subject 4</option>
   <option value="sub5">Subject 5</option>
   <option value="sub6">Subject 6</option>
 <option value="lab1">Lab 1</option>
   <option value="lab2">Lab 2</option>
   <option value="lab3">Lab 3</option>
   <option value="Total">Total</option>
   <option value="Per(%)">Percentage</option>
   <option value="Credits">Credits</option>
</select> <br><br/>';
}
else
{
    echo '<br><select id="personal" name="personal" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
 <option value="roll">Roll No</option>
 <option value="Name">Name</option>
 <option value="Setion">Section</option>
 <option value="Rank">Rank</option>
 <option value="DOB">Date Of Birth</option>
 <option value="Gen">Gender</option>
 <option value="Telephone1">Telephone 1</option>
 <option value="Telephone2">Telephone 2</option>
 <option value="Telephone -3">Telephone 3</option>
 <option value="e-mail">E-Mail</option>
 <option value="Address 1">Address 1</option>
 <option value="Address2">Address 2</option>
 <option value="Street">Street</option>
 <option value="Area">Area</option>
 <option value="City">City</option>
 <option value="Pin No.">Pin No.</option>
 </select> <br><br/>';
}
echo '<input type="text" placeholder="enter new value" name="newval" id="newval" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;"></input><br><br>
<input type="submit" name="submit" id="submit" value="update" style="  width:50%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  </form></center>
    </div>
  </div>
</div>
</div>          
</div>';
?>
</body>
</html>