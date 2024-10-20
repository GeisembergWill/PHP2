<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitale =["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome"];</code><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays 
s'affichera en majuscule et que le tableau est trié par ordre aplphabétique du nom de pays) grace a une
fonction personnalisée.</p>

<h2>Résultat</h2>



<table border =1>
    <!-- entete du tableau -->
    <thead> 
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!-- corps du tableau -->
     <tbody>
        <tr>
            <td>France</td>
            <!-- colone 1  ligne 2(compter avec l'entete) -->
            <td>Paris</td>
            <!-- colone 2 ligne 2 -->
        </tr>
        <tr>
            <td>Allemagne</td>
            <!-- Colone 1 ligne 3 -->
            <td>Berlin</td>
            <!-- colone 2 ligne 3 -->
        </tr>
        <tr>
            <td>USA</td>
            <!-- colone 1 ligne 4 -->
            <td>Washington</td>
            <!-- colone 2 ligne 4 -->
        </tr>
        <tr>
            <td>Italie</td>
            <!-- colone 1 ligne 5 -->
            <td>Rome</td>
            <!-- colone 2 ligne 5 -->
        </tr>
     </tbody>
</table>

<?php

$capitales =[
    "France"=>"paris",
    // "Clé" => "Valeur"
    // "Key" => "Value"
    "Allemagne"=>"berlin",
    "USA"=>"washington",
    "Italie"=>"rome"
];


foreach($capitales as $pays => $capitale){
    echo "$pays a pour capitale : $capitale <br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML ($capitales) {
    ksort($capitales);
    // trier les pays par ordre alphabetique 
    $result = "<table border =1>
                    <thead> 
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                <tbody>";
          foreach($capitales as $pays =>$capitale) {
             $result .="<tr>
                           <td>".mb_strtoupper($pays)."</td>
                           <td>".ucfirst($capitale)."</td>
                        </tr>";   

    }      

    $result.= "</tbody></table>";
    // (-= ou +=) pour valeur numerique (.=) pour le texte
    return $result;
}

