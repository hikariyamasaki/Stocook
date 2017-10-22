<?php
require './model/model.php';

function getCategory($category){

  $stoks_db = new StocksModel();
  $sql = "SELECT * FROM `stocks` WHERE category='".$category."';";

  $result = $stoks_db->query($sql);

  if ($result["status"]) {
    return $result["result"];
  }else {
    echo $result["error"];
  }
}
 ?>
