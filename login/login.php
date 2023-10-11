<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Exo 1.1 -->
<!-- Créer une page login.php contenant un formulaire avec une zone login et une zone mot de passe. Ajouter un
bouton vérifier de type submit qui appelle la page verif_login.php. Cette page affiche "login correct" si le nom est
égal à "Dupont" et le mot de passe "alibaba". Sinon cette page redirige sur la page login.php avec le message
"login incorrect". -->

<!-- Exo 1.2 -->
<!-- Reprendre l'exercice 1 et afficher dans la page login.php le nombre de fois où l'utilisateur a essayé de se loguer
avant d'utiliser les bons login et mot de passe. Afficher aussi dans cette page tous les login et mot de passe
essayés. -->
<form action="verif_login.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="Dupont">
    <label for="password">Passworld:</label>
    <input type="password" name="password" id="password" value="alibaba">
    <input type="submit" name="ok" value="Envoyer">
</form>
<?php
$temps_expiration = 365 * 24 * 3600;
if (!isset($_COOKIE["essaie"])) {
    setcookie("essaie", 0, time()+$temps_expiration);
    // echo("nombre d'erreur ".$_COOKIE["essaie"]);
}
    if (isset($_GET["error"])) {
        echo($_GET["error"]."; ");
        echo("nombre d'erreur = ".$_COOKIE["essaie"]);
    }
?>

</body>
</html>