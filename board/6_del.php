<?php
$id = filter_input(INPUT_GET, "id");
$item = unserialize(filter_input(INPUT_COOKIE, "shop"));
unset($item["$id"]);
$arr_item = serialize($item);
setcookie("shop", $arr_item, time() + 86400);

echo "資料刪除成功，三秒後回到上一頁";
header('refresh:3;url=6_list.php');