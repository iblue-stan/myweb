<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        print_r($_POST);
        $username = $_POST["username"];
        $email = $_POST["email"];
        $content = $_POST["content"];

        $wcont = $username . $email . $content;
        $filename = "board.txt";

        if (file_exists($filename)) {
            $file = fopen($filename, "w");
            fwrite($file, $wcont);
            fclose($file);
        }
        ?>
    </body>
</html>
