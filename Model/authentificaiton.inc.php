<?php
include_once "modele.inc.php";

function login($identifiantP, $mdpP)
{
    if (!isset($_SESSION))
    {
        session_start();
    }

    $util = getIdClient($identifiantP);
    $mdpBD = $util->getMdp();
    if (trim($mdpBD) == trim($mdpBD))
    {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["identifiantP"] = $identifiantP;
        $_SESSION["mdpP"] = $mdpBD;
    }
}

function logout()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["identifiantP"]);
    unset($_SESSION["mdpP"]);
}