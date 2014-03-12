<?php
$root = filter_input(INPUT_SERVER, "CONTEXT_DOCUMENT_ROOT");
$project_path = filter_input(INPUT_SERVER, "CONTEXT_PREFIX");

function today_day($m, $d, $y) {
    echo date("Y-m-d H:i:s", mktime(date("H"), date("i"), date("s"), date("m") + $m, date("d") + $d, date("Y") + $y));
}

function open_file($f) {
    $file = fopen($f, "r");
    while (!feof($file)) {
        $values[] = fgets($file);
    }
    fclose($file);
    return $values;
}

function open_file_opt($f) {
    $values = open_file($f);
    foreach ($values as $key => $result) {
        $key = $key + 1;
        echo "<option value='$key'>$result</option>";
    }
}

function board($f) {
    $values = open_file($f);
    foreach ($values as $key => $result) {
        $key = $key + 1;
        echo "<tr><td width='5%' align='center'><p>$key</p></td><td><p>$result</p></td></tr>";
    }
}

function week() {
    $week = date("l");
    switch ($week) {
        case "Monday":
            echo "今天星期一";
            break;
        case "Tuesday":
            echo "今天星期二";
            break;
        case "Wednesday":
            echo "今天星期三";
            break;
        case "Thursday":
            echo "今天星期三";
            break;
        case "Friday":
            echo "今天星期四";
            break;
        case "Saturday":
            echo "今天星期五";
            break;
        case "Sunday":
            echo "今天星期六";
            break;
    }
}

function test($a) {     //計算圓週率
    $pi = 3.1415926;
    $result = $pi * $a;
    return $result;
}

function mybir() {      //計算年齡(未完成)
    $age = date("Y-m-d", mktime(0, 0, 0, 1, 1, 1980));
    $now_year = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
    $result = $now_year - $age;
    return $result;
}

function time_elapsed_A($secs) {        //計算天數(未完成)
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
    );

    foreach ($bit as $k => $v)
        if ($v > 0)
            $ret[] = $v . $k;

    return join(' ', $ret);
}
