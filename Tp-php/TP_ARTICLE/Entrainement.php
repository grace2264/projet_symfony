<style>
  h1{
    margin: 0;
    font-size: 15px;
    color: #1234b1;
  }
  h2{
    font-size: 10px;
  }
</style>
<h1>Ecrire et affichage</h1>
<?php
// ---------------- INSTRUCTION D'AFFICHAGE ---------------------
echo "<hr><h2> INSTRUCTION D'AFFICHAGE </h2>";

/* 
  @echo 
  Est une instruction qui nous permet d'effectuer un affichage.
*/
echo 'Bonjour';

// <?= "Hello"; Le = remplace le echo.

echo "<br>";

/*
  @print
  Est une instruction d'affichage, Il n'y a pas différence entre 
  print & echo.
*/

print "Nous sommes Lundi";

// D'autres instructions d'affichage existe : print_r(), var_dump().

// ---------------- VARIABLE : TYPE / DECLARATION / AFFECTATION ---------------------
echo "<hr><h2> VARIABLE : TYPE / DECLARATION / AFFECTATION </h2>";

/* 
  Une variable est un espace nommé permettant de conserver une valeur.
  Déclaration d'une variable avec le signe $.
  Nous pouvons appeler une variable "a2" mais non "2a".
  Elle peut contenir des chiffres mais ne doit pas commencer par un
  chiffre.
*/

/* 
  @gettype()
  Est une fonction prédéfinie nous permettant de voir le type d'une 
  variable.
  Nous ne regardons pas le contenu d'une variable mais son type avec gettype()
*/

$a = 127; // Affectation de la valeur 127 dans la variable nommée "a".

echo $a . "<br>";

echo gettype($a) . "<br>"; // integer 

$b = 1.5;
echo gettype($b) . "<br>"; //  double

$a = "Une chaine";
echo gettype($a) . "<br>"; // string

$b = '127';
echo gettype($b) . "<br>"; // string

$a = true; 
echo gettype($a) . "<br>"; // boolean

$b = false;
echo gettype($b) . "<br>"; // boolean

// ---------------- ASSIGNATION PAR REFERENCE ---------------------
echo "<hr><h2> ASSIGNATION PAR REFERENCE </h2>";

$a = "Salut"; // Affecte la valeur 'Salut' à $a.
$b = &$a; // Assigne par référence $a à $b.

echo $a . "<br>"; // Salut
echo $b . "<br>"; // Salut (Si on change $b, $a change en conséquence)

// ---------------- CONCATENATION ---------------------
echo "<hr><h2> CONCATENATION </h2>";

$x = "Bonjour ";
$y = "tout le monde";

echo $x . $y . "<br>"; // Point de concaténation que l'on peux traduire par "suivi de"
echo "$x $y <br>"; // même chose sans concaténation.
echo "Hey ! " . $x . $y . "<br>"; // concaténation texte et variable.
echo "coucou ", $x, $y, "<br>";  
/* 
  concaténation avec une virgule (la virgule et le point sont similaire)
*/ 
 
// ---------------- CONCATENATION LORS DE L'AFFECTATION ---------------------
echo "<hr><h2> CONCATENATION LORS DE L'AFFECTATION </h2>";

$prenom1 = "Bruno"; // Affectation de la valeur "Bruno" sur la variable : $prenom1
$prenom1 = "Claire"; // Affectation de la valeur "Claire" sur la variable : prenom1... cela remplace Bruno par Claire

$prenom2 = "Nicolas "; // Affectation de la valeur "Nicolas" sur la variable : $prenom2
$prenom2 .= "Marie"; // Affectation de la valeur "Marie" sur la variable : $prenom2... cela l'ajoute sans remplacer
// sans remplacer la valeur précédente grace à l'opérateur .=

echo $prenom2 . "<br>"; // Affiche : Nicolas Marie

// ---------------- GUILLEMETS ET QUOTES ---------------------
echo "<hr><h2> GUILLEMETS ET QUOTES </h2>";

$message = 'aujourd\'hui'; // ou bien : $message = "aujourd'hui";
$txt = "bonjour";

echo $txt . " " . "tout le monde <br>"; // concaténation
echo "$txt tout le monde <br>"; // Affichage dans des guillements, la variable est évaluée.
echo '$txt tout le monde <br>'; // Affichage dans des quotes, la variable n'est pas évaluée.

// ---------------- CONSTANTE ET CONSTANTE MAGIQUE ---------------------
echo "<hr><h2> CONSTANTE ET CONSTANTE MAGIQUE </h2>";

/*
  Une constante tout comme une variable permet de conserver une valeur sauf que comme son nom l'indique
  la valeur est... constante !! c'est à dire qu'on ne pourra pas la changer durant l'éxécution 
  du script. Contrairement à une variable qui elle peut varier !! 
  Utile pour garder de manière certaine la connexion d'une BDD, le chemin vers le site, etc. par exemple.
*/

define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscule.
echo CAPITALE . "<br>"; // Affichage du contenu de la constante CAPITALE : Paris.

// constante magique
echo __FILE__ . "<br>"; // Chemin complet vers le fichier.
echo __LINE__ . "<br>"; // Affiche le numéro de la ligne.

define("ANIMALS", array(
  'chien',
  'chat',
  'oiseaux'
));
echo ANIMALS[0] . " " . ANIMALS[1]. " " . ANIMALS[2];

// -------------------OPERATEURS ARITHMETIQUE ---------------
echo "<hr><h2> OPERATEURS ARITHMETIQUE </h2>";

$a_2 = 10; $b_2 = 2;

echo $a_2 + $b_2 . "<br>"; // Affiche 12

echo $a_2 - $b_2 . "<br>"; // Affiche 8

echo $a_2 * $b_2 . "<br>"; // Affiche 20

echo $a_2 / $b_2 . "<br>"; // Affiche 5

// Opération/affectation

$a_2 += $b_2; // equivaut à $a_2 = $a_2 + $b_2;
$a_2 -= $b_2; // equivaut à $a_2 = $a_2 - $b_2;
$a_2 *= $b_2; // equivaut à $a_2 = $a_2 * $b_2;
$a_2 /= $b_2; // equivaut à $a_2 = $a_2 / $b_2;

// ------------ STRUCTURES CONDITIONNELLES ----------------
echo "<hr><h2> STRUCTURES CONDITIONNELLES </h2>";

/*
  @Isset = Test si c'est définie.
  @Empty = Test si c'est vide.
*/

  $var1 = 0; // false, ou "", ou en commentaire
  $var2 = ""; // chaine vide

  if(empty($var1)){
    echo "0, vide ou non definie <br>"; // empty: test si c'est à 0,
  }

  if(isset($var2)){
    echo " var2 existe et est définie par rien <br>";
    // isset: test l'existence d'une variable
  }

  // if, else, elseif et et opérateur de comparaison
  $a_3 = 10; $b_3 = 5; $c_3 = 2;

  if($a_3 > $b_3) // si a_3 est supérieur à b_3
  {
    echo "a_3 est bien supérieur à b_3 <br>";
  }
  else{
    echo "non c'est b_3 qui est supérieur à a_3 br>";
  }

// Si a_3 est supérieur à b_3 et que dans le même temps b_3 est supérieur à c_3
if($a_3 > $b_3 && $b_3 > $c_3)
{
  echo "oui pour les 2 conditions <br>";
}
// Si a_3 contient 9 ou que b_3 est supérieur à c_3;
if($a_3 === 9 || $b_3 > $c_3){
  echo "ok pour au moins l'une des deux conditions <br>";  
}
else{
  echo "nous sommes dans le else <br>";
}

if($a_3 == 8)
{
  echo "1 - A_3 égal à 8 <br>";
}
elseif ($a_3 != 10) // sinon a_3 est différent de 10. 
{
  echo "2 - A_3 est différent de 10 <br>";
}
else
{
  echo "3 - tout faux <br>";
}

// -- forme contractée

echo($a_3);

if($a_3 > $b_3) // si a_3 est supérieur à b_3 <br>" : "
{
  echo "a_3 est bien supérieur à b_3 <br>";
}
else{
  echo "non c'est b_3 qui est supérieur à a_3 <br>";
}

// Comparaison
/*
  = (Affectation)
  == (Comparaison des valeurs)
  === (Comparaison des valeurs et du type)
*/

$vara = 1;
$varb = "1";

if($vara == $varb) echo "il s'agit de la même chose";

if($vara === $varb){
  echo "il s'agit de la même chose";
}

$couleur = 'jaune';

if($couleur === 'bleu'){
  echo "vous aimez le bleu <br>";
}
elseif($couleur === "red")
{
  echo "vous aimez le rouge <br>";
}
else {
  echo "vous aimez le jaune <br>";
}

// Pouvez-vous faire la même chose que le if avec un switch ?

switch($couleur)
{
  case 'bleu':
    echo "vous aimez le bleu <br>";
    break;
  case 'red';
    echo "vous aimez le rouge <br>";
    break;
  default:
    echo "Vous n'aimez ni le bleu, ni le rouge <br>";
  break;
}


// --------------- FONCTIONS PREDEFINIES -------------
echo "<hr><h2> FONCTIONS PREDEFINIES </h2>";
  /*
    @date
    Le Y majuscule permet d'obtenir 2021 et non 21
  */

echo 'Date : ' . date("d/m/y") ."<br>";

  /*
  @strpos
  Indique la position '' du caractere "@" dans la chaine.
  Nous pourrons l'utiliser pour savoir si une adresse email a un format conforme.
  Il existe aussi des expressions regulieres (regex)
  */
$email = "prenom@site.fr;
echo STRPOS : " . strpos($email, "@") . "<br>";

  /*
    @iconv_strlen
    iconv_strlen() est une fonction predefinies permettant de retourner la tailled'une
    chaine.
    1. nous devons lui fournir la chaine dans laquelle nous souhaitons connaitre la
    taille.
    Contexte : Nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors
    d'une inscription ont des tailles conformes.
  */

$phrase = "Mettez une phrase ici";
echo iconv_strlen($phrase);

  /*
    @substr
    substr() Une fonction predefinie permettant de retourner une partie de la chaine.
    1. nous devons lui fournir la chaine que l'on souhaite couper.
    2. nous devons lui preciser la position du début.
    3. nous devons lui preciser la position du début.
    Contexte: substr est souvent utilisé pour afficher des actualités avec une
    "accroche". sur internet, il y a le début de l'article puis ...lire la suite.
  */

  $texte = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
  It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
  essentially unchanged.";

  echo substr($texte, 0, 20) . "... <a href=''> Lire la suite </a>";

  // ---------------- FONCTIONS ---------------------
  echo "<hr><h2> FONCTIONS </h2>";

  function hello()
  {
    echo "hello world <br>";
  }
  hello();

  /*
    @function
    function avec arguments : arguments sont des paramètres fournis à la fonction et
    lui permettent de compléter ou modifier son comportement initialement prévu.
    $qui, ça ne sort pas de nul part. Cela permet de recevoir un argument, il s'agit d'une 
    variabe de reception.
  */

  function bonjour($qui)
  {
    return "Bonjour $qui <br>";
  }
  $pseudo = "francis";

  echo bonjour($pseudo);

  function bonjour2(string $qui)
  {
    return $qui . "<br>";
  }
  echo bonjour2($pseudo);

  // CREER UNE FONCTION checkAge AVEC UN ARGUMENT $age
  // VERIFIER SI L'ARGUMENT N'EST PAS VIDE
  // ET SI ELLE N'EST PAS VIDE RETOURNER "VOTRE AGE EST ???? " AVEC UN SAUT A LA LIGNE
  // SI ELLE EST VIDE RETOURNER "PAS D'AGE"
  // AFFICHER LE RESULT QUAND ON CALL LA FONCTION


  function checkAge($age)
  {
    if(!empty($age)){
      return $age . "<br>";

    }
    else{
      return "Pas d'age . <br>";
    }

  }
  echo checkAge(16);

  /* ternaire */

  function checkAge1($age) {
    return (!empty($age))? "Votre age est $age":"pas d'age";
  }

  echo checkAge1(2);

  // ------------ BOUCLE FOR -----------------------
  echo "<hr><h2> BOUCLE FOR </h2>";

  /* (1) valeur de départ ; (2) condition ; (3) incrémentation ou 
  décrémentation
  Contexte : par exemple, nous mettrons une seule fois le "code type" permettant
  d'afficher un produit sur un site e-commerce et l'avantage sera de répéter ce code
  autant de fois qu'il y a de produits dans notre boutiques.
  */

  for($i = 0; $i < 11; $i++)
  {
    echo $i . "<br>";
  } 

  // Afficher 20 options via une boucle

  for($i = 0; $i < 21; $i--)
  {
    echo $i . "<br>";
  }

    echo '<select>';
    echo '<option>0</option';
    echo '<option>1</option';
    echo '</select>';

    echo '<select>';
    for($i = 1; $i<=20; $i++){
        echo "<option>$i</option>";
    }
    echo '</select>';


    // ---------------- Inclusion de fichier ------------
    echo "<hr><h2> Inclusion de fichier </h2>";

    /*
      @include & @require
      Le once vérifie si le fichier a déjà été inclus,
      sic'est le cas, il ne ré-inclus pas.
      - Include fait une erreur et continue l'execution du code. 
      -Require fait une erreur et stop l'execution du code.

      Le ".inc" est un indicatif précisant aux développeurs que le fichier est destiné à
      l'inclusion et qu'il ne s'agit pas d'une page à part
      entière.
    */

    include("./Entrainement/00-exo.php");
    include_once("./Entrainement/00-exo.php");

    require("./Entrainement/00-exo.php");
    require_once("./Entrainement/00-exo.php");

// ---------------- BOUCLE FOREACH POUR LES TABLEAUX DE DONNEES ------------
echo "<hr><h2> BOUCLE FOREACH POUR LES TABLEAUX DE DONNEES </h2>";

/*
    @array
    Un tableau est déclaré un peu comme une variable améliorée, car on ne conserve pas
    qu'une valeur, mais un ensemble de valeur.
*/

    $liste = array("gregoire","nathalie","françois","georges");


    /*
      @Print_r
      Print_r() affiche le contenu du tableau.

    */
    print_r($liste);
    echo "<br>";

    /*
    @var_dump
    var_dump() affiche le contenu du tableau plus certaines informations
    comme le type des valeurs et la taille.
     */

    var_dump($liste);
    // echo "<pre>"; var_dump($liste); echo "</pre>";

    /*
      @$tab[]
      Autre moyen d'affecter une valeur dans un tableau. Nous ne mettons pas le mot
      ARRAY mais les crochets []. Pratique pour ajouter des informations en cours de
      route (aprè que le tableau ait été déclaré partiellement avec quelques valeurs).
    */

      $tab[ = "France"];
      $tab[ = "Italie"];
      $tab[ = "Angleterre"];
      $tab[ = "Suisse"];
      $tab[ = "Portugal"];

      $tab1 = ["France", "Italie", "Angleterre", "Suisse", "Portugal"]; 
      // autre moyen d'affecter.

      echo $tab[0] . "<br>";
      echo $tab[1] . "<br>";
      echo $tab[2] . "<br>";
      echo $tab[3] . "<br>";
      echo $tab[4] . "<br>";
      echo $tab[5] . "<br>";

      // parcourir le $tab avec un foreach pour afficher successivement les elements
      du tableau.

      foreach($tab as ) //le mot AS fait partie du langage et est obligatoire.
      {
        echo $values . "<br>";
      }

      foreach($tab as $key => $values)
      {
        echo $key . ' - ' . $values . '<br>';  
        // On affiche l'élément du tableau parcouru via $key et $values.
      }

      // créer un tableau avec trois indices et valeurs

      $couleur = array("j" => "jaune", "bleu" => "b", "v" => "vert");

      foreach($couleur as $key => $values)
      {
        echo $key . ' - ' . $values . '<br'>
      }
      


?>
