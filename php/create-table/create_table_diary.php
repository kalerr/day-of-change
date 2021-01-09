<?php
include('conn.php');

$sql = "create table diary(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_goal INT(6),
  id_sub_goal INT(6),
  date date,
  time TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  description varchar(1000) NOT NULL,
  FOREIGN KEY (id_goal) REFERENCES goals(id),
  FOREIGN KEY (id_sub_goal) REFERENCES sub_goals(id)
)"; //query

//executing query
if ($conn->query($sql) === FALSE) {
  echo "ERROR CREATING TABLE" . $conn->error;
}
$conn->close();