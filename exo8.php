<h1>Exercice 8</h1>




<h2>Résultat</h2>

<?php




$imageUrl = "https://my.mobirise.com/data/userpic/764.jpg"; 
// l'URL de l'image

$nombreDeFois = 10; 
// nombre de fois que l'image est afficher

for ($i = 0; $i < $nombreDeFois; $i++) {
// Boucle pour afficher l'image plusieurs fois
    echo '<img src="' . htmlspecialchars($imageUrl) . '" alt="Image" style="width: 100px; height: auto; margin: 10px;">';
}