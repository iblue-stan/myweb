<html>
    <title></title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
        <?php require_once '../php/function.php' ?>
    </head>

    <body>
        <table border="1">
            <caption>會員註冊</caption>
            <tr>
                <td>
                    <form name = f1 action="2_response.php" method="post">
                        <label>姓名：</label>
                        <input type="text" id="name" name="name"></input>
                        </br>
                        <label>電話：</label>
                        <input type="text" id="tel" name="tel"></input>
                        </br>
                        <label>住址：</label>
                        <input type="text" id="address" name="address" size="50"></input>
                        </br>
                        <label>星座：</label>
                        <select id="constellation" name="constellation">
                            <option value=""></option>
                            <?php open_file_opt("constellation.txt"); ?>
                        </select>
                        </br>
                        <label>密碼：</label>
                        <input type="password" id="password" name="password" size="16" ></input>
                        <!--<button type="button" id="visable" name="visable" onclick="visable_pass()">顯示/隱藏密碼</button>-->
                        <input type="checkbox" id="visable" name="visable" onclick="visable_pass(this);">顯示/隱藏密碼</input>
                        </br>
                        <label>姓別：</label>
                        <input type="radio" id="sex" name="sex" value="1">男</input>
                        <input type="radio" id="sex" name="sex" value="0">女</input>
                        </br>
                        <label>語言專長</label>
                        <input type="checkbox" id="lang[]" name="lang[]" value="1">中文</input>
                        <input type="checkbox" id="lang[]" name="lang[]" value="2">台語</input>
                        <input type="checkbox" id="lang[]" name="lang[]" value="3">英文</input>
                        <input type="checkbox" id="lang[]" name="lang[]" value="4">德文</input>
                        <input type=submit value="送出"></input>
                        <input type=reset value="取消"></input>
                    </form>
                </td>
            </tr>
        </table>
        <?php ?>
    </body>
</html>