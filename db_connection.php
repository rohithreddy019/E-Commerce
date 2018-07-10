<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "delhidaredevils";
 $db = "ecomm";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } 
 echo "Connected successfully" ;
 return $conn;
 }
function CloseCon($conn)
 {
 	mysqli_close($conn);
 } 
?>