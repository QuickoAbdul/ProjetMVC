<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PHP CM5</title>
<meta charset="UTF-8">
<meta name="description" content="PHP CM5">
<meta name="keywords" content="MVC">
<meta name="author" content="Laurent d'Orazio">
</head>
<body>
<table>
    <caption>Liste d'enseignants</caption>
    <tr><th>num</th><th>prenom</th><th>nom</th></tr>
    
    <?php
    $conn=new PDO("mysql:host=$serveur;dbname=".$base, $utilisateur, $passe);

    $reponse = $conn->query('SELECT * FROM Article');
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    foreach($donnees as $article){
    echo'<tr>';
    foreach($article as $value){echo "<td>$value</td>";}
    echo '</tr>';
    }
    ?>
</table>
</body>
</html>