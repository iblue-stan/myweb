<html>
<title></title>
<head></head>

<body>
  <table border="1">
  <caption>訂餐系統</caption>
	<tr>
	  <td>
	  <form name = f1 action="3_response1.php" method="post">
		  <label>姓名：</label>
		  <input type="text" id="name" name="name"></input>
		</br>
		  <label>前菜：</label>
		  <input type="radio" id="first" name="first" value="山葯">山葯</input>
		  <input type="radio" id="first" name="first" value="青菜">青菜</input>
		</br>
		  <label>沙拉：</label>
		  <input type="radio" id="salad" name="salad" value="水果沙拉">水果沙拉</input>
		  <input type="radio" id="salad" name="salad" value="芒果沙拉">芒果沙拉</input>
		</br>
		  <label>&nbsp;&nbsp;&nbsp;&nbsp;湯：</label>
		  <input type="radio" id="soup" name="soup" value="南瓜湯">南瓜湯</input>
		  <input type="radio" id="soup" name="soup" value="東瓜湯">東瓜湯</input>
		</br>
		  <label>飲料：</label>
		  <input type="radio" id="drink" name="drink" value="紅茶">紅茶</input>
		  <input type="radio" id="drink" name="drink" value="綠茶">綠茶</input>
		  <input type="radio" id="drink" name="drink" value="咖啡">咖啡</input>
		  <input type="radio" id="drink" name="drink" value="奶茶">奶茶</input>
		</br>
		  <label>主菜：</label>
		<select id="constellation" name="constellation">
		  <option value=""></option>
		  <?php select_food(); ?>
		</select>
		</br>
		  <label>甜點</label>
		  <input type="checkbox" id="lang[]" name="lang[]" value="1" onclick="chk(this)">奶酪</input>
		  <input type="checkbox" id="lang[]" name="lang[]" value="2" onclick="chk(this)">香草冰淇淋</input>
		  <input type="checkbox" id="lang[]" name="lang[]" value="3" onclick="chk(this)">蛋塔</input>
		  <input type="checkbox" id="lang[]" name="lang[]" value="4" onclick="chk(this)">巧克力</input>
		<input type=submit value="送出"></input>
		<input type=reset value="取消"></input>
	  </form>
	  </td>
	</tr>
  </table>

<?php
function select_food(){
  require_once("3-1.php");
  foreach($values as $key => $result){
	$key = $key + 1;
	echo "<option value='$key'>$result</option>";
  }
}
?>
</body>
</html>