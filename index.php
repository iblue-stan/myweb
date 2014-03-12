<html>
    <title>iBlue 的個人網站</title>
    <head>
        <?php
        session_start();
        require_once 'php/function.php';
        ?>
        <script type="text/javascript" src="js/blue.js"></script>
        <link rel="stylesheet" href="css/blue.css" type="text/css" media="screen"/>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1>iBlue 的雜記小舖</h1></div>
            <?php require_once 'menu.php'; ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table align="center" width="60%" border="1">
                        <tr>
                            <td colspan="2" align="center">
                                <h2>公佈欄</h2>
                            </td>
                        </tr>
                        <?php board("board/messenger.txt"); ?>
                    </table>
                    </br>
                    <?php
                    if (!isset($_SESSION["username_session"])) {
                        require_once 'login_form.php';
                    }
                    ?>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                require_once($root.'/blue/link_here.php');
                ?>
            </div>
        </div>
    </body>
</html>