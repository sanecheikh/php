<?php
// Loops

// While
// $j = 0;
// while ($j <= 10) {
//     // echo $j . '-';
//     echo "$j-";
//     $j++; // $j = $j + 1
// }

// Avec une boucle while afficher toutes les années de 1970 à aujourd'hui dans une liste ul
// Afficher le nombre de jour depuis 1970
// Travailler dans une branche annees
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle While</title>
</head>
<body>
    <ul>
<?php
    // $anne1 = 1970;
    // $anne2 = 2022;
    // $nbJour = 0;
    // while($anne1 <= $anne2){
?>
    <!-- <li><?=$anne1;?></li> -->
<?php
    // $nbJour += 365;
    // $anne1++;
    // }
?>   
<!-- <li>Le nombre de jour depuis 1970 est : <strong><?=$nbJour - 365;?></strong></li> -->
</ul>
</body>
</html>

<?php
//==========
// Do while
//==========
// $y = 0;
// $k = 10;
// do {
//     echo "Nombre : $y<br>";
//     $y++;
//     $k--;
// } while ($y >= 10);
// echo '<br>';
// echo $k;

//=========
// foreach
//=========
$tabs = [1,2,3,4,5,6];
foreach($tabs as $tab) {
    echo 'Nombre : ' . $tab . '<br>';
}

$i = 0;
while ($i < 5) {
    if ($i === 3) {
        break; // Permet d'arrêter la boucle
    }
    echo $i++;
} // Affiche "012"

for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        continue; // Permet de passer immédiatement à l'itération suivante
    }
    echo $i;
} // Affiche "0124"









