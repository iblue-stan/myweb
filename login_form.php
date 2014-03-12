<form name="login" method="post" action="login.php">
    <table align="center" width="250px" border="1">
        <caption>會員登入</caption>
        <tr>
            <td>
                姓名：
            </td>
            <td>
                <input type="type" id="username" name="username"></input>
            </td>
        </tr>
        <tr>
            <td>
                帳號：
            </td>
            <td>
                <input type="text" id="name" name="name"></input>
            </td>
        </tr>
        <tr>
            <td>
                密碼：
            </td>
            <td>
                <input type="password" id="password" name="password"></input><br />
                <input type="checkbox" id="visable" name="visable" onclick="visable_pass(this);">顯示/隱藏密碼</input>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type=submit value="確定"></input>
                <input type=reset value="取消"></input>
            </td>
        </tr>
    </table>
</form>

