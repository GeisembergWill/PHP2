<h1>Exercice 1</h1>

<p>Créer une fonction permettant de convertir en majuscule et en rouge un texte passé en argument </p>

<h2>Résultat</h2>
<style>
    .red{
        color: red;
    }
    /* création d'une class css red  */
</style>
<?php

$texte = "Mon texte en paramètre";
$texte2 = "Mon autre texte en argument";
// le texte à convertir

echo convertirMajRouge($texte);
echo convertirMajRouge($texte2);
echo convertirMajRouge2($texte);
// afficher le resultat de la fonction convertirMajRouge
echo convertirMajColor($texte,'#B62674');


function convertirMajRouge($texte){
    // création de la fonction convertir en majuscule et en rouge le texte
    $result = mb_strtoupper($texte);
    // fonction convertissant la phrase en majuscule avec les caractères speciaux
    $result ="<p class='red'>$result</p>";
    // Création de la balise paragraphe qui fait appel a la classe CSS red en refermant bien le paragraphe
    return $result;
     // Renvoi le résultat
}
function convertirMajRouge2($texte){
    return "<p class ='red'>".mb_strtoupper($texte)."</p>";
// meme fonction que precedemment renommé autrement 2 fonctions avec le meme nom ne peuvent coexister.
}

function convertirMajColor($texte,$color){
// fonction permettant de mettre en majuscule en la couleur que je veux
return "<p style ='color:$color'>".mb_strtoupper($texte)."</p>";
// dans ma fonction paragraphe j'appelle attribut style a l'interieur j'ai l'attribut color:(la couleur choisi) de "echo convertirMajColor($texte,'blue');"
}

