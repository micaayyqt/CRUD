<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud_system';

$connection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()) {
    echo "Error: Unable to connect to MySQL<br>";
    echo "Message: ".mysqli_connect_error()."<br>";
}
    //else {
        //echo "Successfully Connected to your Database!";
    //}

?>