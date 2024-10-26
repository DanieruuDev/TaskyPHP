<?php 
$hostName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "tasky";
$con = mysqli_connect($hostName, $dbUser,$dbPass, $dbName);
if(!$con){
die("Something went wrong :<");
}
?>