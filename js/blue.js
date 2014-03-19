function validateEmail(val) {
    var mail = val.value;
    var re = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
    if (mail.search(re)) {
        alert("E-Mail 格式錯誤!");
    }
}
function check_ok(val) {
    var x;
    p_id = val;
    var r = confirm("您確定要刪除嗎？");
    if (r == 1)
    {
        location = '9_del.php?id='+p_id;
    }
    
}

function check_ok_7(val) {
    p_id = val;
    alert(p_id);
    var r = confirm("您確定要刪除嗎？");
    if (r == 1)
    {
        location = '7_del.php?id='+p_id;
    }
    
}

function visable_pass() {
    var x = document.getElementById("visable").checked;

    if (x == 1) {
        document.getElementById("password").type = 'text';
    }

    if (x == 0) {
        document.getElementById("password").type = 'password';
    }
}

function chk_disable(obj) {
  var x = obj;
  var y = 'chk_'+x;
  var z = document.getElementById(y).checked;
  var a = 'item_'+x;  
  var b = document.getElementById(a).disabled;
  if(z == 1){
    document.getElementById(a).disabled = false;
    document.getElementById(a).value = 1;
  }
  else{
    document.getElementById(a).disabled = true;
  }   
}

function chk_read() {
    var x = document.getElementById("check_3").checked;
    var x1 = document.getElementById("check_1").checked;
    if (x == 1) {
        document.getElementById("disable_2").disabled = false;
    } else if (x == 0) {
        document.getElementById("disable_2").disabled = true;
    }
    if (x1 == 1) {
//        alert(x1);
        document.getElementById("disable_1").disabled = false;
    } else if (x1 == 0) {
//        alert(x1);
        document.getElementById("disable_1").disabled = true;
    }
}
function test01() {
    var x = document.getElementById("check_2").checked;
    if (x == 1) {
        document.getElementById("readOnly_1").readOnly = false;
    }
    if (x == 0) {
        document.getElementById("readOnly_1").readOnly = true;
    }
}