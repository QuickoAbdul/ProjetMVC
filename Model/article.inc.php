<?php 
include_once "modele.inc.php";

function getAllArticle()
   {
      $conn=connexion();
      $reponse = $conn->query('SELECT article.reference_article, article.nom_article, article.prix_article FROM Article');
      $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $article;
   }
