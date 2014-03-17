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
            <?php require_once '../menu.php'; ?>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <?php
                    require_once '../DB_config.php';
                    require_once '../DB_class.php';


                    $sql = "SELECT * FROM account";
                    $db = new DB();
                    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
                    $db->query($sql);

//        if ($sex == "man") {
//            $sex = 1;
//        } else {
//            $sex = 0;
//        }

                    while ($result = $db->fetch_array()) {
                        print_r($result);
                    }
                    ?>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php require_once($root . '/blue/link_here.php'); ?>
            </div>
        </div>
    </body>
</html>