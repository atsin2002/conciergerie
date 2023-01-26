<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Projet Bootstrap</title>
    <!-- CSS de Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Custom Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Kaushan+Script"
      rel="stylesheet"
    />
  </head>

  <body>
    <?php
    
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "conciergerie";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    $sql = "SELECT * FROM commande JOIN client where commande.id_order =client.id_client";
    $result = mysqli_query($conn, $sql);
    // Enregistre les données dans une variable
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);

    $sql1 = "SELECT * FROM client";
    $result1 = mysqli_query($conn, $sql1);
    // Enregistre les données dans une variable
    $data1 = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    ?>
    <!-- Header, accueil grande image -->

    <header class="text-center" id="top">
      <div class="text-intro">
        <div class="preTxt text-white font-italic">
          Gerer votre conciergerie en toute quietude
        </div>
        <h1>DASHBOARD CONCIERGERIE</h1>
        <a href="#" class="btn btn-primary mt-3">En Savoir Plus</a>
      </div>
    </header>

    <!-- Nav -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
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

    <!--gestion des commandes-->

    <div class="formAP">
      <h1 class="text-center">Suivi des livraisons</h1>

      <div class="row">
        <div class="col-md-12">
          <button
            class="btn btn-primary float-right"
            data-toggle="modal"
            data-target="#addClientModal"
          >
            Actualiser les commandes
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <input
            type="text"
            class="form-control"
            id="searchBar"
            placeholder="Rechercher une commande"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <select id="filter">
            <option>Toutes les livraisons</option>
            <option>Livraisons en cours</option>
            <option>Livraisons terminées</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12  my-4 "> 
          <ul class="timeline">
            <li>
              <div class="timeline-badge primary">
                <i class="glyphicon glyphicon-check"></i>
              </div>
              <?php  foreach ($data as $row):?>           
                <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Numero de commande :<?php echo $row["id_order"] ?> </h4>
                  <h4 class="timeline-title"><?php echo  $row["nom"]. " " .$row['prenom'] ?></h4>
                  <p>
                    <small class="text-muted">
                      <i class="glyphicon glyphicon-time"></i> Commande passée :
                      <?php echo $row["date_order"] ?>
                    </small>
                  </p>
                </div>
                <div class="timeline-body">
                  <p>Statut de livraison : En cours de livraison</p>
                  <p><?php echo $row["addresse"] ?> </p>
                  <p>Date d'arrivée estimée : 15/01/2022</p>
                  <p>Nombre d'article : <?php echo $row["quantite"] ?></p>
                 
                  <button class="btn btn-primary print-button" onclick="printInvoice()">Imprimer la facture</button>

                </div>
              </div>
              <?php endforeach; ?>

            </li>
            <!-- Ajoutez d'autres éléments de la timeline pour afficher d'autres livraisons -->
          </ul>
        </div>
      </div>
    </div>

    <!-- Script Jquery  -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <!-- Popper.js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <!-- Javascript de Bootstrap -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <script>
      // Générer Date
      $("#year").text(new Date().getFullYear());

      // ScrollSpy
      $("body").scrollspy({ target: "#main-nav" });
    </script>
  </body>
</html>
