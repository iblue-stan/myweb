<?php
$file = fopen("food.txt","r");
while (!feof($file)){
  $values[] = fgets($file);
  }
fclose($file);
print_r($values);
?>