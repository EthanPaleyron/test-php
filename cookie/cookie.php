<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $_SESSION['nom'] = "Jean";
    echo ("le nom est = " . $_SESSION['nom']);
    $temps_expiration = 365 * 24 * 3600;
    setcookie("name", "Jean", time() + $temps_expiration);
    if (isset($_COOKIE['name'])) {
        echo "Le nom en cookie est: " . $_COOKIE['name'];
    }

    $tableau = array('Jean', 'Robert', 'Aline');
    $temps_expiration = 365 * 24 * 3600;
    $chaine_serialisee = serialize($tableau);
    setcookie("serialise", $chaine_serialisee, time() + $temps_expiration);
    if (isset($_COOKIE["serialise"])) {
        $nouveau_tableau = unserialize($_COOKIE["serialise"]);
        print_r($nouveau_tableau);
    }
    ?>
</body>

</html>