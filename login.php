<?php

require_once 'DB_config.php';
require_once 'DB_class.php';


$name = filter_input(INPUT_POST,'name');
$pass = filter_input(INPUT_POST,'password');
require_once 'DB_config.php';
require_once 'DB_class.php';


$sql = "SELECT username,account,password,level FROM account WHERE account = '$name' AND password = '$pass'";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

while ($result = $db->fetch_array()) {
    $count = count($result);
    $username = $result["username"];
    $account = $result["account"];
    $level = $result["level"];
}

if(empty($count)){
    echo "帳號密碼錯誤喔！！";
    header("Refresh: 1; index.php");
}
else{
    session_start();
    setcookie("username_cookie", $username, time() + 86400);
    setcookie("userlevel_cookie", $level, time() + 86400);
    echo $username;
    echo "帳號密碼正確，即將進入系統";
    header("Refresh: 1; index.php");
}