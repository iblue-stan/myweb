<html>
    <title><a href="index.php">iBlue 的個人網站</a></title>
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
                    <table align="center" border="1" width="70%">
                        <tr>
                            <td colspan="3">
                                <div id="item"><p><marquee direction="right" height="30" scrollamount="5" behavior="alternate">台中今天天氣晴...</marquee></p></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:10%">
                                <p>Name</p>
                            </td>
                            <td>
                                <p>iBlue</p>
                            </td>
                            <td rowspan="3">
                                <img width="100" height="110" src="images/cat.jpg"></img>
                            </td>
                        </tr>
                        <td>
                            <p>學歷</p>
                        </td>
                        <td>
                            <p>僑光技術學院</p>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <p>經歷</p>
                            </td>
                            <td>
                                <p>中油股份有限公司</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>自傳</p>
                            </td>
                            <td>
                                <p>從事資訊工作多年；對資訊工作非常熱愛；目前在中區職訓中心繼續努力進修中；希望能再繼續加強專業的技能；</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <p>電子郵件</p>
                            </td>
                            <td>
                                <p><a href="mailto:kevilan@gmail.com?subject:沒事多喝水">請多多指教喔！！</a></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><p>今天日期</p></td>
                            <td><p><?php today_day("", "", ""); ?></p><p><?php week(); ?></p></td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php require_once($root . '/blue/link_here.php'); ?>
            </div>
        </div>
    </body>
</html>