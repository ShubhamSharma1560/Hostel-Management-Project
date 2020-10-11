<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "gkvhms";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Sorry connection to database is not established due to:".mysqli_connect_error());

 return $conn;
 }
 ?>