<?php
include_once('conn.php');

$sql = "create table goals (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  goal varchar(100) NOT NULL,
  goal_detail varchar(500) NOT NULL,          
  goal_completed_date date,
  is_Complete boolean
  )"; //table query

//executing query
if ($conn->query($sql) === FALSE) {
  echo "ERROR CREATING TABLE" . $conn->error;
}
$conn->close();