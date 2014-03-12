<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        while (list($item, $num) = each($_COOKIE)) {
            if ($num > 0) {
                echo "</br>項目" . $item . "數量" . $num;
            }
        }
        ?>
        </br>
        <input id="inp" type="button" value="返回再訂購" onclick="location.href = '5.php';" />
    </body>
</html>
