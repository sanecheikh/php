<?php
// Tableau indexé
 // declaration d'un tableau
$tableau = array();
$tableau = [];
$tableau2 = array('Lundi','Mardi',45,67.8,false);
$tableau = [true,45,'Terre',56,[45,67,78]];
$tableau = [
    true,
    45,
    'Terre',
    56,
    [45,67,78]
];
echo '<pre>';
// print_r($tableau);

$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false;
array_push($tableau,'voiture'); // ajout de voiture au tableau
array_push($tableau,'voiture1', 'voiture2');

echo count($tableau); // nombre elements dans un tableau
echo '<hr>';

// print_r($tableau);
//  var_dump($tableau);

// echo $tableau[0];

$notes = [12,5,16,7];
// Afficher la moyenne des notes 
// $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
// $moyenne = $sommeNotes / 4;
$moyenne = ($notes[0] + $notes[1] + $notes[2] + $notes[3]) / 4;
// echo $moyenne;

$tab3 = array_merge($tableau2,$tableau,$notes); // assemble des tableaux
var_dump($tab3);

echo '</pre>';