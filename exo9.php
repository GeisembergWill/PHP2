<h1>Exercice 9</h1>




<h2>Résultat</h2>
<?php

$elements = [
    "Masculin " => false,  
    "Féminin" => false, 
    "Autre" => true   
];  
function genererCheckbox($elements) {
    
    if (!is_array($elements)) {
       // Vérification si $elements est un tableau 
       echo "Erreur : les éléments fournis ne sont pas un tableau.";
        return; 
        // On quitte la fonction en cas d'erreur
    }

    // Boucle à travers chaque élément du tableau associatif
    foreach ($elements as $key => $value) {
        echo '<input type="radio" name="' . htmlspecialchars($key) . '" value="1"';
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


