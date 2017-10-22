<?php
require './model/model.php';
$stoks_db = new StocksModel();
$sql = "SELECT * FROM `stocks` WHERE category='vegetables';";

$result = $stoks_db->query($sql);

if ($result["status"]) {
  foreach($result["result"] as $row) {
    echo $row["name"];
  }
}else {
  echo $result["error"];
}
 ?>
