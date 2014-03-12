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
                    <form action="8_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>iBlue&會員註冊系統</caption>
                            <tr>
                                <td>
                                    <label>姓名：</label>
                                </td>
                                <td>
                                    <input type="text" name="username" id="username" size="20" maxlength="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>帳號：</label>
                                </td>
                                <td>
                                    <input type="text" name="account" id="account" size="20" maxlength="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>密碼：</label>
                                </td>
                                <td>
                                    <input type="password" name="password" id="password" size="20" maxlength="20"/>
                                    <input type="checkbox" id="visable" name="visable" onclick="visable_pass(this);"/>
                                    <label>顯示密碼</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>住址：</label>
                                </td>
                                <td>
                                    <input type="text" name="address" id="add" size="60" maxlength="80"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>郵件：</label>
                                </td>
                                <td>
                                    <input type="text" name="email" id="email" size="60" maxlength="80" onchange="validateEmail(this);"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>電話：</label>
                                </td>
                                <td>
                                    <input type="text" name="tel" id="tel" size="20" maxlength="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>性別：</label>
                                </td>
                                <td>
                                    <input type="radio" name="sex" id="sex" value="man"/><label>男</label>
                                    <input type="radio" name="sex" id="sex" value="female"/><label>女</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>生日：</label>
                                </td>
                                <td>
                                    <input type="text" id="birthday" name="birthday" size="12" onfocus="HS_setDate(this)" readOnly/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="送出"/>
                                </td>
                            </tr>
                        </table>
                    </form>
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