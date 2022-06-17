<?php

function demande_mot_de_passe()
{
    $mdp = readline("Veuillez saisir un mot de passe: \n");

    return $mdp;
}

function hasher_password(string $password): string
{

    $choix = readline("Taper o (oui) pour voir votre mot de passe normal et n (non) pour voir le mot de passe hasher: \n");

    if($choix === "o")
    {
        return $choix;
    }
    else {

        $mdp = password_hash($password, PASSWORD_DEFAULT);
        return $mdp;
    }

}


$demandeDeMotDePasse = demande_mot_de_passe();

$password = hasher_password($demandeDeMotDePasse);

var_dump($password);