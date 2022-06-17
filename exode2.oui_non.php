<?php

function repondre_oui_non(string $phrase)
{

    $continue = true;
    while ($continue) {
        $phrase = readline("-o pour oui et n pour non: \n");
        if ($phrase === 'o') {
            return true;
        } elseif ($phrase === 'n') {
            return false;
        } else {
            $phrase = readline("-o pour oui et n pour non: \n");
        }
    }
}

$reponse = repondre_oui_non("Voulez vous continuer?");

var_dump($reponse);
