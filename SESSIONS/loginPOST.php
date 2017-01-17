<?php

// Démarrer une session / récupérer sessions active
session_start();

$login = $_POST["login"];
$mdp = $_POST["mdp"];

// Arrète le script si pas admin
if ($login != 'admin' || $mdp != 'admin'){
    echo "Connexion refusée";
    return;
}

// Stocke login en session
$_SESSION["login"] = $login;
$_SESSION["mdp"] = $mdp;

// Le user est admin
echo "Vous êtes admin";