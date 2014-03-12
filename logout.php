<?php

session_start();
if (isset($_SESSION["username_session"])) {
    unset($_SESSION["username_session"]);
    header('refresh:3;url=index.php');
    echo "登出成功!";
}
else{
    header('refresh:0;url=index.php');
}
