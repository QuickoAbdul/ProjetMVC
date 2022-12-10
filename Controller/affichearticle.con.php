<?php
include("./Model/article.inc.php");
    if ((empty($_POST['cat']) || $_POST["cat"] == 'null') && empty($_POST['rech'])) 
    {
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
            echo'<tr>';
            foreach($article as $cle=>$valeur)
            {   
                echo"<td>$valeur</td>";
                
            }
        echo '</tr>';
        }
    }
elseif(!empty($_POST['rech']))
    {
    $rech = $_POST["rech"];
    $article = getRechArticle($rech);
    $i = 0 ;
    foreach($article as $article)
    {
        echo'<tr>';
        foreach($article as $cle=>$valeur)
        {   
            echo"<td>$valeur</td>";
            
        }
    echo '</tr>';
    if (++$i == 15) break;
    }
}



?>