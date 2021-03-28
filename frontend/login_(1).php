<?php

$user = $_POST["username"];
$pass = $_POST["password"];

// DB Credentials
$host = "localhost";
$dbuser = "devanshu";
$dbpass = "devanshu";
$dbname = "msi_db";

// Make an sql connection
$con = new mysqli($host, $dbuser, $dbpass, $dbname);

// Create an sql statement
$sql = "SELECT * from login where username='".$user."' and password='".$pass."'";

// Execute sql statement on connection and get result
$result = $con->query($sql);

// If result has number of rows > 0. Then account exists
if($result->num_rows > 0){
    echo "Authenticaion Successful";
}else {
    echo "Authentication Failed";
}

?>






