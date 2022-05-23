<?php
/*
Travail-02 :

    Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu.
 */
echo'<pre>';
$json_deuxieme_ami_Raymond_Jimenez_obj ='{
    "nom":"ball",
    "prenom":"shaffer",
    "age ":"20",
    "email":"ballshaffer@zensure.com"
    "couleur yeux":["blue"],
    "fruit favori":"apple",
    "Tags":"excitation ,sint,adipiscing,produit,sunt,exepteur,elit ",
   
}';
$json_array_php = json_decode($json_deuxieme_ami_Raymond_Jimenez_obj,true);
echo '<hr>';
print_r($json_deuxieme_ami_Raymond_Jimenez_obj);

//echo $json_array_php['couleur']['blue'];
'</pre>';