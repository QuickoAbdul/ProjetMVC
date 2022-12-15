<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Site Ecommerce</title>
</head>


<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white" href="/projetmvc/index.php" >P.M.U</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/projetmvc/index.php">Accueil <span class="sr-only"></span></a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/projetmvc/panier.php">Paniers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" href="/projetmvc/compte.php">Compte</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="/projetmvc/connexion.php">Connexion</a>
                    </li>                   
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Votre paniers</h1>
            <div class="card">
            <div style="max-height:680px; overflow:auto;">
                                    <table class="table table-dark center">
                                    <tr><th>Reference</th><th>Nom</th><th>Prix</th><th>Image</th></tr>
                                            <?php include_once("Model/article.inc.php"); 
                                            require("Controller/ventearticle.con.php"); ?>
                                    </table>
                                </div>
                <h2 style="padding-top:100px; padding-bottom:100px;"></h2>
                <a href="index.php" class="center"><button type="button" class="btn btn-dark">Acheter</button></a>
            </div>
        </div>
</body>