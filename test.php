<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo"<p>Hello !</p>";

$nom = 'salut';
$$nom = 'Bob';
echo $salut;

define("PI", 5);
echo (PI);
?>
<?php
$fruit = 'pomme';
$return_value = match ($fruit) {
'pomme' => 'Ce fruit est une pomme',
'poire' => 'Ce fruit est une poire',
'raisin' => 'Ce fruit est un raisin',
};
var_dump($return_value);
?>
<?php
$variable = 15.325;
echo "La valeur entière est:".(int)$variable;
?>
<?php
$tableau = array('A1'=>'Jean','B4'=>'Robert',3=>'Paul','Toto'=>'Joe', 'H'=>'Alain');
print_r($tableau)
?>
<!-- Exo 1.1 -->
<!-- Créer une constante Vitesse_lumiere égal à 299792 km/s.
Afficher « La vitesse de la lumière est 299792 km/s » en utilisant la constante. -->
<?php
define("V", 299792);
echo"La vitesse de la lumière est ".(V)." km/s";
?>
<!-- Exo 1.2 -->
<!-- Rédigez un programme informatique qui affiche les nombres de 1 à 100 dans l’ordre, en remplaçant les
multiples de 3 par le mot Fizz, les multiples de 5 par Buzz, et les multiples de 15 par FizzBuzz -->
<?php
for ($i=0; $i <= 100; $i++) { 
    
    if ($i % 15 === 0) {
        echo("FizzBuzz")." ";
    } else if ($i % 5 === 0) {
        echo("Buzz")." ";
    } else if ($i % 3 === 0) {
        echo("Fizz")." ";
    } else {
        echo($i)." ";
    }
}
echo"<br>"
?>
<!-- Exo 1.3 -->
<!-- Ecrire une boucle permettant d’afficher tous les nombres de 1 à 20 séparées par un espace. -->
<?php
for ($i=0; $i <= 20; $i++) { 
    echo($i)." ";
}
?>
<!-- Exo 1.4 -->
<!-- Reprendre l’exercice 1.3 et mettre en vert tous les nombres < 10 et en rouge les autres nombres. -->
<?php
for ($i=0; $i <= 20; $i++) {
    if ($i >= 10) { 
        echo("<p class='red'>".$i."</p>");
    } else {
        echo("<p>".$i."</p>");
    }
}
?>
<!-- Exo 1.5 -->
<!-- Ecrire une boucle pour calculer la factorielle d’un nombre. -->
<?php
function factorielle ($n) {
    $result=1;
    for ($i=2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
echo(factorielle(8))."<br>";
?>
<!-- Exo 2.1 -->
<!-- Créer un tableau contenant les chiffres de 1 à 10 et un autre tableau contenant les nombres de 11 à 20.
Ensuite créer un autre tableau contenant le somme des 2 premiers tableaux et afficher ses valeurs. Il faut
utiliser les boucles pour créer ces tableaux. -->
<?php
$array1=[];
$array2=[];
$array3=[];
for ($i=1; $i <= 10; $i++) { 
    array_push($array1,$i);
}
for ($i=11; $i <= 20; $i++) { 
    array_push($array2,$i);
}

for ($i=0; $i < 10; $i++) { 
    array_push($array3,$array1[$i]+$array2[$i]);
}
// print_r($array3);
?>
<!-- Exo 2.2 -->
<!-- Créer un tableau de 10 valeurs au hasard entre 1 et 100. La fonction rand($min,$max); permet de tirer un
nombre au hasard entre $min et $max. Trier ce tableau du plus petit au plus grand puis mettre toutes les
valeurs dans une chaîne de caractères séparées par des ; et afficher la chaîne. -->
<?php
$array=[];
$min=1;
$max=100;
for ($i=0; $i <= 10; $i++) { 
    array_push($array, rand($min, $max));
}
sort($array);
echo(implode(";", $array))
?>
<!-- Exo 2.3 -->
<!-- Créer le code PHP permettant de générer ce tableau en HTML à l'aide des boucles tableau multidimensionnel. -->
<table>
    <thead>
        <tr>
            <th>Clé</th>
            <th colspan="2">Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
$dupont=array("prénom" => "PAUL","profession" => "ministre","age" => 50);
$durand=array("prénom" => "ROBERT","profession" => "agriculteur","age" => 45);
$paleyron=array("prénom" => "ETHAN","profession" => "devloppeur web","age" => 17,"passion" => "sports");
$tab_personne['DUPONT'] = $dupont;
$tab_personne['DURAND'] = $durand;
$tab_personne['PALEYRON'] = $paleyron;
foreach ($tab_personne as $lastName => $value) {
    $maxRow=sizeOf($value)+1;
    echo("<tr>
    <td rowspan='".$maxRow."'>".$lastName."</td>
    <td>Clé</td>
    <td>Valeur</td>
    </tr>");
    foreach ($tab_personne[$lastName] as $key => $value) {
        echo("<tr>
        <td>".$key."</td>
        <td>".$value."</td>
        </tr>");
    }
}
?>
    </tbody>
</table>
<!-- Exo 2.4 -->
<!-- Voici deux tableaux:
Le tableau1 est composé des éléments: 6,25,35 et 61
Le tableau2 est composé des éléments: 12,24 et 46
Ecrire le code permettant de calculer le schtroumpf de ces deux tableaux. Le schtroumpf se calcule en
multipliant chaque valeur du tableau1 par celle du tableau2 et additionnant le tout. -->
<?php
$result=0;
$tab1=[6,25,35,61];
$tab2=[12,24,46];
foreach($tab2 as $value) {
    foreach($tab1 as $value2) {
        $result += $value * $value2;
    }
}
echo($result);
?>
<!-- Exo 3.1 -->
<?php
$phrase="Bonjour Monsieur Dupont.";
$phraseReaplace=str_replace("Dupont","Durand",$phrase);
$phraseMag=strtoupper($phraseReaplace);
echo('Dans "'.$phraseMag.'"il y a '.strlen($phraseMag)." de caractère");
?>
<!-- Exo 3.2 -->
<?php
$email="jean.dupont@france.fr";
if (strpos(substr($email, "@"),".") && strpos($email, "@")) {
    echo("Email correct");
} else {
    echo("Email incorrect");
}
?>
<!-- Exo 4.1 -->
<?php
if (preg_match("/[0-9]{1}/","5") == true) {
    echo"true";
} else {
    echo"false";
}
?>
</body>
</html>