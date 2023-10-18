<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if ($_POST["name"] == "Dupont" && $_POST["password"] == "alibaba") {
        echo ("login correct");
    } else {
        header("Location:tableau.php?error=login%20incorrect");
        array_push($_SESSION["names"], $_POST["name"]);
        array_push($_SESSION["password"], $_POST["password"]);
    }
    ?>
</body>

</html>