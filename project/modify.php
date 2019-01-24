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
      <li class="active"><a href="#">Update Info</a></li>
      <li><a href="update.php">Back</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
    <?php
error_reporting(E_ALL ^ E_NOTICE); 
$x=$_POST["sem"];
$y=$_POST["sel"];
$z=$_POST["personal"];
$a=$_POST["roll"];
//$a=strtoupper($a);
$nv=$_POST["newval"];
$roll=substr($a,0,2);
$servername = "localhost";
$username = "root";
$password = "";       
$dbname = "griet"; 
//$table1='mentors'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($z!="")
{
    $table='students'.$roll;
    $sql="UPDATE {$table} SET `$z`='".$nv."'  where `roll`='".$a."' ";
            if ($conn->query($sql) === TRUE) {
    echo "<center>Updated Sucessfully.</center>";
    } else {
    echo "<center><x>Error: " . $conn->error."</x></center>";
    }
}
elseif($x!="semister")
{
    if($y!="")
    {
        if($nv!="")
        {
            $table='cse'.$roll;
            $table.=$x;
            $sql="UPDATE {$table} SET `$y`='".$nv."'  where `roll`='".$a."' ";
            if ($conn->query($sql) === TRUE) {
    echo "<center>Updated Sucessfully.</center>";
    } else {
    echo "<center><x>Error: " . $conn->error."</x></center>";
    }
        }
        else
        {
            echo'<center><x> go back and enter new value</x></center>';
        }
    }
    else
    {
        echo'<center><x>wrong input</x></center>';
    }
}
else
{
    echo'<center><x>wrong input</x></center>';
}
?>