<?php

function saisi_de_tableau($totalEleve): array
{
    $notes = [];

    for ($i=1; $i <= $totalEleve ; $i++) {

        $notes[] = readline("Ajouter un note: \n");
    }

    return $notes;
}

function sommes($totalEleve): int
{
    $notes = [];
    $notes[] = saisi_de_tableau($totalEleve);
    $somme = 0;
    foreach ($notes as $note) {
        $somme =+ $note;
    }

    return $somme;
}

function affiche_moyenne_classe()
{
    $nombreEleve = (int)readline("La classe fais combien d'eleve?: \n");
    $tableau = saisi_de_tableau($nombreEleve);
    $sommeDesNotes = sommes($nombreEleve);
    var_dump($sommeDesNotes);
    $moyenneDesNotes = $sommeDesNotes / $nombreEleve;

    return $moyenneDesNotes;
}

$resultat = affiche_moyenne_classe();

var_dump($resultat);