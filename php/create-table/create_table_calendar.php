<?php
include('conn.php');

$sql = "create table calendar(
  id date DEFAULT CURDATE() NOT NULL,
  id_progress INT(6),
  id_diary INT(6),
  FOREIGN KEY (id_progress) REFERENCES progress(id_progress),
  FOREIGN KEY (id_diary) REFERENCES progress(id_diary)
)"; //query

//executing query
if ($conn->query($sql) === FALSE) {
  echo "ERROR CREATING TABLE" . $conn->error;
}
$conn->close();