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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">P.M.U</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/projetmvc/index.php">Accueil <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projetmvc/Vue/conseils.php">Conseils</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projetmvc/Vue/paniers.php">Paniers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/projetmvc/Vue/compte.php">Compte</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/projetmvc/Vue/connexion.php">Connexion</a>
                    </li>

                    
                </ul>
            </div>
        </nav>

        <!--Contenu de la page -->
        <div class="container">
            <h1>Accueil</h1>
            <div class="d-flex flex-row">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                                <h5 class="card-title">Catégories</h5>
                                    <p class="card-text">
                                        <form action="" method="post">
                                        <select id="cat" name="cat" >
                                            <option value=null>Aucun</option>
                                            <option value=1>Attache</option>
                                            <option value=2>Bande</option>
                                            <option value=3>Vissement</option>
                                            <option value=4>Plaque</option>
                                            <option value=5>Montage</option>
                                            <option value=6>Poulie</option>
                                            <option value=7>Autres</option>
                                        </select>
                                        <input type="submit">
                                        </form>
                                    </p>
                        </div>
                    </div>
                <div class="card" style="width: 32rem;">
                        <div class="card-body">
                            <h5 class="card-title">Articles</h5>
                                <p class="card-text">
                                    <table>
                                            <tr><th>Reference</th><th>Nom</th><th>Prix</th></tr>
                                            <?php require("Controller/affichearticle.con.php"); ?>
                                    </table>
                                </p>
                        </div>
                </div>
                <div class="card" style="width: 32rem;">
                        <div class="card-body">
                            <h5 class="card-title">Dernieres ventes</h5>
                                <p class="card-text"></p>
                        </div>
                </div>
            </div>
            <div class="d-flex flex-column">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Rechercher
                        </h5>
                            <p class="card-text">  
                                <form action="" method="post">
                                    <input id="rech" name="rech" class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                                    (Par exemple: Bande)
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                    Rechercher
                                    </button>
                                </form>
                            </p>
                    </div>  
                </div>                 
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Conseils</h5>
                                <p class="card-text"></p>
                        </div>
                    </div>  

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>