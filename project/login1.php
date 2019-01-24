<?php
 session_start(); 
$x=$_POST["id"];            //retrieving and storing value entered in loginid field using post method.
$y=$_POST["pass"];          //retrieving and storing value entered in password field using post method.
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);      //header function is used to redirect to a desrired url.

    exit();
}
if($x==""||$y=="")          //if the fields are empty redirect to login.php page.
{
echo '<script type="text/javascript">alert("LoginID/Password cannot be empty");</script>';
Redirect('login.php', false);
}else
{
    error_reporting(E_ALL ^ E_NOTICE);          //avoids displaying warnings and notices on the webpage.
/*$servername = "localhost";
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
$result=$conn->query($sql);*/
//if ($result->num_rows > 0) {
   // $row = $result->fetch_assoc();*/
    if($x=="admincse"&&$y=="cse@123")       //if the credentials are correct redirect to home.html page.
    {
        $_SESSION['user']=$x;               //this is a session variable intialized to ensure that admin logged in used in every page.
       Redirect('home.php', false);
    }
    else                                    //if the credentials are wrong redirect to login.php page displaying an alert.
    {
        echo '<script type="text/javascript">alert("LoginID/Password is incorrect");</script>';
        Redirect('login.php', false);
    }
}
?>