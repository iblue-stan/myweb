<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1" align="center">
            <caption>訂購單內容</caption>
            <?php
            for ($i = 0; $i < count($_COOKIE); $i++) {
                if ($_COOKIE["A" . $i] != "") {
                    $name[] = "A" . $i;
                    $value[] = $_COOKIE["A" . $i];
                }
            }

            foreach ($name as $key => $val) {
                switch ($val) {
                    case "A1":
                        echo "<tr><td>";
                        echo "士力架巧克力" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A2":
                        echo "<tr><td>";
                        echo "波卡洋芋片" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A3":
                        echo "<tr><td>";
                        echo "德浮巧克力" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A4":
                        echo "<tr><td>";
                        echo "義美威化卷桶" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A5":
                        echo "<tr><td>";
                        echo "旺旺米果" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A6":
                        echo "<tr><td>";
                        echo "奶油起士" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A7":
                        echo "<tr><td>";
                        echo "孔雀餅乾" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A8":
                        echo "<tr><td>";
                        echo "樂事洋芋片" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A9":
                        echo "<tr><td>";
                        echo "陽光滋味" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                    case "A10":
                        echo "<tr><td>";
                        echo "旺旺彭派包" . "數量為：" . $value[$key];
                        echo "</td></tr>";
                        break;
                }
            }
            ?>
            <tr>
                <td>
                    <input type="button" value="繼續購物" onclick="window.location.href = '6.php'"/>
                </td>
            </tr>
        </table>
    </body>
</html>
