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
$sem=$_POST["semister"];
$table='cse'.$year;
$table=$table.$sem;
$dbname = "griet"; 
//$table1='students'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($year>13 && $sem<4)
{
    $sql = "CREATE TABLE {$table} (
`S.No` varchar(3),roll varchar(10),sub1 int(3),sub2 int(3),
sub3 int(3),sub4 int(3),sub5 int(3),sub6 int(3),
lab1 int(2),lab2 int(2),lab3 int(2),Total int(3),`Per(%)` decimal(5,3),
Credits int(2)
)";
$i=0;$test=0;
if ($conn->query($sql) === TRUE) {
    if(isset($_POST["submit"])) {
    $myfile = $_FILES["fileToUpload"]["name"];
    $handle=fopen($myfile,"r");
    while(($fp=fgetcsv($handle,1000,","))!==false)
    {
        if($test>0){
        $c1=$fp[0];$c2=$fp[1];$c3=$fp[2];$c4=$fp[3];
        $c5=$fp[4];$c6=$fp[5];$c7=$fp[6];$c8=$fp[7];
        $c9=$fp[8];$c10=$fp[9];$c11=$fp[10];$c12=$fp[11];
        $c13=$fp[12];$c14=$fp[13];
        $sql = "INSERT INTO {$table} (`S.No`, `roll`, `sub1`, `sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`lab1`,
        `lab2`,`lab3`,`Total`,`Per(%)`,`Credits`) VALUES 
        ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14')";
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
      echo "<center><x>".$year1." students list uploaded</x></center>";}
}
} else {
    echo "<center><x>Error creating table: " . $conn->error."</x></center>";
}
}
else
{
    $sql = "CREATE TABLE {$table} (
`S.No` varchar(3),roll varchar(10),sub1 int(3),sub2 int(3),
sub3 int(3),sub4 int(3),sub5 int(3),
lab1 int(2),lab2 int(2),lab3 int(2),Total int(3),`Per(%)` decimal(5,3),
Credits int(2)
)";
$i=0;
if ($conn->query($sql) === TRUE) {
    if(isset($_POST["submit"])) {
    $myfile = $_FILES["fileToUpload"]["name"];
    $handle=fopen($myfile,"r");
    while(($fp=fgetcsv($handle,1000,","))!==false)
    {
        $c1=$fp[0];$c2=$fp[1];$c3=$fp[2];$c4=$fp[3];
        $c5=$fp[4];$c6=$fp[5];$c7=$fp[6];$c8=$fp[7];
        $c9=$fp[8];$c10=$fp[9];$c11=$fp[10];$c12=$fp[11];
        $c13=$fp[12];
        $sql = "INSERT INTO {$table} (`S.No`, `roll`, `sub1`, `sub2`,`sub3`,`sub4`,`sub5`,`lab1`,
        `lab2`,`lab3`,`Total`,`Per(%)`,`Credits`) VALUES 
        ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13')";
        if ($conn->query($sql) === TRUE) {
    $i=1;
} 
else {
   $i=0;
}
    }
    if($i==0){
     echo "<center><x>Error: " . $sql . "<br>" . $conn->error."</x></center>";}
     else{
      echo "<center><x>".$year1." students list uploaded</x></center>";}
}
} else {
     $sql="DROP TABLE {$table}";
  $conn->query($sql);
    echo "<center><x>Error creating table: " . $conn->error."</x></center>";
}
}
 

?> 
</body>
</html>