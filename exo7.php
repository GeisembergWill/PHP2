<h1>Exercice 7</h1>




<h2>Résultat</h2>

<?php

$elements = [
    "Choix 1" => false, 
    "Choix 2" => true,
    "Choix 3" => false  
];
// Définition de la fonction pour générer des cases à cocher
function genererCheckbox($elements) {
    // Vérification si $elements est un tableau
    if (!is_array($elements)) {
        echo "Erreur : les éléments fournis ne sont pas un tableau.";
        return; 
        // On quitte la fonction en cas d'erreur
    }

    // Boucle à travers chaque élément du tableau associatif
    foreach ($elements as $key => $value) {
        // Création de la case à cocher avec le bon attribut 'checked' si $value est vrai
        echo '<label>';
         // Ajout d'un label pour l'accessibilité
        echo '<input type="checkbox" name="' . htmlspecialchars($key) . '" value="1"';
        
        // Si la valeur est vraie (true), on coche la case
        if ($value) {
            echo ' checked'; 
            // Ajout de l'attribut 'checked'
        }
        echo '> ' . htmlspecialchars($key); 
        // Affichage du texte associé à la case à cocher
        echo '</label><br>'; 
        // Fermeture du label et ajout d'un retour à la ligne
    }
}


genererCheckbox($elements); // Appel de la fonction avec le tableau d'options
?>




