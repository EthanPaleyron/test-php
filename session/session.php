<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php session_start();
    $value = "Ethan";
    $_SESSION["nom"] = $value;
    ?>
    <a href="http://localhost/test-php/session/affichier-session.php">Affichier les session</a>
</body>

</html>