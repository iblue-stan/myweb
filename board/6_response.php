<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><table border="1" align="center">
            <caption>您的訂購單內容：</caption>
            <?php
            $chk = $_POST["chk"];
            $item = $_POST["item"];
            foreach ($item as $value) {
                if ($value == '') {
                    unset($value);
                } else {
                    $a[] = $value;
                }
            }

            for ($i = 0; $i < count($a); $i++) {
                switch ($chk[$i]) {
                    case "A1":
                        echo "<tr><td>";
                        echo "士力架巧克力" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A1", $a[$i], time() + 86400);
                        break;
                    case "A2":
                        echo "<tr><td>";
                        echo "波卡洋芋片" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A2", $a[$i], time() + 86400);
                        break;
                    case "A3":
                        echo "<tr><td>";
                        echo "德浮巧克力" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A3", $a[$i], time() + 86400);
                        break;
                    case "A4":
                        echo "<tr><td>";
                        echo "義美威化卷桶" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A4", $a[$i], time() + 86400);
                        break;
                    case "A5":
                        echo "<tr><td>";
                        echo "旺旺米果" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A5", $a[$i], time() + 86400);
                        break;
                    case "A6":
                        echo "<tr><td>";
                        echo "奶油起士" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A6", $a[$i], time() + 86400);
                        break;
                    case "A7":
                        echo "<tr><td>";
                        echo "孔雀餅乾" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A7", $a[$i], time() + 86400);
                        break;
                    case "A8":
                        echo "<tr><td>";
                        echo "樂事洋芋片" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A8", $a[$i], time() + 86400);
                        break;
                    case "A9":
                        echo "<tr><td>";
                        echo "陽光滋味" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A9", $a[$i], time() + 86400);
                        break;
                    case "A10":
                        echo "<tr><td>";
                        echo "旺旺彭派包" . "數量為：" . $a[$i];
                        echo "</td></tr>";
                        setcookie("A10", $a[$i], time() + 86400);
                        break;
                }
            }
            ?>
            <tr>
                <td>
                    <input type="button" value="繼續購物" onclick="window.location.href = '6.php'"/>
                    <input type="button" value="購物車內容" onclick="window.location.href = '6_list.php'"/>
                    <input type="button" value="確認訂購" onclick="window.location.href = '7.php'"/>
                </td>
            </tr>
        </table>
    </body>
</html>
