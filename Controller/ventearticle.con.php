<?php 
    $article=getVenteArticle();
    $i = 0 ;
    foreach($article as $article)
    {
        echo "<tr>";
        echo "<td>"; echo $article["Reference_Article"]; echo "</td>";
        echo "<td>"; echo $article["Nom_Article"]; echo "</td>";
        echo "<td>"; echo $article["Prix_Article"]; echo "€</td>";
        echo "<td>";?> <a href="<?php echo $article["Image_Article"]; ?>" target="_blank"> <img src="<?php echo $article["Image_Article"]; ?>" height="50" width="50"> <?php echo "</td>";
        echo "</tr>";
    }
?>