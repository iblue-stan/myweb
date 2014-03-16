<?php

if (empty($_COOKIE["username_cookie"])) {
    setcookie("username_cookie",null,-86400);
    setcookie("userlevel_cookie",null,-86400);
    header('refresh:3;url=index.php');
    echo "登出成功!";
}
else{
    header('refresh:0;url=index.php');
}
