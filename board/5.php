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
            <?php require_once('../menu.php'); ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table align="center">
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
                    <br />
                    <form action="5_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>訂便當系統</caption>
                            <tr>
                                <td>
                                    <label>姓名：</label>
                                <td>
                                    <input id="name" name="name" type="text" size="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>主菜：</label>
                                </td>
                                <td>
                                    <select id="item" name="item">
                                        <option value=""></option>
                                        <?php open_file_opt("../board/main_food.txt"); ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>份數</label>
                                </td>
                                <td>
                                    <input type="text" id="num" name="num" value="1" size="2" maxlength="2"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>備註：</label>
                                </td>
                                <td>
                                    <textarea rows="3" cols="30" id="memo" name="memo" /></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="加入購物車"/>
                                    <!--<input type="button" value="查看購物車內容"/>-->
                                    <input id="inp" type="button" value="購物車內容" onclick="location.href = '5_list.php';" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                set_include_path('./'.PATH_SEPARATOR.dirname(__FILE__));
                require_once($root.'/blue/link_here.php');
                ?>
            </div>
        </div>
    </body>
</html>