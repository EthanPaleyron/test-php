<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- 1ER BASE DE PHP -->

    <?php
    echo "<p>Hello !</p>";

    $nom = 'salut';
    $$nom = 'Bob';
    echo $salut . "<br>";

    define("PI", 5);
    echo (PI);

    $fruit = 'pomme';
    $return_value = match ($fruit) {
        'pomme' => 'Ce fruit est une pomme',
        'poire' => 'Ce fruit est une poire',
        'raisin' => 'Ce fruit est un raisin',
    };
    var_dump($return_value);

    $variable = 15.325;
    echo "La valeur entière est: " . (int) $variable . "<br>";

    $tableau = array('A1' => 'Jean', 'B4' => 'Robert', 3 => 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
    print_r($tableau)
        ?>

    <!-- LES EXOS -->

    <!-- Exo 1.1 -->
    <!-- Créer une constante Vitesse_lumiere égal à 299792 km/s. Afficher « La vitesse de la lumière est 299792 km/s » en utilisant la constante. -->
    <h2>Exo 1.1</h2>
    <?php
    define("V", 299792);
    echo "La vitesse de la lumière est " . (V) . " km/s";
    ?>

    <!-- Exo 1.2 -->
    <!-- Rédigez un programme informatique qui affiche les nombres de 1 à 100 dans l’ordre, en remplaçant les multiples de 3 par le mot Fizz, les multiples de 5 par Buzz, et les multiples de 15 par FizzBuzz -->
    <h2>Exo 1.2</h2>
    <?php
    for ($i = 0; $i <= 100; $i++) {

        if ($i % 15 === 0) {
            echo ("FizzBuzz") . " ";
        } else if ($i % 5 === 0) {
            echo ("Buzz") . " ";
        } else if ($i % 3 === 0) {
            echo ("Fizz") . " ";
        } else {
            echo ($i) . " ";
        }
    }
    echo "<br>"
        ?>

    <!-- Exo 1.3 -->
    <!-- Ecrire une boucle permettant d’afficher tous les nombres de 1 à 20 séparées par un espace. -->
    <h2>Exo 1.3</h2>
    <?php
    for ($i = 0; $i <= 20; $i++) {
        echo ($i) . " ";
    }
    ?>

    <!-- Exo 1.4 -->
    <!-- Reprendre l’exercice 1.3 et mettre en vert tous les nombres < 10 et en rouge les autres nombres. -->
    <h2>Exo 1.4</h2>
    <?php
    for ($i = 0; $i <= 20; $i++) {
        if ($i >= 10) {
            echo ("<p class='red'>" . $i . "</p>");
        } else {
            echo ("<p class='lime'>" . $i . "</p>");
        }
    }
    ?>

    <!-- Exo 1.5 -->
    <!-- Ecrire une boucle pour calculer la factorielle d’un nombre. -->
    <h2>Exo 1.5</h2>
    <?php
    function factorielle($n)
    {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
    echo (factorielle(8));
    ?>

    <!-- Exo 2.1 -->
    <!-- Créer un tableau contenant les chiffres de 1 à 10 et un autre tableau contenant les nombres de 11 à 20. Ensuite créer un autre tableau contenant le somme des 2 premiers tableaux et afficher ses valeurs. Il faut utiliser les boucles pour créer ces tableaux. -->
    <!-- PAS FINIS -->
    <h2>Exo 2.1</h2>
    <?php
    $array1 = [];
    $array2 = [];
    $array3 = [];
    for ($i = 1; $i <= 10; $i++) {
        array_push($array1, $i);
    }
    for ($i = 11; $i <= 20; $i++) {
        array_push($array2, $i);
    }

    for ($i = 0; $i < 10; $i++) {
        array_push($array3, $array1[$i] + $array2[$i]);
    }
    // print_r($array3."<br>");
    ?>

    <!-- Exo 2.2 -->
    <!-- Créer un tableau de 10 valeurs au hasard entre 1 et 100. La fonction rand($min,$max); permet de tirer un nombre au hasard entre $min et $max. Trier ce tableau du plus petit au plus grand puis mettre toutes les valeurs dans une chaîne de caractères séparées par des ; et afficher la chaîne. -->
    <h2>Exo 2.2</h2>
    <?php
    $array = [];
    $min = 1;
    $max = 100;
    for ($i = 0; $i <= 10; $i++) {
        array_push($array, rand($min, $max));
    }
    sort($array);
    echo (implode("; ", $array))
        ?>

    <!-- Exo 2.3 -->
    <!-- Créer le code PHP permettant de générer ce tableau en HTML à l'aide des boucles tableau multidimensionnel. -->
    <h2>Exo 2.3</h2>
    <table>
        <thead>
            <tr>
                <th>Clé</th>
                <th colspan="2">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dupont = array("prénom" => "PAUL", "profession" => "ministre", "age" => 50);
            $durand = array("prénom" => "ROBERT", "profession" => "agriculteur", "age" => 45);
            $paleyron = array("prénom" => "ETHAN", "profession" => "devloppeur web", "age" => 17, "passion" => "sports");
            $tab_personne['DUPONT'] = $dupont;
            $tab_personne['DURAND'] = $durand;
            $tab_personne['PALEYRON'] = $paleyron;
            foreach ($tab_personne as $lastName => $value) {
                $maxRow = sizeOf($value) + 1;
                echo ("<tr>
    <td rowspan='" . $maxRow . "'>" . $lastName . "</td>
    <td>Clé</td>
    <td>Valeur</td>
    </tr>");
                foreach ($tab_personne[$lastName] as $key => $value) {
                    echo ("<tr>
        <td>" . $key . "</td>
        <td>" . $value . "</td>
        </tr>");
                }
            }
            ?>
        </tbody>
    </table>

    <!-- Exo 2.4 -->
    <!-- Voici deux tableaux: Le tableau1 est composé des éléments: 6,25,35 et 61 Le tableau2 est composé des éléments: 12,24 et 46 Ecrire le code permettant de calculer le schtroumpf de ces deux tableaux. Le schtroumpf se calcule en multipliant chaque valeur du tableau1 par celle du tableau2 et additionnant le tout. -->
    <h2>Exo 2.4</h2>
    <?php
    $result = 0;
    $tab1 = [6, 25, 35, 61];
    $tab2 = [12, 24, 46];
    foreach ($tab2 as $value) {
        foreach ($tab1 as $value2) {
            $result += $value * $value2;
        }
    }
    echo ($result);
    ?>

    <!-- Exo 3.1 -->
    <!-- Créer une variable $phrase = «Bonjour Monsieur Dupont. ». Afficher cette phrase en majuscule. Remplacer le mot Dupont par Durand. Afficher le nombre de caractères dans cette phrase. -->
    <h2>Exo 3.1</h2>
    <?php
    $phrase = "Bonjour Monsieur Dupont.";
    $phraseReaplace = str_replace("Dupont", "Durand", $phrase);
    $phraseMag = strtoupper($phraseReaplace);
    echo ('Dans "' . $phraseMag . '"il y a ' . strlen($phraseMag) . " de caractère");
    ?>

    <!-- Exo 3.2 -->
    <!-- Créer une variable $email = «jean.dupont@france.fr ». Afficher « Email correct » si les caractères @ et . sont présents dans l’email. Afficher « Email incorrect » sinon. Ne pas utiliser les expressions régulières. -->
    <!-- PAS FINIS -->
    <h2>Exo 3.2</h2>
    <?php
    // $email="jean.dupont@france.fr";
// if (strpos(substr($email, "@"),".") && strpos($email, "@")) {
//     echo("Email correct");
// } else {
//     echo("Email incorrect");
// }
    ?>

    <!-- Exo 4.1 -->
    <!-- Utiliser les expressions régulières permettant de reconnaître un nombre compris entre -999 et 999 -->
    <h2>Exo 4.1</h2>
    <?php
    if (preg_match("/^(-?(?!0)[0-9]{1,3}||0)$/", "-666") == true) {
        echo "l'expression regulière est bonne";
    } else {
        echo "l'expression regulière est pas bonne";
    }
    ?>

    <!-- Exo 4.2 -->
    <!-- Vérifier à l’aide des expressions régulières qu’une date est dans le format jj/mm/yyyy -->
    <h2>Exo 4.2</h2>
    <?php
    if (preg_match("/^([3][01]|[12]\d|[0]?[1-9])[\/-]([1][12]|[0]?[1-9])[\/-](\d{4}|\d{2})$/", "29/05/2023") == true) {
        echo "l'expression regulière est bonne";
    } else {
        echo "l'expression regulière est pas bonne";
    }
    ?>

    <!-- Exo 6.2 -->
    <!-- Créer une fonction convertissant les francs en euros. La fonction prend en paramètre les francs et retourne la valeur en euro. Afficher un tableau HTML avec toutes les sommes en francs de 0 à 1000 par pas de 50 et leur correspondance en euros. -->
    <h2>Exo 6.2</h2>
    <table>
        <thead>
            <tr>
                <th>Francs</th>
                <th>Euros</th>
            </tr>
        </thead>
        <tbody>
            <?php
            function converterFrancsToEuros($francs)
            {
                return $francs * 0.152449;
            }

            $numrOfFrancs = 1000;
            for ($i = 50; $i <= $numrOfFrancs; $i += 50) {
                echo ("<tr>
    <td>" . $i . "</td>
    <td>" . converterFrancsToEuros($i) . "</td>
    </tr>");
            }
            ?>
        </tbody>
    </table>

    <!-- Exo 6.3 -->
    <!-- Ecrire une fonction qui permet de calculer la factorielle d'un nombre de manière récursive. Par exemple la factorielle de 7 est: 1*2*3*4*5*6*7 Afficher alors la factorielle de 20 (2.4329020081766E+18). -->
    <h2>Exo 6.3</h2>
    <?php
    function factorielleRecursive($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return ($n * factorielleRecursive($n - 1));
        }
    }
    echo (factorielleRecursive(20));
    ?>

    <!-- Exo 6.4 -->
    <!-- Créer une fonction pour afficher une phrase contenant de manière aléatoire les trois mots "Bonjour","Monsieur" et "Robert". Chaque mot ne doit apparaître qu'une seule fois. Cette fonction prend en paramètre les trois mots "Bonjour","Monsieur" et "Robert". -->
    <h2>Exo 6.4</h2>
    <?php
    function randomSentence($names)
    {
        for ($i = 0; $i <= sizeof($names) + 1; $i++) {
            $numberRand = rand(0, sizeof($names) - 1);
            echo ($names[$numberRand] . " ");
            unset($names[$numberRand]);
            sort($names);
        }
    }
    randomSentence(["Bonjour", "Monsieur", "Robert"]);
    ?>

    <!-- Exo 6.5 -->
    <!-- Créer un tableau contenant 10 chiffres aléatoires entre 1 à 100 puis trier celui-ci sans utiliser les méthodes de tri de tableau comme sort(). Il faudra créer une fonction pour échanger deux valeurs dans un tableau. Afficher ces valeurs séparées par une virgule. -->
    <h2>Exo 6.5</h2>
    <?php
    $numbersRand = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($numbersRand, rand(1, 100));
    }

    function change(&$array, $n1, $n2, $tmp = null)
    {
        $tmp = $array[$n1];
        $array[$n1] = $array[$n2];
        $array[$n2] = $tmp;
    }

    function sorte($numberRand)
    {
        $lastIndex = sizeof($numberRand) - 1;
        while ($lastIndex >= 0) {
            $tmp = 0;
            $pos = 0;
            for ($i = 0; $i <= $lastIndex; $i++) {
                if ($numberRand[$i] > $tmp) {
                    $tmp = $numberRand[$i];
                    $pos = $i;
                }
            }
            change($numberRand, $pos, $lastIndex);
            $lastIndex--;
        }
        return $numberRand;
    }

    var_dump(sorte($numbersRand));

    ?>

    <!-- Exo 6.7 -->
    <!-- Soit le tableau A avec les éléments 3,8,15,16. Créer un tableau B à l'aide d'une boucle contenant tous les éléments de 1 à 20 sauf les éléments du tableau A. Créer une fonction qui calcule le cube de ce chiffre et afficher dans un tableau HTML les éléments du tableau B dans une première colonne et le cube des éléments de B dans une seconde colonne. -->
    <!-- PAS FINIS -->
    <h2>Exo 6.7</h2>
    <?php
    $tabA = [3, 8, 15, 16];
    $tabB = [];
    $compteur = 0;
    for ($i = 1; $i <= 20; $i++) {
        if (!in_array($i, $tabA)) {
            $compteur++;
            array_push($tabB, $i);
        }
    }

    var_dump($tabB)
        // include("variable.php");
// echo $prenom." ".$nom;
        ?>

    <!-- Exo 7.1 -->
    <!-- Créer un fichier texte qui stocke le nombre de fois qu'une page a été vue. -->
    <h2>Exo 7.1</h2>
    <?php
    file_put_contents("text.txt", (int) file_get_contents("text.txt") + 1);
    echo (file_get_contents("text.txt") . "<br>");
    ?>

    <!-- Exo 7.2 -->
    <!-- Placer trois images dans un répertoire images puis créer une page PHP qui créera un fichier texte contenant le nom et la taille de ces images puis qui copiera ces images dans un répertoire archive au même niveau que le répertoire image. -->
    <!-- Exo 7.3 -->
    <!-- Créer une page qui écrit dans un fichier log.txt la date et l'heure courante et qui affiche le temps en microsecondes pour déplacer trois images du répertoire images au répertoire archive. -->
    <!-- PAS FINIS -->
    <h2>Exo 7.2 & Exo 7.3</h2>
    <?php
    touch("size-img.txt");
    $folder = scandir("images");
    $nameSizeImg = "";
    foreach ($folder as $value) {
        if (!str_starts_with($value, ".")) {
            $origin = "images/" . $value;
            $newOrigin = "archive/" . $value;
            $nameSizeImg .= $value . filesize("images/" . $value) . "; ";
            file_put_contents("size-img.txt", $nameSizeImg);
            if (is_file($origin)) {
                rename($origin, $newOrigin);
            }
            file_put_contents("log.txt", microtime(TRUE));
        }
    }
    echo (file_get_contents("size-img.txt") . "<br>");
    echo (file_get_contents("log.txt"));
    ?>

</body>

</html>