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
            <div id="header"><h1><a href="../index.php">iBlue 的雜記小舖</a></h1></div>
            <?php
            require_once('../menu.php');
            $kill = filter_input(INPUT_GET, "id");
            if ($kill == "kill") {
                setcookie("shop", "", time() - 86400);
            }
            ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <form action="6_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>零食選購區</caption>
                            <tr><td>&nbsp;</td><td>產品名稱</td><td>價格</td><td>購買數量</td></tr>
                            <?php
                            require_once '../DB_config.php';
                            require_once '../DB_class.php';
                            $db = new DB();
                            $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                            $db->query("select * from product");
                            while ($result = $db->fetch_array()) {
                                $id = $result["id"];
                                $item_id = "item_" . $result["id"];
                                $chk_id = "chk_" . $result["id"];
                                echo "<tr><td>" . "<input type='checkbox' namd=$id id=$chk_id onclick='chk_disable($id);' />" . "</td><td>" . $result["product_name"] . "</td><td>" . $result["price"] . "</td><td><input type='text' size='2' maxlength='2' name=$id id=$item_id disabled />" . "</td></tr>";
                            }
                            ?>
                            <tr>
                                <td colspan="4">
                                    <input type="submit" value="加入購物車"/>
                                    <input type="reset" value="取消"/>
                                    <?php
                                    
                                    if (!empty($_COOKIE["shop"])) {
                                        $file_name = "onclick=\"window.location.href = '6_list.php'\"";
                                        echo $link_list = "<input type='button' value='購物車內容' $file_name />";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </form>

                    </br>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                require_once($root . '/blue/link_here.php');
                ?>
            </div>
        </div>
    </body>
</html>