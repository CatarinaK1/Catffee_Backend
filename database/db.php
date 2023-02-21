
<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "Catffee";

//creating connection
$connection = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if($connection->connect_error){
    die("connection failed:" . $connection->connect_error);
}

?>