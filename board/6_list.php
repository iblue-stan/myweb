<html>
    <title>iBlue 的個人網站</title>
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
            <div id="header"><h1><a href="index.php">iBlue 的個人網站</a></h1></div>
            <?php require_once '../menu.php'; ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table border="1" align="center">
                        <caption>訂購單內容</caption>
                        <?php
                        require_once '../DB_config.php';
                        require_once '../DB_class.php';
                        $sql = "SELECT * FROM product";
                        $db = new DB();
                        $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                        $db->query($sql);

                        $item = unserialize(filter_input(INPUT_COOKIE, "shop"));
                        $total = 0;
                        $price = 0;

                        while ($result = $db->fetch_array()) {
                            $id = $result["id"];
                            if (!empty($item["$id"])) {
                                $price = $result["price"] * $item[$id];
                                echo "<tr><td>" . $result['product_name'] . "</td><td>" . $result["price"] . "</td><td>" . $item[$id] . "</td><td>" . $price . "</td><td>" . "<a href='6_del.php?id=$id'>刪除</a>" . "</td></tr>";
                            }
                            $total = $price + $total;
                            $price = 0;
                        }
                        echo "<tr><td colspan='5' align='right'> 總價：" . $total . "</td></tr>";
                        ?>
                        <tr>
                            <td colspan="5">
                                <input type="button" value="繼續購物" onclick="window.location.href = '6.php'"/>
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