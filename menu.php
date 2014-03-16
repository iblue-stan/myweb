<div id="menubar" class="menubar">
    <ul>
        <?php
        $mod ="";

        if(isset($_SESSION["mod"])){
            $mod = input_filter(INPUT_SESSION,"mod");
        }

        if($mod == "admin"){
            $admin = "<ul><li><a href='8_list.php'>會員列表</a></li></ul></li>";
        }
        else{
            $admin = "";
        }
        
        echo "<li><a href=$project_path/blue/board/4.php>旅遊行程訂購</a></li>";
        echo "<li><a href=$project_path/blue/board/5.php>訂餐模組</a></li>";
        echo "<li><a href=$project_path/blue/board/6.php>零食訂購</a></li>";
        echo "<li><a href=$project_path/blue/board/7.php>留言版</a><ul><li><a href='7_list.php'>查看留言版</a></li></ul></li></li>";
        echo "<li><a href=$project_path/blue/board/8.php>會員註冊</a>$admin</li>";
        echo "<li><a href=$project_path/blue/board/9.php>產品管理</a></li>";
        ?>
    </ul>
</div>
