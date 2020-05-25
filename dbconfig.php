<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbtuts";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 
//mysql_select_db($dbname) or die('database selection problem');
?>