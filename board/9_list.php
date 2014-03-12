<html>
    <title>iBlue 的個人網站</title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
        <script type="text/javascript" src="../js/selectDate.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>
        <?php
        require_once '../php/function.php';
        require_once '../DB_config.php';
        require_once '../DB_class.php';
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1><a href="../index.php">iBlue 的雜記小舖</a></h1></div>
            <div id="menubar" class="menubar">
                <ul>
                    <li><a href="4.php">旅遊行程訂購</a></li>
                    <li><a href="5.php">訂餐模組</a></li>
                    <li><a href="6.php">零食訂購</a></li>
                    <li><a href="7.php">留言版</a></li>
                    <li><a href="8.php">會員註冊系統</a></li>
                    <li><a href="9.php">產品管理系統</a>
                        <ul>
                            <li><a href="9_list.php">產品列表</a></li>
                        </ul>
                    </li>
                    <li><a href="4.php">4.php</a></li>
                </ul>
            </div>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table align="center">
                        <tr>
                            <td>
                                <?php
                                echo "今天日期：";
                                echo today_day("", "", "");
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <table align="center" border="1">
                        <?php
                        $sql = "select * from product";
                        $db = new DB();
                        $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                        $db->query($sql);
                        echo "<tr><td>ID</td><td>產品名稱</td><td>價格</td><td>種類</td><td>備註</td></tr>";

                        while ($result = $db->fetch_array()) {
                            switch ($result["kind"]) {
                                case "1":
                                    $kind = "食品";
                                    break;
                                case "2";
                                    $kind = "飲料";
                                    break;
                                case "3";
                                    $kind = "葯品";
                                    break;
                                case "4";
                                    $kind = "化妝品";
                                    break;
                            }
                            echo "<tr><td>$result[id]</td><td>$result[product_name]</td><td>$result[price]</td><td>$kind</td><td>$result[memo]</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                require_once 'link_here.php';
                ?>
            </div>
        </div>
    </body>
</html>