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
      <li ><a href="home.php"> Home</a></li>
       <li class="active"><a href="#"> profile</a></li>
       <li><a href="index1.php">Back</a></li>
    </ul>
  </div>
</nav></div></div>
<?php  
$name=$_GET["i"];
$year=$_GET["j"];
$table='students'.$year;

error_reporting(E_ALL ^ E_NOTICE); 
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "griet";
$table1='mentors'.$year;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($name!=""){
     $sql = "SELECT * FROM {$table} WHERE Name LIKE '%{$name}%' ";
}
elseif($year!=""){
     $sql = "SELECT * FROM {$table} ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 echo  ' <div class="container-fluid">
 <table style="border-collapse: collapse;" class="table table-striped">
    <thead>
      <tr>
        <th>ROll.No</th>
        <th>Name</th>
        <th>Section</th>
      </tr>
    </thead>
    <tbody> ';
while($row = $result->fetch_assoc())
{
     echo '<tr><td><a href="" onclick="return pro(this);">'.$row["roll"].'</a></td><td><a href="" onclick="return pro(this);">'.$row["Name"].'</a></td><td>'.$row["Section"].'</td></tr>';
}
echo '</tbody>
  </table>
</div>';
}
else
{echo '<center><x>no records found</x></center>';
}
?>
 <script type="text/javascript">
  function pro(x){
var y=x.innerHTML;
var year="<?php echo $year; ?>";
//document.write("<-- please go back to view the list");
window.location="student.php?i="+y+"&j="+year;
return false;
}
</script>
</body>
</html>