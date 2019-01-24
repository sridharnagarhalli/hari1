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
      <li><a href="scpersonal.php">Back</a></li>
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
        $c1=$_POST["roll"];$c2=$_POST["name"];$c3=$_POST["sec"];$c4=$_POST["rank"];
        $c5=$_POST["dob"];$c6=$_POST["father"];$c7=$_POST["gen"];$c8=$_POST["t1"];
        $c9=$_POST["t2"];$c10=$_POST["t3"];$c11=$_POST["email"];$c12=$_POST["a1"];
        $c13=$_POST["a2"];$c14=$_POST["street"];$c15=$_POST["area"];$c16=$_POST["city"];$c17=$_POST["pin"];
        $sql = "INSERT INTO {$table} ( `roll`, `Name`, `Section`,`Rank`,`DOB`,`Father's Name`,`Gen`,`Telephone1`,
        `Telephone2`,`Telephone -3`,`e-mail`,`Address 1`,`Address2`,`Street`,`Area`,`City`,`Pin No.`) VALUES 
        ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','$c16','$c17')";
        if ($conn->query($sql) === TRUE) {
    echo "<center><x>".$year1." student Details uploaded</x></center>";
} 
else {
   echo "<center><x>Error: " . $sql . "<br>" . $conn->error."</x></center>";
}


?> 
</body>
</html>