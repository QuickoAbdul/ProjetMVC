<?php
include("./Model/article.inc.php");
    $article=getAllArticle();
    $i = 0 ;
    foreach($article as $article)
    {
        echo'<tr>';
        foreach($article as $cle=>$valeur)
        {   
            echo"<td>$valeur</td>";
            
        }
    echo '</tr>';
    if (++$i == 8) break;
    }
?>