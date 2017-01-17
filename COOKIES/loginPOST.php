<?php

$login = $_POST["login"];
$mdp = $_POST["mdp"];

// Arrète le script si pas admin
if ($login != 'admin' || $mdp != 'admin'){
    echo "Connexion refusée";
    return;
}

// Stocke login / mdp en cookie
setcookie("monLogin", $login);
setcookie("monMdp", $mdp);


// Le user est admin
echo "Vous êtes admin";