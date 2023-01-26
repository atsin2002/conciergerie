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
    <!-- Header, accueil grande image -->
<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "conciergerie";
$conn = mysqli_connect($host, $username, $password, $dbname);
if(isset($_POST['submit'])){
    

  // Vérification de la connexion
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Récupération des données du formulaire
  $name = $_POST['nom_produit'];
  $categorie= $_POST['categorie'];
  $marque = $_POST['marque'];
  $des= $_POST['description'];
  $image = $_POST['image'];
  $prix=$_POST['prix'] ;
  $quantite =$_POST['quantite'];


  // Préparation de la requête d'insertion
  $sql1 = "INSERT INTO produit (nom_produit,prix_unite,categorie,marque,description,image,quantite) VALUES ('$name', '$prix','$categorie','$marque',$des,'$image','$quantite')";
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








?>
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
            <a class="nav-link" href="notification.php">Notification</li></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="parametres.php">Paramètres</a>
        </li>
        </ul>
      </div>
    </nav>

    <div class="formAP">
      <!--formulaire ajout produit-->

      <form action="gestionProduit.php" method="POST">
        <p>
          Nom du produit:
          <input
            type="text"
            id="productName"
            name="nom_produit"
            placeholder="Entrez le nom du produit"
            required
            minlength="1"
            required
          />
        </p>
    
        <p>
          Catégorie du produit:
          <select id="productCategory" name="categorie">
            <option>Floral</option>
            <option>Boisé</option>
            <option>Oriental</option>
            <option>Citronné</option>
            <option>Frais</option>
            <option>Aromatique</option>
            <option>Musqué</option>
            <option>Fougère</option>
            <option>Aquatique</option>
            <option>Chypré</option>
            <option>Cuir</option>
            <option>Gourmand</option>
            <option>Herbacé</option>
            <option>Épicé</option>
            <option>Verte</option>
            <option>Solaire</option>
            <option>Autres</option>
          </select>
        </p>
        <p>
          Marques de parfums:
          <select id="productCategory" name="marque">
            <option>Chanel</option>
            <option>Dior</option>
            <option>Lancôme</option>
            <option>Yves Saint Laurent</option>
            <option>Gucci</option>
            <option>Versace</option>
            <option>Prada</option>
            <option>Giorgio Armani</option>
            <option>Ralph Lauren</option>
            <option>Hermes</option>
          </select>
        </p>
        <p>
          Description du produit:
          <textarea
            class="form-control"
            name="description"
            id="productDescription"
            rows="3"
          ></textarea>
        </p>
        <p>
          Prix du produit:
          <input
          type="number"
            class="form-control"
            name="prix"
            id="productDescription"
            rows="3"
          ></input>
        </p>
        <p>
          Quantité en stock:
          <input
            type="number"
            name="quantite"
            id="productQuantity"
            placeholder="Entrez la quantité en stock"
          />
        </p>
        <p>
          Associer une Couverture:
          <input
            type="file"
            id="couvertureproduit"
            name="image"
            form="formEditer"
            accept=".jpg, .jpeg, .png"
            required
          />
        </p>
        <p>
          ETES VOUS SUR DE VOULOIR AJOUTER LE PRODUIT ? sinon
          <button class="btn btn-danger" id="reset-button">
            Réinitialiser
          </button>
        </p>

        <button type="submit" name="submit" class="btn btn-primary">
          Ajouter le produit
        </button>
      </form>
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
      $("body").scrollspy({ target: "#main-nav" });

      // Gérer les Date
      $(document).ready(function () {
        $("#year").datepicker({
          format: "yyyy",
          viewMode: "years",
          minViewMode: "years",
        });
      });

      //annuler la saisie du client
      $(document).ready(function () {
        $("#reset-button").click(function () {
          $(".form-control").val("");
        });
      });
    </script>
  </body>
</html>
