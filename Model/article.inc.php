<?php 
include_once "modele.inc.php";

function getAllArticle()
   {
      $conn=connexion();
      $reponse = $conn->query('SELECT article.Reference_Article, article.Nom_Article, article.Prix_Article, article.Image_Article FROM Article');
      $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $article;
   }
function getCatArticle($id)
   {
      $conn=connexion();
      $reponse = $conn->prepare('SELECT article.Reference_Article, article.Nom_Article, article.Prix_Article, article.Image_Article FROM Article INNER JOIN categorie on article.Cat_Article = categorie.ID_CAT WHERE categorie.id_cat = :id');
      $reponse->bindValue(':id', $id, PDO::PARAM_INT);
      $reponse->execute();
      $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $article;
   }
function getRechArticle($rech)
{
   $conn=connexion();
   $reponse = $conn->prepare('SELECT article.Reference_Article, article.Nom_Article, article.Prix_Article, article.Image_Article FROM Article WHERE article.Nom_Article like :rech ');
   $reponse->bindValue(':rech','%'.$rech.'%', PDO::PARAM_STR);
   $reponse->execute();
   $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
   return $article;
}
function getVenteArticle()
   {
      $conn=connexion();
      $reponse = $conn->query('SELECT DISTINCT article.Reference_Article, article.Nom_Article, article.Prix_Article, article.Image_Article FROM Article WHERE article.Nom_Article = "Cavalier" or article.Nom_Article = "Disque"');
      $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $article;
   }
/*function insertCommande()
{
   try {
      $conn = connexionPDO();

      $reponse = $conn->prepare("insert into Commande values (null, :id_com, :date_com, :id_article, :id_client)");
      $req->bindValue(':id_com', $id_com, PDO::PARAM_INT);
      $req->bindValue(':date_com', $date_com, PDO::PARAM_DATE);
      $req->bindValue(':id_article', $id_article, PDO::PARAM_INT);
      $req->bindValue(':id_client', $id_client, PDO::PARAM_INT);
      
      $resultat = $req->execute();

  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage();
      die();
  }
  return $res;
}*/


