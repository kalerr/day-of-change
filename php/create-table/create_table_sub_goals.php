<?php
include_once('conn.php');

$sql = "create table sub_goal (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_goal INT(6),
  goal varchar(100),
  sub_goal varchar(100) NOT NULL,
  mastery INT(2) DEFAULT 0,
  FOREIGN KEY(id_goal) REFERENCES goals(id_goals),
  FOREIGN KEY(goal) REFERENCES goals(goal)
  
  )"; //table query

//executing query
if ($conn->query($sql) === FALSE) {
  echo "ERROR CREATING TABLE" . $conn->error;
}
$conn->close();