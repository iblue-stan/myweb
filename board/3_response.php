<?php
//print_r($_POST);
$name = $_POST[name];
$first = $_POST[first];
$salad = $_POST[salad];
$soup = $_POST[soup];
$drink = $_POST[drink];
$constellation = $_POST[constellation];
$lang = $_POST[lang];

echo $name." 來賓您好";

switch ($first){
  case "山葯":
	$price = $price + 100;
	echo "</br>您的前菜：".$first;
	break;
  case "青菜":
	$price = $price + 100;
	echo "</br>您的前菜：".$first;
	break;
  }

switch ($salad){
  case "水果沙拉":
	$price = $price + 100;
	echo "</br>你的沙拉：".$salad;
	break;
  case "芒果沙拉":
	$price = $price + 100;
	echo "</br>你的沙拉：".$salad;
	break;
  }

  switch ($soup){
  case "南瓜湯":
	$price = $price + 100;
	echo "</br>您的湯：".$soup;
	break;
  case "東瓜湯":
	$price = $price + 100;
	echo "</br>您的湯：".$soup;
	break;
  }

switch ($drink){
  case "紅茶":
	$price = $price + 100;
	echo "</br>您的飲料：".$drink;
	break;
  case "綠茶":
	$price = $price + 100;
	echo "</br>您的飲料：".$drink;
	break;
  case "咖啡":
	$price = $price + 100;
	echo "</br>您的飲料：".$drink;
	break;
  case "奶茶":
	$price = $price + 100;
	echo "</br>您的飲料：".$drink;
	break;
  }

switch ($constellation){
  case "1":
	$price = $price + 100;
	echo "</br>您的主菜：牛排";
	break;
  case "2":
	$price = $price + 100;
	echo "</br>您的主菜：牛排";
	break;
  case "3":
	$price = $price + 100;
	echo "</br>您的主菜：牛排";
	break;
  }

  foreach($lang as $result){
	switch ($result){
	  case "1":
		$price = $price + 50;
		//echo "</br>您的甜點：奶酪";
		$a1[] = "奶酪";
		break;
	  case "2":
		$price = $price + 50;
		//echo "</br>您的甜點：香草冰淇淋";
		$a1[] = "香草冰淇淋";
		break;
	  case "3":
		$price = $price + 50;
		//echo "</br>您的甜點：蛋塔";
		$a1[] = "蛋塔";
		break;
	  case "4":
		$price = $price + 50;
		//echo "</br>您的甜點：巧克力";
		$a1[] = "巧克力";
		break;
	  }
  }
  echo "</br>您的甜點：";
  foreach($a1 as $result){
	echo $result." ";
  }

  echo "</br>你的餐點費用：".$price;
?>