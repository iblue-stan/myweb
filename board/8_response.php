<?php

require_once '../DB_config.php';
require_once '../DB_class.php';

//print_r($_POST);
$username = $_POST["username"];
$account = $_POST["account"];
$password = $_POST["password"];
$address = $_POST["address"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sex = $_POST["sex"];
$birthday = $_POST["birthday"];

if ($sex = "man") {
    $sex = 1;
} else {
    $sex = 0;
}
$sql = "insert into member (username,account,password,address,email,tel,sex,birthday) values ('$username','$account','$password','$address','$email','$tel','$sex','$birthday')";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

echo "資料新增成功，三秒後回到上一頁";
header('refresh:3;url=8.php');
//while ($result = $db->fetch_array()) {
//    print_r($result);
//}

