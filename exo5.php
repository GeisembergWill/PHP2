<h1>Exercice 5</h1>


<h2>Résultat</h2>

<?php
/**
 * Fonction pour créer un formulaire simple.
 *
 * @return string Le code HTML du formulaire.
 */
function createSimpleForm() {
    // Commence la construction du formulaire
    $form = "<form action=\"submit.php\" method=\"POST\">\n";

    // Ajoute le champ pour le Nom
    $form .= "    <div>\n"; // Début d'un conteneur pour le champ
    $form .= "        <label for=\"nom\">Nom</label>\n<br>"; // Label pour le champ Nom
    $form .= "        <input type=\"text\" name=\"nom\" id=\"nom\" required style=\"border: 1px solid #000; padding: 5px; width: 25%;\" />\n"; // Champ de texte pour le Nom
    $form .= "    </div>\n"; // Fin du conteneur pour le champ

    // Ajoute le champ pour le Prénom
    $form .= "    <div>\n"; // Début d'un conteneur pour le champ
    $form .= "        <label for=\"prenom\">Prénom</label>\n<br>"; // Label pour le champ Prénom
    $form .= "        <input type=\"text\" name=\"prenom\" id=\"prenom\" required style=\"border: 1px solid #000; padding: 5px; width: 25%;\" />\n"; // Champ de texte pour le Prénom
    $form .= "    </div>\n"; // Fin du conteneur pour le champ

    // Ajoute le champ pour la Ville
    $form .= "    <div>\n"; // Début d'un conteneur pour le champ
    $form .= "        <label for=\"ville\">Ville</label>\n<br>"; // Label pour le champ Ville
    $form .= "        <input type=\"text\" name=\"ville\" id=\"ville\" required style=\"border: 1px solid #000; padding: 5px; width: 25%;\" />\n"; // Champ de texte pour la Ville
    $form .= "    </div>\n"; // Fin du conteneur pour le champ

    // Termine le formulaire
    $form .= "</form>\n";

    // Retourne le code HTML du formulaire
    return $form;
}

// Affiche le formulaire
echo createSimpleForm();








