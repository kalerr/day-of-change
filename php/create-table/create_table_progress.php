<?php
include_once('conn.php');

$sql = "create table progress (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_sub_goal INT(6),
  goal varchar(100),
  sub_goal varchar(100),
  sub_goal_mastery INT(2),
  progress_summary varchar(100) NOT NULL,
  progress_detail varchar(500) NOT NULL,          
  date date,
  FOREIGN KEY (id_sub_goal) REFERENCES sub_goals(id),
  FOREIGN KEY (goal) REFERENCES sub_goals(goal),
  FOREIGN KEY (sub_goal) REFERENCES sub_goals(sub_goal),
  FOREIGN KEY (sub_goal_mastery) REFERENCES sub_goals(mastery)
  )"; //table query

//executing query
if ($conn->query($sql) === FALSE) {
  echo "ERROR CREATING TABLE" . $conn->error;
}
$conn->close();