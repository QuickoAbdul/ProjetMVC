<?php

function connexion()
{
   require("./Model/connexion.php");
   $conn = new PDO("mysql:host=$serveur;dbname=".$base, $utilisateur, $passe);
   return $conn;
}

?>