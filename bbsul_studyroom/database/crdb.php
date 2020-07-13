<?php
$servername='localhost';
$username='root';
$pass='';
$db='crdb';
  
$conn = new mysqli($servername,$username,$pass,$db);
if($conn->connect_error){
  die("connection failed");
}
?>