<?php

require_once '../DB_config.php';
require_once '../DB_class.php';

//print_r($_POST);
$username = filter_input(INPUT_POST,"username");
$account = filter_input(INPUT_POST,"account");
$password = filter_input(INPUT_POST,"password");
$address = filter_input(INPUT_POST,"address");
$email = filter_input(INPUT_POST,"email");
$tel = filter_input(INPUT_POST,"tel");
$sex = filter_input(INPUT_POST,"sex");
$birthday = filter_input(INPUT_POST,"birthday");

if ($sex == "man") {
    $sex = 1;
} else {
    $sex = 0;
}
echo $sql = "insert into account (username,account,password,address,email,mobile_phone,sex,birthday) values ('$username','$account','$password','$address','$email','$tel','$sex','$birthday')";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

echo "資料新增成功，三秒後回到上一頁";
header('refresh:3;url=8.php');
//while ($result = $db->fetch_array()) {
//    print_r($result);
//}

