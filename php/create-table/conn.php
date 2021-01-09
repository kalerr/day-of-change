<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'personal';
$port = '3306';

$conn = new mysqli($servername, $username, $password, $database); //creating a connection
if ($conn->connect_error) { 
  die('Connection failed:' . $conn->connect_error); //shut the connection off IF error
}

