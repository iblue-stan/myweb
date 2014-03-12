<html>
    <title>iBlue 的個人網站</title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
        <script type="text/javascript" src="../js/selectDate.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>

        <link rel="stylesheet" href="../js/jquery-ui-1.10.4/themes/base/jquery-ui.css">
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <script>
            $(function() {
                $("#accordion").accordion();
            });
        </script>

        <?php
        require_once '../php/function.php';
        require_once '../DB_config.php';
        require_once '../DB_class.php';
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1><a href="../index.php">iBlue 的雜記小舖</a></h1></div>
            <?php require_once('../menu.php'); ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table class="table" align="center">
                        <tr>
                            <td>
                                <?php
                                echo "今天日期：";
                                echo today_day("", "", "");
//                                $db = new DB();
//                                $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
//                                $db->query("select * from guestbook");
//                                while ($result = $db->fetch_array()) {
//                                    print_r($result);
//                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>

                <div id="productList">
                    <div id="accordion">
                        <h3>新增產品</h3>
                        <div>

                            <form action="9_response.php" method="POST">
                                <table class="table1" border="1" align="center">
                                    <caption>iBlue&產品管理系統</caption>
                                    <tr>
                                        <td>
                                            <label>產品名稱：</label>
                                        </td>
                                        <td>
                                            <input type="text" name="prod_name" id="prod_name" size="50" maxlength="50"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>價格：</label>
                                        </td>
                                        <td>
                                            <input type="text" name="price" id="price" size="7" maxlength="7"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>類別：</label>
                                        </td>
                                        <td>
                                            <select name="kind">
                                                <option value="1">食品</option>
                                                <option value="2">飲料</option>
                                                <option value="3">葯品</option>
                                                <option value="4">化妝品</option>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>備註：</label>
                                        </td>
                                        <td>
                                            <input type="textarea" name="memo" id="memo" rols="10" rows="10"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="送出"/>
                                            <input type="reset" value="重置"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>


                        </div>
                        <h3>產品列表</h3>
                        <div>
                            <table class="table1" border="1" align="center">
                                <tr><td>名稱</td><td>價格</td><td>種類</td><td>備註</td></tr>
                                <?php
                                $sql = "SELECT * FROM product";
                                $db = new DB();
                                $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                                $db->query($sql);

                                while ($result = $db->fetch_array()) {
                                    echo "<tr><td>" . $result["product_name"] . "</td>" . "<td>" . $result["price"] . "</td>" . "<td>" . $result["kind"] . "</td>" . "<td>" . $result["memo"] . "</td>" . "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        <h3>Section 3</h3>
                        <div>


                        </div>
                        <h3>Section 4</h3>
                        <div>

                        </div>
                    </div>
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