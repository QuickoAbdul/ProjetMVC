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
    require("../Controller/affichearticle.con.php");
    ?>

</table>
</body>
</html>