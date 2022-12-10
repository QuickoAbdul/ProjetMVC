<?php 
include_once "modele.inc.php";

function getAllArticle()
   {
      $conn=connexion();
      $reponse = $conn->query('SELECT article.Reference_Article, article.Nom_Article, article.Prix_Article, article.Image_Article FROM Article');
      $article = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $article;
      /*
      while (frow-mysql_fetch_array(res))
          {
         echo "<tr>";
         echo "<td>";?> <img src="<?php echo $article["Image_Article"]; ?>" height="100" width="100"> <?php echo "</td>";
         echo "<td>"; echo $article["Nom_Article"]; echo "</td>";
         echo "<tr>";
          }
      */
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
