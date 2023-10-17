<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Page de réception du prénom et du nom</h2>
    Prénom:
    <?php echo $_POST["prenom"]; ?><br>
    Nom:
    <?php echo $_POST["nom"]; ?><br>
    Passworld:
    <?php echo $_POST["passworld"]; ?><br>
    Textarea:
    <?php echo $_POST["textarea"]; ?><br>
    Pays:
    <?php echo $_POST["pays"]; ?><br>
    Pays multiples:
    <?php if (isset($_POST["paysMultiples"])) {
        echo "Les pays sélectionnés sont:";
        print_r($_POST["paysMultiples"]);
    } else {
        echo "aucun pays sélectionné.";
    } ?><br>
    Pays check:
    <?php if (isset($_POST["paysCheckbox"])) {
        echo "Les pays sélectionnés sont:";
        print_r($_POST["paysCheckbox"]);
    } else {
        echo "aucun pays sélectionné.";
    } ?><br>
    Pays radio:
    <?php if (isset($_POST["paysRadio"])) {
        echo "Le pays sélectionné est:";
        echo $_POST["paysRadio"];
    } else {
        echo "aucun pays sélectionné.";
    } ?><br>
    Pays radio:
    <?php echo $_POST["hidden"]; ?><br>
    Submit:
    <?php echo $_POST["bouton"]; ?><br>
</body>

</html>