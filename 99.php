<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1" align="center">
            <caption>九九乘法表</caption>
            <tr>
                <?php
                for ($i = 2; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j < 10; $j++) {
                        $sum = $i * $j;
                        echo "<td>" . $i . '*' . $j . '=' . $sum . '  ' . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
    </body>
</html>
