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
                <a class="nav-link" href="notificaton.php">Notification</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="parametres.php">Paramètres</a>
            </li>
          </ul>
        </div>
      </nav>
       
         
<!--message de presentation a mettre en affichage auto-->
<div class =t>
<div class="carousel">
        <img  class="premiere img-carousel" src="img/Fleur d'anus.jpg">
        <img  class="deuxieme img-carousel" src="img/Sauvage.jpg">
        <img  class="troisieme img-carousel" src="img/poison.jpg">

</div>
</div>
    <!-- Section 3 Icônes -->

    <section id="home-icons">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-cog fa-3x mb-2"></i>
                    <h3>Panneau de gestion</h3>
                    <p> 
                    </p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-cloud fa-3x mb-2"></i>
                    <h3>Fonctionnalités :</h3>
                    <p> 
                    </p>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <i class="fas fa-cart-plus fa-3x mb-2"></i>
                    <h3>Gagnez  plus d'argent</h3>
                    <p> 
                    </p>
                </div>
            </div>
        </div>
    </section>

    






    <!-- Call to Action -->
    <section id="start" class="py-5">
        <div class="container py-5">
            <h2 class="pb-3">Etes-vous prêt à commencer?</h2>
            <p class="d-none d-md-block"> </p>
            <a href="#" class="btn btn-primary">Démarrez Maintenant</a>
        </div>
    </section>



    <!-- Newsletter -->

    <section id="newsletter" class="text-center p-5 bg-dark text-white">

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Abonnez-vous à notre Newsletter</h3>
                    <p> <br> <br>
                         Nous avons déjà de nombreux clients satisfaits qui ont pu optimiser leur activité grâce à notre plateforme fiable et efficace.
                         Nous croyons fermement que notre service peut vous aider à améliorer votre activité et à augmenter votre chiffre d'affaires.
                         Nous sommes déterminés à continuer à améliorer notre plateforme pour répondre aux besoins de nos clients. 
                         Nous espérons vous compter parmi nos clients satisfaits et nous vous invitons à essayer notre service dès maintenant.
                    </p>
                    <form class="form-inline justify-content-center">
                        <input type="text" class="form-control mb-2 mr-2" placeholder="Nom">
                        <input type="text" class="form-control mb-2 mr-2" placeholder="Email">
                        <button class="btn btn-primary mb-2">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->

    <footer id="main-footer" class="text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy;
                        <span id="year"></span> CONCIERGERIE DASHBOARD
                    </p>
                </div>
            </div>
        </div>
    </footer>





    <script src="carousel.js"></script>
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
