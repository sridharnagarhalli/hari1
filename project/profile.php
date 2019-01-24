<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GRIET - SIC</title>
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
      <a class="navbar-brand" href="#">Student Profile</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
      <li ><a href="index1.html"> Home</a></li>
       <li class="active"><a href="#"> profile</a></li>
       <li><a href="sugges.html">Suggestions</a></li>
    </ul>
  </div>
</nav></div></div>  
<div class="container">
    
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#ddd;">
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                  <img src="grietic1.jpg" id="stu" />
              </div>
              <div class="col-sm-4">
                  <h3>Roll Number:</h3><x> 124241A05C7</x><BR>
                  <h3>Name:</h3><x> BALA SUNDEEP</x><BR>
                  <h3>Course:</h3><x> BTECH<BR>
                  <h3>Department:</h3><x> CSE<BR>
              </div>
              <div class="col-sm-4">
                  <h3>Section:</h3><x> C</x><BR>
                  <h3>Semester:</h3><x> 06</x><BR>
                  <h3>Mentor:</h3><x> VIJETHA</x><BR>
              </div>
  	        </div>
      </div>
  </div>
  <div class="panel-body">
      <h1> Personal details </h1><hr>
      <div class="row">
              <div class="col-sm-6">
                  <h3>Father:</h3><x> KUMAR</x><BR>
                  <h3>Mother:</h3><x> LAKSHMI</x><BR>
                  <h3>Email:</h3><x> balasundeep@gmail.com</x><BR>
              </div>
              <div class="col-sm-6">
                  <h3>Phone:</h3><x> 8394582374</x><BR>
                  <h3>Address:</h3><x> H-NO:202, BACHUPALLY,<BR>HYDERABAD, 5000090</x>
              </div>
      </div>
      <h1> Academic details </h1><hr  style="border: 0.5px solid black;">
      <div class="row">
         <!--     <div class="col-sm-6">
                  <h3 style="font-size:25px;">Total aggregate:</h3>
              </div>
              <div class="col-sm-6">
                  <h3 style="font-size:25px;">Total backlogs:</h3>
              </div>
      </div><br>-->
  <table class="table table-hover">
    <thead>
      <tr>
        <th style="font-size:20px;">Category</th>
        <th>I-I</th>
        <th>I-II</th>
        <th>II-I</th>
        <th>II-II</th>
        <th>III-I</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th style="font-size:20px;">Aggregate</th>          
        <td>86</td>
        <td>80</td>
        <td>82</td>
        <td>84</td>
        <td>83</td>
      </tr>
      <tr>
        <th style="font-size:20px;">Backlogs</th>          
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <th style="font-size:20px;">Credits</th>          
        <td>25</td>
        <td>25</td>
        <td>25</td>
        <td>25</td>
        <td>25</td>
      </tr>
      
    </tbody>
  </table>
<br>
<div class="col-sm-6">
  <h3>Total Aggregate: </h3><x> 83%</x><br>
<h3>Total Backlogs: </h3><x> 0</x></div>
<div class="col-sm-6">
<h3>Attendance:</h3><x> 79%</x><br>
    <h3>Status: </h3><x> Promoted</x>
    </div>
  </div>
</div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_gs_container&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2016 14:16:33 GMT -->
</html>
