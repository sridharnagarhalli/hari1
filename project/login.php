<?php  session_start(); ?>  <!--starting a php session -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GRIET-SIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">  <!--link for bootstrap css stylesheet predefined file-->
  <link rel="stylesheet" href="./css/style.css">        <!-- link for bootstrap css predefined file-->
  <script src="./js/bootstrap.min.js"></script>   <!-- link for bootstrap javascript predefined file-->
</head>
<body><div class="container">
   <center> <img class="img-responsive" src="griet1.png" alt="Chania"></center> </div>
<div class="container-fluid">
  <div class="container-fluid">
  <nav class="navbar navbar-inverse"> <!-- navbar : it is used to display a list as bar used for navigation --> 
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Information System</a>   <!--heading for navbar-->
    </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#"> Login</a></li>  <!-- only one element in navbar-->
    </ul>
  </div>
</nav>
</head>
<body>
<div class="container">
  <div class="row">
    <!--  loign form for admin  -->
    <div class="col-sm-12"><center>     <!--on clicking the submit button the page will redirect to login1.php using post method and check for validity acordingly -->
<form   action="login1.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; 
border-radius:4px; height:50%; padding:40px 50px 60px 50px; 
background:rgb(88,170,120); box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Admin Login</center></h2>   
 <br>     <!--login id using text field-->
 <input type="text" placeholder="Enter Login ID" name="id" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>    <!--Password using text field-->
  <input type="password"  placeholder="Enter Password " name="pass" id="pass" style="width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <!-- submit button -->
  <input type="submit" name="submit" id="submit" value="Login" style="  width:50%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br> 
<x><a href="fpass.php" style="color: light blue">forgot password?</a></x>   <!-- link redirecting to fpass.php when the admin forgets the password-->
  </form></center>
    </div>
  </div>
</div>
</div>          
</div>
</body>
</html>
