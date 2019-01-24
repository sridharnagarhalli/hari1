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
 <!-- <script type="text/javascript">
function pro(x)
{
var y=x.innerHTML;
document.write("< please go back");
window.location="profile.php?w1="+y;
}
</script>
-mentors
$ne= "SELECT * from {$table1} where section like 'c1' ";
$re=$conn->query($ne);
while($row=$re->fetch_assoc())
echo $row["mentor"];
-->
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
    <div class="container">
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
       <li class="active"><a href="#"> Profile</a></li>
       <li><a href="index1.php">Back</a></li>
    </ul>
  </div>
</nav></div></div>  
    <?php
//$year= $_POST["year"];
//$sem=$_POST["sem"];
$i=$_GET["j"];
$roll=$_GET["i"];
//table name
$a=$i;
$table='students'.$i;
//$name=$_POST["name"];
$y=date("Y");
$z=date("m");
$sem=substr($y,2,4)-$i;
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

error_reporting(E_ALL ^ E_NOTICE); 
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "griet";
$table1='mentors'.$i;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($roll!=""){
  $sql = "SELECT * FROM {$table} WHERE roll='{$roll}' or Name='{$roll}' ";
$result = $conn->query($sql);
}
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
    echo ' <div class="container">
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#ddd;">
      <div class="container">
          <div class="row">
              <div class="col-sm-4" style="padding:10px 10px 15px 20px;">
                  <img src="'.$table.'/'.$row["roll"].'.JPG" id="stu" />
              </div>
              <div class="col-sm-4"> ';
               echo "<h3>Roll Number:</h3><x>".' '.$row["roll"].'</x><BR>';
                echo "  <h3>Name:</h3><x>".' '.$row["Name"].'</x><BR><h3>Rank:</h3><x>'.' '.$row["Rank"].'<br>
                  <h3>Course:</h3><x> BTECH<BR>
                  </div>
              <div class="col-sm-4">
              <h3>Department:</h3><x> CSE<BR>
                  <h3>Section:</h3><x>'.' '. $row["Section"].'</x><BR>
                  <h3>Semester:</h3><x>'.' 0'.$sem.'</x><BR>
                  <h3>Mentor:</h3><x> ';
                 $sec='';
                  $sec=$sec.$row["Section"];
                   $c1=$sec.'1';
                   $c2=$sec.'2';
                  $ne= "SELECT * from {$table1} where `section` like '%{$sec}%' ";
$ret=$conn->query($ne);
$ro=$ret->fetch_assoc();
    $ss=$ro["tos"];
    $li="SELECT `roll` from {$table} where `Section` like '".$row["Section"]."' limit $ss";
    $nl=$conn->query($li);$i=0;
    while($arr=$nl->fetch_assoc())
    {
       if($row["roll"]==$arr["roll"])
       {
           $i=1; break;
       }
    }
$r='SELECT `mentor` from '.$table1.' where `section` LIKE If ("'.$i.'"=1,"'.$c1.'","'.$c2.'")'; if($i==1)$i=0;
$re=$conn->query($r);
$res=$re->fetch_assoc();
echo $res["mentor"];
                 echo ' </x><BR>
              </div>
  	        </div>
      </div>
  </div>
  <div class="panel-body">
      <h1> Personal details </h1><hr>
      <div class="row">
              <div class="col-sm-6">
               <h3>DOB:</h3><x>'.' '.$row["DOB"].'</x><BR>
                  <h3>Father:</h3><x> '.' '.$row["Father's Name"].'</x><BR>
                  <h3>Email:</h3><x>'.' '.$row["e-mail"].'</x><BR>
              </div>
              <div class="col-sm-6">
                  <h3>Phone1:</h3><x>'.' '.$row["Telephone1"] .' </x><br>
                  <h3>Phone2:</h3><x>'.' '.$row["Telephone2"] .' </x><br>
                  <h3>Address:</h3><x>'.' '. $row["Address 1"].', '.$row["Address2"].', '.$row["Street"].', '.
                  $row["Area"].', '.$row["City"].', '.$row["Pin No."].'</x>
              </div>
      </div>';
$r=$row["roll"];
$i=$agg=0;
$back;
$x=array("I-I","I-II","II-I","II-II","III-I","III-II","IV-I","IV-II");
echo '<h1> Academic details </h1><hr  style="border: 0.5px solid black;">
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
        <th style="font-size:20px;">Category</th>';
        for($i=0;$i<8;$i++)
        echo '<th>'.$x[$i].'</th>';
        echo '</tr></thead><tbody>';
        for($i=0;$i<=3;$i++)
        {
            if($i==0){
                 echo '<tr><th style="font-size:20px";>Total</th>';
            for($j=0;$j<8;$j++)
            {
                 $k=$j+1;
                 $table='cse'.$a;
                 $table=$table.$k;
                 $sql = "SELECT * FROM {$table} WHERE roll='{$r}' ";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                 $row = $result->fetch_assoc();
                 echo '<td><x>'.$row["Total"].'<x></td>';
                 }else {echo '<td><x>--</x></td>';}
            }echo '</tr>';
        }
         elseif($i==1){
                 echo '<tr><th style="font-size:20px";>Backlogs</th>';
            for($j=0;$j<8;$j++)
            {
                 $k=$j+1;
                 $table='cse'.$a;
                 $table=$table.$k;
                 $sql = "SELECT * FROM {$table} WHERE roll='{$r}' ";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                 $row = $result->fetch_assoc();
                $b=0;
                if($a>13 && $j<3){
                 $i2=6;}
                 else{
                 $i2=5;}
                 //back
                 if($a<15){
                for($i1=1;$i1<=$i2;$i1++)
                {
                    if($row['sub'.$i1]<=40)
                    {
                        $b=$b+1;
                    }
                }
                for($i1=1;$i1<=3;$i1++)
                {
                    if($row['lab'.$i1]<30)
                    {
                        $b=$b+1;
                    }
                }
                 }
                 else
                 {
                      for($i1=1;$i1<=$i2;$i1++)
                {
                    if($row['sub'.$i1]<4)
                    {
                        $b=$b+1;
                    }
                }
                for($i1=1;$i1<=3;$i1++)
                {
                    if($row['lab'.$i1]<4)
                    {
                        $b=$b+1;
                    }
                }
                 }
                //logs
                $back=$back+$b;
                 echo '<td><x>'.$b.'<x></td>';
                 }else {echo '<td><x>--</x></td>';}
            }echo '</tr>';
        }
        elseif($i==2){
                 echo '<tr><th style="font-size:20px";>Aggregate</th>';
            for($j=0;$j<8;$j++)
            {
                 $k=$j+1;
                 $table='cse'.$a;
                 $table=$table.$k;
                 $sql = "SELECT * FROM {$table} WHERE roll='{$r}' ";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                 $row = $result->fetch_assoc();
                 if($a>13 && $j<3){
                     if($a>14)
                     $per=round($row["Total"]/9,2);
                     else
                 $per=round($row["Total"]/8.25,2);}
                 else{
                     if($a>14)
                     $per=round($row["Total"]/8,2);
                     else
                 $per=round($row["Total"]/7.25,2);}
                 $agg=$agg+$per;
                 echo '<td><x>'.$per.'<x></td>';
                 }else {echo '<td><x>--</x></td>';}
            }
        }
       
        if($i==3){
                  echo '</tr><tr><th style="font-size:20px";>Credits</th>';
            for($j=0;$j<8;$j++)
            {
                 $k=$j+1;
                 $table='cse'.$a;
                 $table=$table.$k;
                 $sql = "SELECT * FROM {$table} WHERE roll='{$r}' ";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                 $row = $result->fetch_assoc();
                 echo '<td><x>'.$row["Credits"].'<x></td>';
                 }else {echo '<td><x>--</x></td>';}
            }
        }echo '</tr>';
        }
        echo '   
    </tbody>
  </table>
<br>
<div class="col-sm-6">
  <h3>Total Aggregate: </h3><x> '. round($agg/($sem-1),2).'</x></div>
<div class="col-sm-6">
<h3>Total Backlogs:</h3><x> '.$back.'</x>
    </div>
  </div>
</div>
</div>';
} else {
    echo "<center><x>no records found</x></center>";
}
?>
</body>
</html>