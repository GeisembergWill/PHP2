<h1>Exercice 6</h1>

<h2>Résultat</h2>

<?php
// Définition de la fonction pour alimenter une liste déroulante
function alimenterListeDeroulante($elements) {
    
    // Début de la balise <select>
    echo '<select name="titre">';

    // Boucle à travers chaque élément du tableau
    foreach ($elements as $element) {
        // Création d'une option pour chaque élément
        echo '<option value="' . htmlspecialchars($element) . '">' . htmlspecialchars($element) . '</option>';
    }

    // Fin de la balise <select>
    echo '</select>';
}
$elements = ["Monsieur", "Madame", "Mademoiselle"];
alimenterListeDeroulante($elements);
?>
