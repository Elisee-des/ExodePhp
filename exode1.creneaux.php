<?php

function demande_creneaux(?string $phrase = "Veuillez entre votre creneau")
{
    echo $phrase;
    $resultat = [];
    $ouverture = (int)readline("Entre un heure d'ouverture :\n");
    $continue = true;

    while($continue)
    {
        if($ouverture >=9 && $ouverture <= 23)
        {
            break;
        }
    }

    $fermeture = (int)readline("Entre un heure d'fermeture :\n");
    $continue = true;

    while($continue)
    {
        if($fermeture >=9 && $fermeture <= 23 && $fermeture > $ouverture)
        {
            break;
        }
    }

    return [$ouverture, $fermeture];
}

$resultats = demande_creneaux("Entre votre creneaux\n");

var_dump($resultats);
// foreach ($resultats as $resultat) {
//     echo $resultat;
// }