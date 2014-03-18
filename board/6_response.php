<html>
    <title>iBlue 的雜記小舖</title>
    <head>
        <?php
        session_start();
        require_once '../php/function.php';
        ?>
        <script type="text/javascript" src="../js/blue.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1><a href="index.php">iBlue 的雜記小舖</a></h1></div>
            <?php
            require_once '../menu.php';
            if (empty($_POST)) {
                echo "<br /><p align='center'>請輸入訂購數量</p>";
                header('refresh:3;url=6.php');
                return;
            }
            ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table border="1" align="center">
                        <caption>您的訂購單內容：</caption>
                        <tr><td>產品名稱</td><td>價格</td><td>購買數量</td><td>小計</td></tr>
                        <?php
                        require_once '../DB_config.php';
                        require_once '../DB_class.php';
                        $sql = "SELECT * FROM product";
                        $db = new DB();
                        $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                        $db->query($sql);

                        while ($result = $db->fetch_array()) {
                            $id = $result["id"];
                            if (!empty($_POST["$id"])) {
                                $item[$id] = $_POST["$id"];
                            }
                        }

                        $arr_item = serialize($item);
                        setcookie("shop", $arr_item, time() + 86400);

                        $sql = "SELECT * FROM product";
                        $db->query($sql);
                        $total = 0;

                        while ($result1 = $db->fetch_array()) {
                            $id = $result1["id"];
                            if (!empty($item["$id"])) {
                                $price = $result1["price"] * $item[$id];
                                echo "<tr><td>" . $result1['product_name'] . "</td><td>" . $result1["price"] . "</td><td>" . $item[$id] . "</td><td>" . $price . "</td></tr>";
                            }
                            $total = $price + $total;
                            $price = 0;
                        }
                        echo "<tr><td colspan='4' align='right'> 總價：" . $total . "</td></tr>";
                        ?>
                        <tr>
                            <td colspan="4">
                                <input type="button" value="繼續購物" onclick="window.location.href = '6.php'"/>
                                <input type="button" value="購物車內容" onclick="window.location.href = '6_list.php'"/>
                                <input type="button" value="確認訂購" onclick="window.location.href = '6_confirm.php'"/>
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