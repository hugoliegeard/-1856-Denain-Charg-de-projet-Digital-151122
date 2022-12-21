<!--
    Nous pouvons écrire du HTML dans un fichier PHP.
    L'inverse n'est pas possible.
-->

<style>
    h2 {
        font-size: 1.5rem;
        color: darkred;
    }
</style>

<h2>Ecriture et Affichage</h2>

<?php // Ouverture de PHP

echo 'Bonjour'; // Permet d'afficher sur la page.
echo '<br>'; // Nous pouvons mettre du HTML
echo '<h2>Je suis heureux !</h2>';

// Fermeture de PHP ?>

<strong>Bonjour... Je suis dans mon HTML</strong>

<?= '<p>Hello PHP World !</p>' ?> <!-- Le "=" remplace le echo -->

<!--
    Il est possible de fermer et ré-ouvrir PHP
    pour mélanger du HTML et PHP.
-->

<?php

echo 'Texte'; // Ceci est un commentaire sur une ligne
echo 'Texte'; /* Ceci est un commentaire
                    sur plusieurs lignes... */
print 'Texte'; # Ceci est un commentaire sur une ligne

echo '<hr><h2>Variable : Types, Déclaration & Affectation </h2>';

// Déclarer une variable PHP avec le signe : $


$nb1 = 123; // integer
$nb1 = 12.3; // double
$booleen = true; // false

$prenom = 'Hugo'; // string
$nom = 'LIEGEARD'; // string

/*
 * On utilise le point ou la virgule pour concaténer.
 */

echo 'Bonjour ' . $prenom . '<br>';
echo 'Bonjour ', $prenom, '<br>';

echo '<br><hr><br>';
echo 'Bonjour $prenom'; // Dans les quotes, la variable n'est PAS evaluée.
echo '<br>';
echo "Bonjour $prenom $nom"; // Dans les guillemets, elle l'est.

echo '<hr><h2>Constante & Constante Magique !</h2>';

define('IMPOSSIBLE_A_MODIFIER', 'Valeur de ma constante');
echo IMPOSSIBLE_A_MODIFIER;

const DB_HOST = 'localhost';
const DB_NAME = 'mydb';
const DB_USER = 'root';
const DB_PASS = 'root';

/*
 * Par convention, une constante se déclare toujours en MAJUSCULE.
 * ---------------------------------------------------------------
 * Les contantes sont utiles pour sauvegarder vos informations
 * de connexion à une BDD par exemple.
 */

// -- Les constantes magiques
echo '<br>';
echo __FILE__ . '<br>';
echo __DIR__ . '<br>';
echo __LINE__ . '<br>';

echo '<hr><h2>Opérateurs Arithmétiques</h2>';

$a = 10;
$b = 5;

echo $a = $a + $b . '<br>'; // Affiche 15
$a += $b . '<br>'; // Ecriture simplifiée. Même chose que $a = $a + $b;
$a -= $b . '<br>'; // Même chose que $a = $a - $b;
$a *= $b . '<br>'; // Même chose que $a = $a * $b;
$a /= $b . '<br>'; // Même chose que $a = $a / $b;

$a += 1; // Incrémentation de 1.
$a++; // Ecriture simplifiée.
$a--; // Ecriture simplifiée.

echo '<hr><h2>Structures Conditionelles</h2>';

/*
 * Isset & Empty
 * empty = test si une variable est égale à 0, est vide ou non définie
 * isset = test si une variable est défini / existe.
 */

$var1 = 'tests';
$var2 = '';

if (empty($var2)) { // $var2
    echo '0, vide ou non définie<br>';
} else {
    echo 'Variable définie<br>';
}

if (isset($var2)) { // $var2
    echo 'var2 est définie<br>';
} else {
    echo 'var2 n\'est pas définie<br>';
}

$prenom = '0';

if (isset($prenom)) echo 'Le prénom existe';

if (empty($prenom))
    echo 'Attention, vous avez oublié de remplir votre prénom.';

/*
 * Forme contracté du IF.
 * Une écriture ternaire ou le ? remplace le IF et le : remplace le ELSE.
 */
echo isset($prenom) ? 'Le prénom existe' : 'Le prénom existe pas';

$a = 2;
$b = 5;
$c = 8;

echo ($a > $b) ? 'A est supérieur à B' : 'B est supérieur à A';
echo ($a > $b && $b > $c) ? 'Tous est OK dans les 2 conditions.' : '';
echo ($a < $b || $b > $c) ? 'Tous est OK pour au moins l\'une des deux conditions.' : '';

/**
 * Seulement l'une des 2 conditions doit être validé.
 * Mais pas les deux en même temps.
 */

echo ($a > $b xor $b < $c) ? 'Ok Condition Exclusive' : '';

$a = 1;
$b = '1';

echo ($a == $b) ? 'Les 2 variables sont égales' : 'Ne sont pas égales';
echo ($a === $b) ? 'Les 2 variables sont strictement égales'
    : 'Ne sont pas strictement égales';

/*
 * /!\ A NE PAS OUBLIER
 * = Affection
 * == Comparer les valeurs
 * === Comparer les valeurs et les types
 */

$couleur = 'vert'; // marron

if ($couleur === 'bleu') {
    echo 'Vous aimez le bleu';
} else if ($couleur === 'rouge') {
    echo 'Vous aimez le rouge';
} else if ($couleur === 'jaune') {
    echo 'Vous aimez le jaune';
} else if ($couleur === 'vert') {
    echo 'Vous aimez le vert';
} else {
    echo 'Vous n\'aimez rien...';
}

switch ($couleur) {
    case 'bleu' :
        echo 'Vous aimez le bleu';
        break;
    case 'vert' :
        echo 'Vous aimez le vert';
        break;
    case 'jaune' :
        echo 'Vous aimez le jaune';
        break;
    case 'orange' :
        echo 'Vous aimez le orange';
        break;
    default:
        echo 'Vous n\'aimez ni le bleu, ni le vert, ni le jaune, ni le orange...';

}

echo '<hr><h2>Les Fonctions prédéfinies</h2>';

/*
 * Exemple avec la fonction date() qui permet
 * de renvoyer une date au format souhaité.
 * ---------------------------------------
 * https://www.php.net/manual/fr/function.date.php
 * A regarder : https://carbon.nesbot.com/
 * En JS : https://momentjs.com/
 */

echo date('d/m/Y') . '<br>';
echo date('Y M d D') . '<br>';
echo '&copy; Copyright ' . date('Y') . ' | Tous droits réservés.';

// ----------------------------------------------------------

$email = 'hugo@biyn.media';
echo strpos($email, '@');

/*
 * La fonction strpos() indique
 * la position du caractère @ dans la chaine.
 * Il commence à 0.
 */

$email2 = 'hugo';
echo strpos($email2, '@');
var_dump(strpos($email2, '@'));

/*
 * Le var_dump() c'est le console.log du PHP, mais dans la page.
 * var_dump est une instruction d'affichage améliorée,
 * que l'on utilise régulièrelent en phase de developpement.
 */

$phrase = 'Je suis une phrase et j\'aime ce que je suis';
echo iconv_strlen($phrase);
echo '<br>';
echo '<br>';

$texte = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aperiam architecto asperiores blanditiis distinctio ea eaque laboriosam, minima, nesciunt nihil nisi odio quasi sequi! Laborum minima molestias natus neque nulla.';
echo $texte;

echo '<br>';
echo '<br>';

echo substr($texte, 0, 50) . '... <a href="#">Lire la suite</a>';

echo '<hr><h2>Les Fonctions utilisateurs</h2>';

function separator()
{
    echo '<br><hr></br>';
}

separator(); // Execution de ma fonction

function bonjour($prenom)
{
    return "Bonjour $prenom ! <br>";
}

echo bonjour('Hugo');
echo bonjour('Mathieu');
echo bonjour('Alexy');
echo bonjour('Dimitri');

/*
    EXERCICE :
    1. Créer une fonction permettant de calculer la somme de 2 nb.
    2. Créer une fonction permettant de générer des titres h3
    3. Créer une fonction permettant de calculer la TVA 20% (1.2)
    4. Créer une fonction permettant de calculer la TVA plusieurs taux. normal : 20% ou 1.2 | réduit : 5.5% ou 1.055
*/

/**
 * Créer une fonction permettant de calculer la somme de 2 nb.
 * @param $a
 * @param $b
 * @return mixed
 */
function somme($a, $b) {
    return $a + $b;
}

/**
 * Créer une fonction permettant de générer des titres h3
 */
function h3($titre) {
    return '<h3>' . $titre . '</h3>';
}

echo h3('youhou !');

/**
 * Créer une fonction permettant de calculer la TVA 20% (1.2)
 */
function tva ($prixHt) {
    return $prixHt * 1.2 ;

}
echo tva(10) ;

/**
 * Créer une fonction permettant de calculer la TVA 20% (1.2)
 */

/**
 * Permet de calculer la TVA
 * @param $priceHt
 * @param $vatPercent
 * @return false|float
 */
function vat_calc($priceHt, $vatPercent){
    switch($vatPercent){
        case 20:
            return $priceHt * 1.2;
        case 5.5:
            return $priceHt * 1.055;
        default:
            return false;
    }
}

echo 'Le montant TTC est de ' . vat_calc(100, 20) .  '€';

separator();

echo '<h2>Les boucles</h2>';

for ($i = 0 ; $i < 10 ; $i++) {
    echo $i . '<br>';
}

// $i = 0 ; 0 < 10 ? $i = 1
// $i = 1 ; 1 < 10 ? $i = 2
// $i = 2 ; 2 < 10 ? $i = 3
// $i = 9 ; 9 < 10 ? $i = 9
// $i = 10 ; 10 < 10 ? $i = 9 // La boucle s'arrête parce que la condition n'est pas validé.

// EXERCICE : En partant de l'exemple ci-dessus et en utilisant une boucle for ;
// Réalisez un <select> allant de 1 à 31. Correspondant au nb de jour dans un mois.

separator();

echo '<select>';
echo '<option>1</option>';
echo '<option>2</option>';
echo '<option>3</option>';
echo '</select>';

echo '<select>';
    for ($i = 1 ; $i <=31 ; $i++) {
        echo "<option>$i</option>";
    }
echo '</select>';


separator();

echo '<h2>Les Tableaux / Array</h2>';

/*
 * Un array, ou un tableau est une variable
 * qui contient plusieurs valeurs organisé
 * sous forme de "clé" -> "valeur".
 * -----------------------------------------
 * |   0   |   1   |   2   |   3   |   4   |
 * -----------------------------------------
 * | Nancy |  Hugo |  Math |  Dimi |  Jim  |
 * -----------------------------------------
 */

// -- Déclaration et remplissage d'un tableau indexé.

$apprenants = array('Nancy', 'Hugo', 'Math');
$apprenants = ['Nancy', 'Hugo', 'Math', 'Dimi', 'Jim'];

function debug($data, $type = true) {
    echo '<pre>';
    ($type) ? print_r( $data ) : var_dump( $data );
    echo '</pre>';
}

debug($apprenants);

/*
 * Pour afficher la valeur d'une clé d'un tableau,
 * on utilise : monTableau[ cle ];
 * cle = indice = index = synonymes
 */

debug( $apprenants[4] );

/*
 * Les tableaux associatifs :
 * Les clés ne sont plus numérique, mais alphanumérique.
 * Sous forme de string.
 * ------------------------------------------------------------------------
 * |     prenom   |       nom        |      telephone     |       age     |
 * ------------------------------------------------------------------------
 * |     Hugo     |     LIEGEARD     |     0783971515     |     33ans     |
 * ------------------------------------------------------------------------
 */

$contact = [
    // cle      =>  valeur
    'prenom'    =>  'Hugo',
    'nom'       =>  'LIEGEARD',
    'telephone' =>  '0783971515',
    'age'       =>  '33 ans',
    'adresse'   =>  [
            'rue'   => '2bis rue Louis Petit',
            'cp'    => '59220',
            'ville' => 'Denain',
            'pays'  => [
                    'nom'    => 'France',
                    'code'   => 'FR',
            ]
    ]
];

echo '<h1>Bonjour ' . $contact['prenom']
                    . ' '
                    . $contact['nom']
                    . '</h1>';

echo "<h1>
        Bonjour $contact[prenom] $contact[nom]
        <small>
            {$contact['adresse']['ville']}, {$contact['adresse']['pays']['nom']}
        </small>
      </h1>";

/*
 * Créée un tableau  a plusieurs dimension,
 * contenant le prénom et nom de tous les apprenants présents.
 */

$contacts = [
    [
        'prenom' => 'Hugo',
        'nom' => 'LIEGEARD',
    ],
    [
        'prenom' => 'Nancy',
        'nom' => 'DE QUEIROS',
    ],
    [
        'prenom' => 'Mathieu',
        'nom' => 'ESTIENNE',
    ],
    [
        'prenom' => 'Dimitri',
        'nom' => 'ROBIN',
    ],
];

debug($contacts);

// -- Je veux afficher le prénom de chaque contacts
echo $contacts[0]['prenom'];
echo $contacts[1]['prenom'];
echo $contacts[2]['prenom'];

/*
 * Faire une boucle afin d'afficher les prénoms
 * des contacts dans un paragraphe.
 */

$nb = count($contacts);
for( $i = 0 ; $i < $nb ; $i++) {
    echo "<p>{$contacts[$i]['prenom']} {$contacts[$i]['nom']}</p>";
}

// Boucle FOREACH

separator();

foreach ($contacts as $contact) {
    echo "<p>{$contact['prenom']} {$contact['nom']}</p>";
}

foreach ($contacts as $index => $contact) {
    echo "<p>$index : {$contact['prenom']} {$contact['nom']}</p>";
}









?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
