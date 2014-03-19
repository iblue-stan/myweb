<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><a href="index.php">iBlue 的個人網站</a></title>
        <?php
        session_start();
        require_once '../php/function.php';
        ?>
        <script type="text/javascript" src="../js/blue.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1>iBlue 的雜記小舖</h1></div>
            <?php require_once '../menu.php'; ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table border="1" align="center">
                        <caption>訂購單內容</caption>
                        <tr><td>商品名稱</td><td>單價</td><td>數量</td><td>小計</td></tr>
                        <?php
                        require_once '../DB_config.php';
                        require_once '../DB_class.php';

//                        $sql = "SELECT * FROM product";

                        if (!empty($_COOKIE["shop"])) {
                            $shot = unserialize($_COOKIE["shop"]);
                            $key_value = "";
                            $out = "";
                            foreach ($shot as $key => $value) {
                                $key_value = " or id='$key'";
                                $out = $out . $key_value;
                            }
                        }

                        $out1 = substr($out, 3, strlen($out));
                        $sql = "select * from product where $out1";
                        $db = new DB();
                        $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                        $db->query($sql);

                        $total = 0;
                        $price = 0;

                        while ($result = $db->fetch_array()) {
                            $id = $result["id"];
                            $price = $result["price"] * $shot[$id];
                            echo "<tr><td>" . $result['product_name'] . "</td><td>" . $result["price"] . "</td><td>" . $shot[$id] . "</td><td>" . $price . "</td></tr>";

//                            if (!empty($item["$id"])) {
//                                $price = $result["price"] * $item[$id];
//                                echo "<tr><td>" . $result['product_name'] . "</td><td>" . $result["price"] . "</td><td>" . $item[$id] . "</td><td>" . $price . "</td></tr>";
//                            }
                            $total = $price + $total;
                            $price = 0;
                        }
                        echo "<tr><td colspan='4' align='right'> 總價：" . $total . "</td></tr>";
                        ?>
                        <tr>
                            <td colspan="4">
                                <input type="button" value="繼續購物" onclick="window.location.href = '6.php?id=kill'"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php require_once($root . '/blue/link_here.php'); ?>
            </div>
        </div>
    </body>
</html>
