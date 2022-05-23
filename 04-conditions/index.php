<?php
/*
>
<
>=
<=
== : comparaison d'egalite en valeur
=== : comparaison d'egalite en valeur et en type
!= : difference sur la valeur
!== : difference sur le type
*/
//===============
// if /elsif/else
//===============
// $age = 20;
// if($age >= 18){
//     echo 'Vous avez le droit de voter';
// } else {
//     // echo 'Vous n\'avez pas le droit de voter';
//     echo "Vous n'avez pas le droit de voter car votre âge est de  $age ans";
// }

// $heure = date('H');
// $heure = 23;
// Avec la condition if/elseif afficher si on est le matin ou le soir
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18)
// {
//     echo 'On est le soir';
// }

// Avec la condition if/elseif/else afficher si on est le matin,l'apres midi ou le soir
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18)
// {
//     echo 'On est le soir';
// } else {
//     echo 'On est l\'apres midi';
// }

// $a = 20;
// $b = 5;
// $c1 = 10;
// $c2 = '10';

// if ($b != 3){
//     echo 'La variable $b n\'est pas égale à 3';
// }

// Tester $c1 et $c2 avec == et ===
// if($c1 == $c2) {
//     echo 'Test ==';
// }

// if($c1 === $c2) {
//     echo 'Test ===';
// }

// if($c1 !== 10) {
//     echo 'Test !==';
// }

// $vrai = false;
// if($vrai) {
//     echo 'Vrai';
// } else {
//     echo 'Faux';
// }


// Syntaxe alternative est particulièrement utile avec du HTML:
?>

<?php if ($x): ?>
<p>Ceci est affiché si $x est vrai</p>
<?php else: ?>
<p>Ceci est affiché si $x est faux</p>
<?php endif; ?>

<?php
//=============
// switch/case
//=============
// $couleur = 'jaune';
// switch($couleur){
//     case 'red':
//         echo 'Votre couleur favorite est le rouge';
//         break;
//     case 'blue':
//         echo 'Votre couleur favorite est le bleue';
//         break;
//     case 'jaune':
//     case 'green':
//         echo 'Votre couleur favorite est le vert';
//         break;
//     default:
//         echo 'Votre couleur favorite est ni le rouge , ni le vert , ni le bleue';
//     }

//=======
// Match
//=======
// $food = 'cake';

// $return_value = match ($food) {
//     'apple' => 'This food is an apple',
//     'bar' => 'This food is a bar',
//     'cake' => 'This food is a cake',
// };

//    var_dump($return_value);

//=============
// empty/isset
//=============
// $var1 = 45;
// $var2 = '';
// empty test si la valeur de la variable est vide : 0,'',null,false ou non definit
// if (empty($var1)) {
//     echo 'La variable est vide !';
// } else {
//     var_dump(empty($var1));
// }
// isset test si la variable est defini et a une valeur non null
// if(isset($var2)) {
    // echo 'Test';
// }

$articles = ['','planete','foot'];
// Faire une condition sur ce tableau : tester l'article à l'index 0 si il est non vide , sinon afficher "il n'ya pas d'articles"
// Créer une branche articles , que vous fusionnerez avec main lorsque l'exercice est finit.
// if(!empty($articles[0])) {
//     var_dump($articles[0]);
// } else {
//     echo "Il n'y a pas d'articles !";
// }

// Operateur ternaire
// condition ? true : false
// echo !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";

// $premierArticle = !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";
// $premierArticle = !empty($articles[0]) ? $articles[0] : null;
// echo $premierArticle;





