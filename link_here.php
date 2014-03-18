<ul>
    <li><a href="http://user.frdm.info/ckhung/index.php">阿貴的家</a></li>
    <li><a href="http://user.frdm.info/ckhung/mm/">阿貴的簡報</a></li>
    <li><a href="http://www.study-area.org/menu2.htm">Linux 學習地圖</a></li>
    <?php
    if (!empty($_COOKIE["username_cookie"])) {
        echo "<li><a href=$project_path/blue/logout.php>登出</a></li>";
    } else {
        echo "<li>歡迎光臨</li>";
    }

//    echo "<li><a href=$project_path/blue/logout.php>登出</a></li>";
    ?>
</ul>
