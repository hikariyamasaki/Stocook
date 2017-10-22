<?php
$mysqli = new mysqli('mysql:3306', 'root', 'pass', 'stocook_db');
if($mysqli->connect_error){
  echo $mysqli->connect_error;
  exit();
}else {
  $mysqli->set_charset("utf8");
}
$sql = "SELECT name,amount,unit FROM stocks";
if ($result = $mysqli->query($sql)) {
  while ($row = $result->fetch_assoc()) {
    echo $row["name"].$row["amount"].$row["unit"]."<br />";
  }
  $result->close();
}
$mysqli->close();
 ?>
