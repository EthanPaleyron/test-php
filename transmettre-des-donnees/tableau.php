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
    session_start();
    if (!isset($_SESSION["names"])) {
        $_SESSION["names"] = [];
    }
    if (!isset($_SESSION["password"])) {
        $_SESSION["password"] = [];
    }
    $temps_expiration = 365 * 24 * 3600;
    if (!isset($_COOKIE["try"])) {
        setcookie("try", 0);
    }
    if (isset($_GET["error"])) {
        echo ($_GET["error"] . "<br>");
        setcookie("try", (int) $_COOKIE["try"] += 1);
        echo ("nombre d'erreur = " . $_COOKIE["try"]);
        var_dump($_SESSION["names"]);
        var_dump($_SESSION["password"]);
    }
    ?>
    <hr>

    <!-- Exo 1.3 -->
    <!-- un formulaire avec une liste à sélection simple contenant des pays et en-dessous une zone de type <div> affichant les villes suivant le pays sélectionné. Le formulaire contient un bouton de type submit permettant de rappeler la page elle-même suivant le pays sélectionné. L'objectif est de réaliser cette page sans utiliser de javascript. Lorsque vous affichez la page pour la première fois, il faut afficher le premier pays de la liste avec ces villes correspondantes. -->
    <form action="" method="post">
        <select name="pays">
            <?php
            $pays = array('France', 'Italie', 'Allemagne', 'Russie');
            $villes['France'][0] = "Paris";
            $villes['France'][1] = "Lyon";
            $villes['France'][2] = "Marseille";
            $villes['Italie'][0] = "Rome";
            $villes['Italie'][1] = "Milan";
            $villes['Italie'][2] = "Naples";
            $villes['Allemagne'][0] = "Berlin";
            $villes['Allemagne'][1] = "Munich";
            $villes['Allemagne'][2] = "Francfort";
            $villes['Russie'][0] = "Moscou";
            $villes['Russie'][1] = "Saint-Pétersbourg";
            $villes['Russie'][2] = "Nizhny-Novgorod";

            if (isset($_POST["pays"])) {
                $selected = ($_POST["pays"]);
            } else {
                $selected = "France";
            }

            foreach ($pays as $value) {
                $option = "<option value='" . $value . "'";
                if ($value === $selected) {
                    $option .= " selected";
                }
                $option .= ">" . $value . "</option>";
                echo $option;

            }
            ?>
        </select>
        <button class="submit">Submit</button>
    </form>

    <div>
        <?php
        echo ("<p>Pays:" . $selected . "</p>");
        echo ("<p>Villes:</p>");
        foreach ($villes[$selected] as $key => $value) {
            echo ("<p>" . $value . "</p>");
        }
        ?>
        </select>
    </div>
    <hr>

    <!-- Exo 1.4 -->
    <!-- Crée un champ nombre et un bouton submit.
    Vous saisissez un nombre et ensuite la page doit générer autant de champ de type text avec un nom différent et lorsque vous cliquez sur un de ces champs cela affiche son nom dans une alert(). -->
    <form action="" method="post">
        <input type="number" name="number" min="0" max="1000" value="10">
        <input type="submit" value="Submit">
    </form>

    <div>
        <?php
        if (isset($_POST["number"])) {
            $num = $_POST["number"];
            for ($i = 1; $i <= $num; $i++) {
                echo ("<input type='text' name='num' value='" . $i . "'>");
            }
        }
        ?>
    </div>
    <script>
        const nums = document.getElementsByName("num");
        nums.forEach(num => {
            num.addEventListener("click", () => {
                alert(num.value);
            })
        });
    </script>
    <hr>

    <!-- Exo 1.5 -->
    <!-- Crée un input type file et un bouton submit.
Créer une page recoit.php qui stocke les images dans le dossier image.
Créer une page graphique.php qui affiche des barres verticales représentant le nombre de fichiers < 50ko, < 100
ko, < 500 ko, < 1Mo et >= 1Mo
Créer une page affichage.php qui affiche graphique.php -->
</body>

</html>