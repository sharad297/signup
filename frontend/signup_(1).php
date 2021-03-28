<?php
// Step 1: Receive data from GET Request
if(isset($_GET)){

$user = $_GET["username"];
$pass = $_GET["password"];
}else if(isset($_POST)){
    $user = $_POST["username"];
    $pass = $_POST["password"];
}

// Step 2: Define db creds
$host = "localhost";
$dbuser = "ayush";
$dbpass = "ayush";
$dbname = "msi_db";

// Step 3: Store into database

// Create a connection to mysql 
$con = new mysqli($host, $dbuser, $dbpass, $dbname);

$sql = "INSERT into login(username, password) VALUES('".$user."','".$pass."')";

// execute sql on connection
$result = $con->query($sql);

if ($result){
echo "Account created succesfully";
}else{
echo "Account creation failed";    
}

?>







