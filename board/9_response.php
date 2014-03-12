<?php
print_r($_POST);

require_once '../DB_config.php';
require_once '../DB_class.php';

$prod_name = filter_input(INPUT_POST,"prod_name");
$price = filter_input(INPUT_POST,"price");
$kind = filter_input(INPUT_POST,"kind");
$memo = filter_input(INPUT_POST,"memo");

$sql = "insert into product (product_name,price,kind,memo) values('$prod_name','$price','$kind','$memo')";
$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$db->query($sql);

echo "資料新增成功，三秒後回到上一頁";
header('refresh:3;url=9.php');

//while ($result = $db->fetch_array()) {
//    print_r($result);
//}