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
      <li class="active"><a href="#"> New Mentors</a></li>
      <li><a href="scsem.php">Back</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$year1=$_POST["roll"];
$year=substr($year1,0,2);
$table='students'.$year;
$dbname = "griet"; 
//$table1='students'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$i=0;
        $c1=$_POST["roll"];$c2=$_POST["sem"];$c3=$_POST["s1"];$c4=$_POST["s2"];
        $c5=$_POST["s3"];$c6=$_POST["s4"];$c7=$_POST["s5"];$c8=$_POST["s6"];
        $c9=$_POST["l1"];$c10=$_POST["l2"];$c11=$_POST["l3"];$c12=$_POST["tot"];
        $c13=$_POST["per"];$c14=$_POST["credits"];
$year=substr($c1,0,2);
$table='cse'.$year;
$table=$table.$c2;
if($year>13 && $c2<4)
{
        $sql = "INSERT INTO {$table} ( `roll`, `sub1`, `sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`lab1`,
        `lab2`,`lab3`,`Total`,`Per(%)`,`Credits`) VALUES 
        ('$c1','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14')";
}
else
{
     $sql = "INSERT INTO {$table} ( `roll`, `sub1`, `sub2`,`sub3`,`sub4`,`sub5`,`lab1`,
        `lab2`,`lab3`,`Total`,`Per(%)`,`Credits`) VALUES 
        ('$c1','$c3','$c4','$c5','$c6','$c7','$c9','$c10','$c11','$c12','$c13','$c14')";
}
        if ($conn->query($sql) === TRUE) {
    echo "<center><x>".$year1." student Details uploaded</x></center>";
} 
else {
   echo "<center><x>Error: " . $sql . "<br>" . $conn->error."</x></center>";
}


?> 
</body>
</html>