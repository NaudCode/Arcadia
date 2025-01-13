<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/custom.css">
    <link rel="stylesheet" href="/public/css/avis.css">
  </head>

  <body>

<!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-background">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="/" onclick="window.route(event)">Arcadia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
          <a class="navbar-brand d-none d-lg-block" href="/" onclick="window.route(event)">Arcadia</a>
            <li class="nav-item">
              <a class="nav-link" href="/habitats" onclick="window.route(even)">Habitats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services" onclick="window.route(even)">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/avis" onclick="window.route(even)">Avis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Hero thinking monkey -->
    <div class="hero-image-container">
      <img src="/public/img/header_avis.jpg" alt="Phot d'un singe les doigts sur le menton, comme s'il était en pleine réflexion." class="hero-image">
    </div>

    <!-- Habitat presentation -->
    <section class="description-avis">
      <div class="description-content text-center">
        <i class="fa-solid fa-pen"></i><br>
        <h3>Laisser votre avis</h3>
        <p>
            Chez Arcadia, nous cherchons constamment à améliorer nos produits et services. 
            C'est pourquoi votre avis nous est si précieux. En partageant votre expérience avec nous, que ce soit une suggestion, une critique ou un compliment, 
            vous nous aidez non seulement à progresser, mais aussi à guider les futurs utilisateurs dans leur choix.
        </p>
      </div>

        <!-- form -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form>
                        <div class="mb-3">
                            <label for="pseudo" class="form-label label-left">Pseudo</label>
                            <input type="text" class="form-control py-3" id="pseudo" name="pseudo" maxlength="50" required placeholder="Quel est votre votre pseudo ?">
                        </div>
                        <div class="mb-3">
                            <label for="commentaire" class="form-label label-left">Commentaire</label>
                            <textarea class="form-control" id="commentaire" name="commentaire" rows="5" maxlength="50" required placeholder="Veuillez rédiger votre commentaire."></textarea>
                        </div>
                        <button type="submit" class="btn custom-btn-yellow">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Nos avis -->
    <section>
        <div class="description-content text-center">
            <i class="fas fa-comments"></i><br>
            <h3>Nos avis</h3>
        </div>

        <div class="commentaire-container">
            <div class="commentaire-header">Avis de MarieL23:</div>
            <p>"J'ai passé une journée incroyable au Restaurant du Parc! La vue sur les animaux pendant le repas était magique, et la nourriture était délicieuse. Le petit train était parfait pour faire le tour du parc, surtout avec ma poussette. Merci pour cette belle expérience!"</p>
        </div>

        <div class="commentaire-container">
            <div class="commentaire-header">Avis de PaulD45:</div>
            <p>"Je recommande vivement le Restaurant du Parc! La visite guidée gratuite avec l'expert des animaux était fascinante et très instructive. Le petit train est un plus, surtout pour les personnes à mobilité réduite comme moi. Une journée parfaite en famille!"</p>
        </div>

        <div class="commentaire-container">
            <div class="commentaire-header">Avis de :</div>
            <p>"Quelle belle découverte que le Restaurant du Parc! La vue sur le parc et les animaux est magnifique, et le repas était excellent. Le petit train est une super idée pour explorer le parc confortablement. La visite guidée était un vrai bonus. Je reviendrai sans hésiter!"</p>
        </div>
    </section>


    <!-- Contact -->
    <div class="bg-contact" id="Contact">
        <div class="description-content container text-center h3-slate mt-5">
            <i class="fas fa-map-marker-alt"></i><br>
            <h3>Contact</h3>
        </div>
            <div class="container text-center">
                <div class="row gx-lg-5">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 card-contact">
                            <div class="card-body text-center">
                                <h4>Adresse</h4>
                                <hr class="custom-hr" />
                                <p>Numéro de Rue + Rue <br> Code postal + ville <br> France</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 card-contact">
                            <div class="card-body text-center">
                                <h4>Horaires</h4>
                                <hr class="custom-hr" />
                                <p>
                                    <b>Semaine</b><br>10h00 - 19h00<br><br>
                                    <b>Weekend</b><br>10h00 - 21h00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 card-contact">
                            <div class="card-body text-center">
                                <h4>Contact</h4>
                                <hr class="custom-hr" />
                                <p>
                                    <b>Téléphone</b><br>(+33) 123 456 7890<br><br>
                                    Nous contacter <a href="lien">lien</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
            <ul class="row justify-content-between">
                <li class="col-auto text-center">&copy; Arcadia - 2025</li>
                <li class="col-auto text-center url"><a href="#">Réglement intérieur</a></li>
                <li class="col-auto text-center url"><a href="#">Données personnelles</a></li>
                <li class="col-auto text-center url"><a href="#">Mention légales</a></li>
                <li class="col-auto text-center url"><a href="#">Plan du site</a></li>
                <li class="col-auto text-center url"><a href="#">Cookies</a></li>
                <li class="col-auto text-center url">Conception : DevSoft</li>
            </ul>
            </div>
        </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>