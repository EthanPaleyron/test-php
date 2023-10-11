<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="images-info.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
    <input type="file" name="photo">
    <br>
    <input type="submit" name="ok" value="Envoyer">
</form>
</body>
</html>