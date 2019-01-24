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
      <li class="active"><a href="#">Delete Entry</a></li>
      <li ><a href="delete.php">Back</a></li>
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
$dbname = "griet"; 
//$table1='mentors'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$y=date("Y");
$z=date("m");
$roll1=$_POST["batch"];
$roll=substr($roll1,2,4);
$table='students'.$roll;
$sql="DROP TABLE {$table} ";
if ($conn->query($sql) === TRUE) {
    echo "<center><x>Personal info of student with roll:".$roll1." deleted.</x></center>";
    } else {
    echo "<center><x>Error: " . $conn->error."</x></center>";
    }
/*$table1='cse'.$roll;
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
$t=$table1;
for($i=1;$i<$sem;$i++){
    $table1=$table1.$i;
$sql="DELETE from {$table1} where `roll` = '".$roll1."' ";
$table1=$t;}
if ($conn->query($sql) === TRUE) {
    echo "<center><x>Academic info of student with roll:".$roll1." deleted.</x></center>";
    } else {
    echo "<center><x>Error: " . $conn->error."</x></center>";
}
*/
?>
</body>
</html>