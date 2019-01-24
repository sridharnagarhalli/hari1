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
<body >
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
      <a class="navbar-brand" href="#" style="width:980px; font-size:20px;">Student Information Centre</a>
     </div>
    <ul class="nav navbar-nav">
       <li style="width:80px; font-size:16px;"><a href="home.php">Home</a></li>
       <li><a href="index1.html" style="width:80px; font-size:16px;">Profile</a></li>
       <li class="active" ><a href="#" style="width:60px; font-size:16px;">Add</a></li>
       <!--<li><a href="update.php" style="width:80px; font-size:16px;">Update</a></li>-->
       <li><a href="scdelete.php" style="width:80px; font-size:16px;">Delete</a></li>
     </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
      <div class="col-sm-12">
          <br><br><br><br><br></div>
          </div>
          <div class="row">
    <div class="col-sm-4" >
<div class="panel panel-default" style="border: 1px solid grey; width:80%; height:200px;
box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.5), 0 12px 20px 0 rgba(0, 0, 0, 0.4)">
  <div class="panel-heading"><a href="mentors.php" class="btn" role="button" style="width:100%; background:#6028D2">
      <x>Add Mentors Details</x></a></div>
  <div class="panel-body"><x>Create a new table for storing the details of mentors for a particular batch.</x></div>
</div>
        </div>
        <div class="col-sm-4" >
        <div class="panel panel-default" style="border: 1px solid grey; width:80%; height:200px;
        box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.5), 0 12px 20px 0 rgba(0, 0, 0, 0.4)">
  <div class="panel-heading"><a href="scpersonal.php" class="btn" role="button" style="width:100%; background:#CE4914">
      <x>Add Students Details</x></a></div>
  <div class="panel-body"><x>Create a new table for storing the personal details of students for a particular batch.</x>
</div>
</div>
</div>
    <div class="col-sm-4" >
       <div class="panel panel-default" style="border: 1px solid grey; width:80%; height:200px;
box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.5), 0 12px 20px 0 rgba(0, 0, 0, 0.4)">
  <div class="panel-heading"><a href="scsem.php" class="btn" role="button" style="width:100%; background:#AB9E12">
      <x>Add Semister Details</x></a></div>
  <div class="panel-body"><x>Create a new table for storing the semister details of students belonging to a particular batch.</x></div>
</div>
        </div>
   </div>
</div>
</body>
</html>