<?php
 session_start();

  session_destroy();   // function that Destroys Session 
$url='login.php';
  $permanent=false;
header('Location: ' . $url, true, $permanent ? 301 : 302);
?>