<?php
require 'controller.php';
$category = ["meats","vegetables","fishes","others"];
$table = "";
for ($i=1; $i <= 4; $i++) {
  $table = $table .'<div id="tab' .$i .'" class="tab"><p><table class="' .$category[$i-1] .'">';
  $contents = getCategory($category[$i-1]);
  for ($j=0; $j < count($contents); $j++) {
    $table = $table ."<tr><th scope=\"row\">" .$contents[$j]["name"] . "</th><td>" .$contents[$j]["amount"].$contents[$j]["unit"] . "</td></tr>";
  }
  $table = $table ."</table></p></div>";
}
 ?>
