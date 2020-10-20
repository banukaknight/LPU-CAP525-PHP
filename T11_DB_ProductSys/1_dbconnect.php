<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

$servername = "sql12.freesqldatabase.com";
$username = "sql12370840";
$password = "lbhifYlq6f";
$dbname = "sql12370840";

$tbname1 = "Product";

function alertFunc($msg){
	echo "<script type='text/javascript'>alert('$msg');</script>";
}


// Create connection-----------------
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	alertFunc("$conn->connect_error");
	die("<h5>Connection failed: " . $conn->connect_error . "</h5>");
}
// alertFunc("DB Connection Succesful");