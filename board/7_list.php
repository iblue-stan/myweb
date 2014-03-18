<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>iBlue 的雜記小舖</title>
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
                                ?>
                            </td>
                        </tr>
                    </table>
                    <form action="7_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>iBlue&留言版</caption>
                            <?php
                            $sql = "SELECT * FROM guestbook";
                            $db = new DB();
                            $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                            $db->query($sql);
                            while ($result = $db->fetch_array()) {
                                $id = $result["id"];
                                if (!empty($_COOKIE["username_cookie"])) {
                                    $deleteLink = "<a href='#' onclick='check_ok_7($id)'>刪除</a>";
                                } else {
                                    $deleteLink = "<img src='../images/linux.png' alt='Smiley face' height='26' width='26'>";
                                }
                                echo '<tr><td>' . $result['name'] . '</td><td>' . $result['email'] . '</td><td>' . $result['text'] . '</td><td>' . $deleteLink . '</td></tr>';
                            }
                            ?>
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