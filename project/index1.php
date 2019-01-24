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
  <script type="text/javascript">
  function pro(form){
  var roll1=form.roll.value;
  var name=form.name.value;
  var year1=form.year.value;
  var year=year1.substring(2,4);
  if(roll1==""){
    if(name!=""){
      if(year1=="year of admission"){
        alert("please enter Year of Admission along with NAME");
      }
      else{
        //document.write("sdfd");
        window.location="table.php?i="+name+"&j="+year;
      }
    }
    else if(year1!="year of admission"){
      //document.write("s");
       window.location="table.php?i="+name+"&j="+year;
       
    }
    else{
      alert("please enter atleast one of the fields");
    }
  }
  else
  {
    var roll=roll1.substring(0,2);
    //document.write("sd");
    window.location="student.php?i="+roll1+"&j="+roll;
  }
  return false;
  }
  </script>
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
       <li class="active"><a href="#"> Profile</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
  <div class="row">
      <!-- description-->
    <!-- form -->
    <div class="col-sm-12"><center>
<form   onsubmit=" return pro(this);" method="post" align="centre" style="width:55%; 
border-radius:4px; height:50%; padding:40px 50px 60px 50px; 
background:rgb(88,170,120); box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19)">
<h2 style="font-size:30px;  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;"><center>Student Information Center</center></h2>   
 
  <input type="text"  placeholder="RollNo" name="roll" id="roll" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  
  <input type="text"  placeholder="Name" name="name" id="name" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
  </input><br><br>
  <select name="year" id="year" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
  <option >year of admission</option>
  </select><br>
<!--<label for="year" >Year:</label><br>
  <input type="text" name="year" id="year" ><br>
  --><br>
 <!--<select id="sem" name="sem" style="  width:100%;height:34px;padding:6px 12px;color:#555;border-radius:4px;">
   <option >semister</option>
   <option value="11">I-I</option>
   <option value="12">I-II</option>
   <option value="21">II-I</option>
   <option value="22">II-II</option>
   <option value="31">III-I</option>
   <option value="32">III-II</option>
   <option value="41">IV-I</option>
   <option value="42">IV-II</option>
</select> <br><br/>-->
<button   style=" font-family:inherit; width:30%;height:38px;padding:6px;border-radius:4px; border-color:rgb(176,196,222);">submit</button>
</form></center>
    </div>
  </div>
</div>
</div>          
</div>
<script>
var first = 1997;
var last = new Date().getFullYear();	
for (i = first; i <=last; i++) 
{ 
var yr= document.createElement("OPTION");
var t = document.createTextNode(String(i));
yr.appendChild(t);
document.getElementById("year").appendChild(yr)
}
</script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_gs_container&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2016 14:16:33 GMT -->
</html>
