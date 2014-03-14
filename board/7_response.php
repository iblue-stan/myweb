<?php

require_once '../DB_config.php';
require_once '../DB_class.php';

$username = filter_input(INPUT_POST,"username");
$email = filter_input(INPUT_POST,"email");
$content = filter_input(INPUT_POST,"content");

$sql = "insert into guestbook (name,email,text) values('$username','$email','$content')";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

echo "資料新增成功，三秒後回到上一頁";
header('refresh:3;url=7.php');
