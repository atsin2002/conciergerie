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
<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "conciergerie";

    $conn = mysqli_connect($host, $username, $password, $dbname);
      // Sélection des données
    $sql = "SELECT * FROM client";
    $result = mysqli_query($conn, $sql);
    // Enregistre les données dans une variable
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
   

    if(isset($_POST['submit'])){
    

    // Vérification de la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Récupération des données du formulaire
    $name = $_POST['name'];
    $prenom= $_POST['prenom'];
    $email = $_POST['email'];
    $numero= $_POST['numero'];
    $addresse = $_POST['addresse'];
    $password=NULL ;
    // Préparation de la requête d'insertion
    $sql1 = "INSERT INTO client (nom,prenom,addresse,mail,telephone,password) VALUES ('$name', '$prenom','$addresse','$email',$numero,'$password')";
    // Exécution de la requête
    if (mysqli_query($conn, $sql1)) {
        echo "Données enregistrées avec succès.";
    } else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
    $sql1=NULL;

    // Fermeture de la connexion
    mysqli_close($conn);

    }
    $query = $_GET['query'];
    $sql2 = "SELECT * FROM client WHERE nom LIKE '%$query%'";
    $result = mysqli_query($conn, $sql2);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['nom'];
    }

?>

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
       
      
             
   
                 
      
      
      <!--gestion des clients-->





  <div class="formAP">


<div class="container-fluid">
    <h1 class="text-center">Gestion des clients</h1>
    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addClientModal">Ajouter un client</button>
      </div>
    </div>
    <a href="#" class="btn btn-outline-danger">Rechercher</a>
    <div class="row">
      <div class="col-md-12">
        <input type="text" name="query" class="form-control" id="searchBar" placeholder="Rechercher un client">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <select  id="filter">
          <option>Tous les clients</option>
          <option>Clients actifs</option>
          <option>Clients inactifs</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="timeline">
          <li>
            <div class="timeline-badge primary">
              <i class="glyphicon glyphicon-check"></i>
            </div>
            <?php  foreach ($data as $row):?>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title"><?php echo $row['nom']?>  <?php echo $row['prenom']?></h4>
                <p>
                  <small class="text-muted">
                    <i class="glyphicon glyphicon-time"></i>
                  </small>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </li>
          <!-- Ajoutez d'autres éléments de la timeline pour afficher d'autres clients -->
        </ul>
      </div>
    </div>
 
        </div>
        <div class ="s">

  <!-- Modal pour ajouter un client -->

<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addClientModalLabel">Ajouter un client</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="gestionClient.php" method="post">
            <div class="form-group">
              <label for="clientName">Nom du client</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du client">
            </div>
            <div class="form-group">
              <label for="prenomclient">Prenom du client</label>
              <input type="text" class="form-control" id="pernom" name ="prenom" placeholder="Entrez le nom du client">
            </div>
            <div class="form-group">
              <label for="clientEmail">Adresse email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Entrez l'adresse email du client">
            </div>
            <div class="form-group">
              <label for="clientPhone">Numéro de téléphone</label>
              <input type="tel" class="form-control" id="numero" name ="numero" placeholder="Entrez le numéro de téléphone du client">
            </div>
            <div class="form-group">
              <label for="clientAddress">Adresse</label>
              <input type="text" class="form-control" id="addresse" name="addresse" placeholder="Entrez l'adresse de livraison du client">
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary" name="submit" >Ajouter le client</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>

        </div>
      </div>

     <!-- Section Clients -->


     <section id="clients" class="my-5 text-center">
      <div class="container">
          <div class="row">
              <div class="col">
                  <div class="info-header mb-5">
                      <h2 class="pb-3">Nos Clients</h2>
                      <p class="lead pb-5">
                          
                      </p>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <img src="img/visage1.jpg" alt="visage" class="img-fluid rounded-circle w-50 mb-3">
                          <h3>Tom</h3>
                          <h5 class="text-muted">Avis</h5>
                          <p> "Le site est bien conçu et facile à utiliser.
                             J'ai été satisfait de la qualité des tâches de conciergerie exécutées."

                          </p>
                          <div class="d-flex justify-content-center">
                              <div class="p-4">
                                  <a href="http://facebook.com">
                                      <i class="fab fa-facebook"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://twitter.com">
                                      <i class="fab fa-twitter"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://instagram.com">
                                      <i class="fab fa-instagram"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>




              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <img src="img/visage2.png" alt="visage" class="img-fluid rounded-circle w-50 mb-3">
                          <h3>Nick</h3>
                          <h5 class="text-muted">Avis</h5>
                          <p>"J'ai été très satisfait de l'expérience d'utilisation de ce site.
                             Il est facile à naviguer et les tâches de conciergerie ont été exécutées efficacement."

                          </p>
                          <div class="d-flex justify-content-center">
                              <div class="p-4">
                                  <a href="http://facebook.com">
                                      <i class="fab fa-facebook"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://twitter.com">
                                      <i class="fab fa-twitter"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://instagram.com">
                                      <i class="fab fa-instagram"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>




              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <img src="img/visage3.png" alt="visage" class="img-fluid rounded-circle w-50 mb-3">
                          <h3>John</h3>
                          <h5 class="text-muted">Avis</h5>
                          <p>"J'ai eu un peu de difficulté à trouver les informations que je cherchais sur le site,
                             mais l'assistance à la clientèle a été très utile pour résoudre mes problèmes."

                          </p>
                          <div class="d-flex justify-content-center">
                              <div class="p-4">
                                  <a href="http://facebook.com">
                                      <i class="fab fa-facebook"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://twitter.com">
                                      <i class="fab fa-twitter"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://instagram.com">
                                      <i class="fab fa-instagram"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>




              <div class="col-lg-3 col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <img src="img/visage4.png" alt="visage" class="img-fluid rounded-circle w-50 mb-3">
                          <h3>Susan</h3>
                          <h5 class="text-muted">Avis</h5>
                          <p> "J'ai apprécié la possibilité de suivre l'avancement des tâches comme les livraisons des produits de mes clients en temps réel via le site."

                          </p>
                          <div class="d-flex justify-content-center">
                              <div class="p-4">
                                  <a href="http://facebook.com">
                                      <i class="fab fa-facebook"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://twitter.com">
                                      <i class="fab fa-twitter"></i>
                                  </a>
                              </div>
                              <div class="p-4">
                                  <a href="http://instagram.com">
                                      <i class="fab fa-instagram"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>

  <a href="#" class="btn btn-outline-danger"> voir plus de commentaires de nos clients</a>

  

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