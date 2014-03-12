<html>
    <title>iBlue 的個人網站</title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>
        <?php require_once '../php/function.php'; ?>
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
                    <li><a href="9.php">產品管理系統</a></li>
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
                                error_reporting(0);
                                session_start();
                                echo "您好：" . $_SESSION['username_session'];
                                echo "</br>今天日期：";
                                echo today_day("", "", "");
                                echo "</br>";
                                ?>
                            </td>
                        </tr>
                    </table>
                    <table align="center">
                        <tr>
                            <td>
                                <?php
                                $item = explode(",", $_POST[item]);
                                $china = explode(",", $_POST[china_port]);
                                $passport = explode(",", $_POST[passport]);
                                print_r($item);
                                if ($item[0] != "") {
                                    switch ($item[0]) {
                                        case "1":
                                            setcookie("item_1", $item[0]);
                                            setcookie("money_1", $item[1]);
                                            setcookie("passport_1", $passport[0], time() + 84600);
                                            setcookie("passport_1_money", $passport[1], time() + 84600);
                                            setcookie("china_port_1", $china[0], time() + 84600);
                                            setcookie("china_port_1_money", $china[1], time() + 84600);
                                            setcookie("num_1", $_POST[num], time() + 84600);
                                            break;
                                        case "2":
                                            setcookie("item_2", $item[0]);
                                            setcookie("money_2", $item[1]);
                                            setcookie("passport_2", $passport[0], time() + 84600);
                                            setcookie("passport_2_money", $passport[1], time() + 84600);
                                            setcookie("china_port_2", $china[0], time() + 84600);
                                            setcookie("china_port_2_money", $china[1], time() + 84600);
                                            setcookie("num_3", $_POST[num], time() + 84600);
                                            break;
                                        case "3":
                                            setcookie("item_3", $item[0]);
                                            setcookie("money_3", $item[1]);
                                            setcookie("passport_3", $passport[0], time() + 84600);
                                            setcookie("passport_3_money", $passport[1], time() + 84600);
                                            setcookie("china_port_3", $china[0], time() + 84600);
                                            setcookie("china_port_3_money", $china[1], time() + 84600);
                                            setcookie("num_3", $_POST[num], time() + 84600);
                                            break;
                                    }
                                }
                                ?>
                            </td>
                        </tr>
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