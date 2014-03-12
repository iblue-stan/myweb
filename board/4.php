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
            <?php require_once('../menu.php'); ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table align="center">
                        <tr>
                            <td>
                                <?php
                                session_start();
                                echo "您好：" . $_SESSION['username_session'];
                                echo "</br>今天日期：";
                                echo today_day("", "", "");
                                echo "</br>";
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <form action="4_response.php" method="POST">
                        <table border="1" align="center">
                            <tr>
                                <td>
                                    <input type="radio" name="item" value="1,19000" />泰國行程$19,000</input><br/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="item" value="2,29000" />日本行程$29,000</input></br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="item" value="3,26000" />沖繩行程$26,000<br/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="passport" name="passport" value="1,2000"/>代辨護照$2,000<br/>
                                    <input type="checkbox" id="china_port" name="china_port" value="1,1500"/>代辦台胞證$15,00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>報名人數：</label>
                                    <input type="text" id="num" name="num" size="2" maxlength="2"/>
                                    <input type="submit" value="報名"/>
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                require_once '../link_here.php';
                ?>
            </div>
        </div>
    </body>
</html>