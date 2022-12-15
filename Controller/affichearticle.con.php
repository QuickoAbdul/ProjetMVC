<?php
include("./Model/article.inc.php");
    if ((empty($_POST['cat']) || $_POST["cat"] == 'null') && empty($_POST['rech'])) 
    {
        $article=getAllArticle();
        $i = 0 ;
        foreach($article as $article)
        {
         echo "<tr>";
         echo "<td>"; echo $article["Reference_Article"]; echo "</td>";
         echo "<td>"; echo $article["Nom_Article"] ; echo "</td>";
         echo "<td>"; echo $article["Prix_Article"]; echo "€</td>";
         echo "<td>";?> <a href="<?php echo $article["Image_Article"]; ?>" target="_blank"> <img src="<?php echo $article["Image_Article"]; ?>" height="50" width="50"> <?php echo "</td>";
         echo '<td> <button type="button" class="btn btn-light">Ajouter</button> </td>';
         echo "</tr>";
        if (++$i == 15) break;
        }
    } 
    elseif(!empty($_POST['cat'])) 
    {
        $designation = $_POST["cat"];
        $article=getCatArticle($designation);
        $i = 0 ;
        foreach($article as $article)
        {
            echo "<tr>";
            echo "<td>"; echo $article["Reference_Article"]; echo "</td>";
            echo "<td>"; echo $article["Nom_Article"]; echo "</td>";
            echo "<td>"; echo $article["Prix_Article"]; echo "€</td>";
            echo "<td>";?> <a href="<?php echo $article["Image_Article"]; ?>" target="_blank"> <img src="<?php echo $article["Image_Article"]; ?>" height="50" width="50"> <?php echo "</td>";
            echo '<td> <button type="button" class="btn btn-light">Ajouter</button> </td>';
            echo "</tr>";
        }
    }
elseif(!empty($_POST['rech']))
    {
    $rech = $_POST["rech"];
    $article = getRechArticle($rech);
    $i = 0 ;
    foreach($article as $article)
    {
        echo "<tr>";
         echo "<td>"; echo $article["Reference_Article"]; echo "</td>";
         echo "<td>"; echo $article["Nom_Article"]; echo "</td>";
         echo "<td>"; echo $article["Prix_Article"]; echo "€</td>";
         echo "<td>";?> <img src="<?php echo $article["Image_Article"]; ?>" height="50" width="50"> <?php echo "</td>";
         echo '<td> <button type="button" class="btn btn-light">Ajouter</button> </td>';  
         echo "<tr>";
    if (++$i == 15) break;
    }
}



?>