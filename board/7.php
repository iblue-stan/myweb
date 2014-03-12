<html>
    <title>iBlue 的個人網站</title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
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
//                                while($result = $db->fetch_array()){
//                                    print_r($result);
//                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <form action="7_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>iBlue&留言版</caption>
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
                                    <label>郵件：</label>
                                </td>
                                <td>
                                    <input type="text" name="email" id="email" size="60" maxlength="80" onchange="validateEmail(this);"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>留言內容：</label>
                                </td>
                                <td>
                                    <textarea rows="10" cols="60" name="content" id="content">請輸入留言內容</textarea>
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