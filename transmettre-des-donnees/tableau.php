<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>