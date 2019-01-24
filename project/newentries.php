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
      <li><a href="mentors.php">Back</a></li>
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
$year1=$_POST["year"];
$year=substr($year1,2,4);
$table='mentors'.$year;
$dbname = "griet"; 
//$table1='mentors'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE TABLE {$table} (
section varchar(3), 
froms int(2),
tos int(2),
mentor VARCHAR(200)
)";
 $i=0;$test=0;
if ($conn->query($sql) === TRUE) {
    if(isset($_POST["submit"])) {
    $myfile = $_FILES["fileToUpload"]["name"];
    $handle=fopen($myfile,"r");
    while(($fp=fgetcsv($handle,1000,","))!==false)
    {
      if($test>0){
        $c1=$fp[0];
        $c2=$fp[1];
        $c3=$fp[2];
        $c4=$fp[3];
        $sql = "INSERT INTO {$table} (`section`, `froms`, `tos`, `mentor`) VALUES ('$c1','$c2','$c3','$c4')";
        if ($conn->query($sql) === TRUE) {
    $i=1;
} 
else {
   $i=0;
}
    }$test+=1;}
    if($i==0){
     echo "<center><x>Error: " . $sql . "<br>" . $conn->error."</x></center>";}
     else{
      echo "<center><x>".$year1." mentors list uploaded</x></center>";}

}
} else {
   $sql="DROP TABLE {$table}";
  $conn->query($sql);
    echo "<center><x>Error creating table: " . $conn->error."</x></center>";
}

?> 
</body>
</html>