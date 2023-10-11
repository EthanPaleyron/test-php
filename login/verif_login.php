<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_POST["name"] == "Dupont" && $_POST["password"] == "alibaba") {
        echo("login correct");
    } else {
        // file_put_contents("num-error.txt", (int)file_get_contents("num-error.txt") + 1);
        $_COOKIE["essaie"] ++;
        header("Location:login.php?error=login%20incorrect");
    }
    ?>
</body>
</html>