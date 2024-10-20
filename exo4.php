<h1>Exercice 2</h1>
<h2>Résultat</h2>

<?php
$capitales =[
    "France"=>"Paris",
    // "Clé" => "Valeur"
    // "Key" => "Value"
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

foreach($capitales as $pays => $capitale){  
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
                            <th>Liens Wiki</th>
                        </tr>
                    </thead>
                <tbody>";
          foreach($capitales as $pays =>$capitale) {
             $result .="<tr>
                           <td>".mb_strtoupper($pays)."</td>
                           <td>".ucfirst($capitale)."</td>
                           <td><a href = https://fr.wikipedia.org/wiki/$capitale target=_blank >Lien</a>;
                           </td>
                        </tr>";   

    }      

    $result.= "</tbody></table>";
    // (-= ou +=) pour valeur numerique (.=) pour le texte
    return $result;
}

