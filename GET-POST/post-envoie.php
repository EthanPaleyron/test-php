<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post-recu.php" method="POST">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" value="Jean">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" value="Dupont">
    <input type="password" name="passworld" value="bt54z6489vter8">
    <textarea name="textarea">Salut c'est moi!</textarea>
    <select name="pays">
        <option value="F">France</option>
        <option value="E">Espagne</option>
        <option value="R" selected>Russie</option>
    </select>
    <select name="paysMultiples[]" multiple="multiple">
        <option value="F">France</option>
        <option value="E">Espagne</option>
        <option value="R">Russie</option>
        <option value="A">Allemagne</option>
    </select><br>
    <input type="checkbox" name="paysCheckbox[]" value="F" checked>France
    <input type="checkbox" name="paysCheckbox[]" value="E">Espagne
    <input type="checkbox" name="paysCheckbox[]" value="R">Russie
    <input type="checkbox" name="paysCheckbox[]" value="A" checked>Allemagne
    <input type="radio" name="paysRadio" value="F">France
    <input type="radio" name="paysRadio" value="E">Espagne
    <input type="radio" name="paysRadio" value="R" selected>Russie
    <input type="radio" name="paysRadio" value="A">Allemagne
    <input type="hidden" name="hidden" value="champ caché">
    <input type="submit" name="bouton" value="Envoyer">
</form>
</body>
</html>