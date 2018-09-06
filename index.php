<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-
    scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Atelier Twitter Bootstrap</title>
</head>

<body class="container-fluid">
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Collaborateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="statistiques.html">Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="activity.html">Activités</a>
            </li>
        </ul>
    </header>

    <section class="container">

        <div class="row">

            <div id="header" class="col-12 col-md-9">
                <h1>Les Collaborateurs</h1>
            </div>

            <div id="header" class="col-12 col-md-3">
                <form action="add_collab.html">
                    <button type="submit" class="btn btn-primary">Ajouter un collaborateur</button>
                </form>
            </div>

        </div>

        <form>
            <div class="form-row">
                <div align="right" class="col-12 col-md-4">
                    <label for="collab_search">Rechercher un nom ou un prénom d'un collaborateur :</label>
                </div>
                <div class="col-12 col-md-3">
                    <input type="text" class="form-control" id="collab_search" placeholder="Entrer un nom">
                </div>
                <div class="col-5 col-md-2">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
                
                <div class="form-group col-4 col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDeactivatedCollabs">
                        <label class="form-check-label" for="checkDeactivatedCollabs">
                            Voir les collaborateurs désactivés
                        </label>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div align="right" class="col-12 col-md-4">
                    <label for="select_department">Filtrer par département :</label>
                </div>
                <div class="col-12 col-md-3">
                    <select class="form-control" id="select_department" value="Tous">
                        <option>Tous</option>
                        <option>Comptabilité</option>
                        <option>Ressources Humaines</option>
                        <option>Informatique</option>
                    </select>
                </div>
            </div>
        </form>

    </section>

    <br>
    <br>

    <section class="container">
            <!-- <div align=center id="collab_card" class="col-12 col-md-6 col-xl-4"> -->
        <div class="card-deck">
            
            <?php include("collab_card.html"); ?>
            
            <?php include("collab_card.html"); ?>
            
            <?php include("collab_card.html"); ?>
            
            <?php include("collab_card.html"); ?>
            
            <?php include("collab_card.html"); ?>
            
            <?php include("collab_card.html"); ?>
        
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>