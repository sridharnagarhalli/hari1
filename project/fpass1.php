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
      <li ><a href="Login.php"> Login</a></li>
      <li class="active"><a href="#">Forgot Pass</a></li>
    </ul>
  </div>
</nav>
</head>
<body>
    <?php
$x=$_POST["id"];
$y=$_POST["pass"];
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
if($y=="")
{
echo '<script type="text/javascript">alert("LoginID/Password cannot be empty");</script>';
Redirect('fpass.php', false);
}else
{
    error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";       
$dbname = "griet"; 
//$table1='mentors'.$i;
// Create connection
/*$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    $table="login";
$sql="SELECT * from {$table} ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();*/
    if($y=="griet")
    {
         echo '
<div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   action="fpass1.php" method="post" enctype="multipart/form-data"
 align="centre" style="width:55%; border-radius:4px; height:50%; padding:40px 50px 60px 50px;
  background:#10C9D3; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Forgot Password?</center></h2>   
 <br>
 <input type="text" placeholder="LoginID: admincse" readonly name="id" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
       <input type="text" placeholder=" Password: cse@123" readonly name="id" style="  width:100%;height:34px; padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  </form></center>
    </div>
  </div>
</div>
</div>          
</div>';
      
    }
    else
    {
        echo '<script type="text/javascript">alert("LoginID/Password is incorrect");</script>';
        Redirect('fpass.php', false);
    }

}
?>