<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Bootstrap</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

</head>

<body>
   

    <!-- Header, accueil grande image -->

    <header class="text-center" id="top">

        <div class="text-intro">

            <div class="preTxt text-white font-italic">Gerer votre conciergerie en toute quietude</div>
            <h1>
                DASHBOARD CONCIERGERIE 
            </h1>
            <a href="#" class="btn btn-primary mt-3">En Savoir Plus</a>
        </div>


    </header>
    
     <!-- Nav -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gestionProduit.php">Produit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Commande.php">Commande</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gestionClient.php">Client</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="notification.php">Notification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parametres.php">Paramètres</a>
          </li>
          </ul>
        </div>
      </nav>
      
  


      <div class="formAP">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center my-4">Paramètres du site</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Thème</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="themeSelect">Sélectionnez un thème</label>
                    <select class="form-control" id="themeSelect">
                      <option value="default">Par défaut</option>
                      <option value="dark">Sombre</option>
                      <option value="light">Clair</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Notifications</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="notifCommande">
                      <label class="form-check-label" for="notifCommande">
                        Notifications pour les nouvelles commandes
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="notifLivraison">
                      <label class="form-check-label" for="notifLivraison">
                        Notifications pour les livraisons
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="notifPaiement">
                      <label class="form-check-label" for="notifPaiement">
                        Notifications pour les paiements
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
  

    <!-- Script Jquery  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<!-- Javascript de Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

 <script>
 
 // Générer Date
 $('#year').text(new Date().getFullYear());

// ScrollSpy
$('body').scrollspy({target: '#main-nav'});

 </script>
</body>

</html>