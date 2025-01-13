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
    <link rel="stylesheet" href="/public/css/services.css">
  </head>

  <body>

<!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-background">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none"  href="/" onclick="window.route(event)">Arcadia</a>
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


    <!-- Hero elephant eating -->
    <div class="hero-image-container">
      <img src="/public/img/service_header.jpg" alt="Photo d'un éléphant dans l'eau, vue de profil mangeant une pomme grâce à sa trompe." class="hero-image">
    </div>

    <!-- Habitat presentation -->
    <section class="description-services">
      <div class="description-content text-center">
        <i class="fas fa-utensils"></i><br>
        <h3>Nos services</h3>
        <p>
            Profitez de nos services tout au long de votre visites. 
        </p>
      </div>

    </section>
    

    <!-- Services -->
    <section class="container">

        <div>
            <h4 class="description-content text-center">Se restaurer</h4>
        </div>

        <div class="row gx-0 justify-content-center p-4">
            <div class="col-lg-6"><img class="img-fluid rounded-image" src="/public/img/resto.jpg" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="h-100">
                    <p class="pt-4 text-center"><b>Nom</b></p>
                    <p class="px-3">
                        INFO DU RESTAURANT
                    </p>
                </div>
            </div>
        </div>

        <hr class="custom-hr-services" />

        <div>
            <h4 class="description-content text-center">Visite guidée</h4>
        </div>
        <div class="row gx-0 justify-content-center p-4">
            <div class="col-lg-6"><img class="img-fluid rounded-image" src="/public/img/guide.jpg" alt="Vue d'un guide qui présente des lémuriens (singles) dans leurs enclos." /></div>
            <div class="col-lg-6 order-lg-2">
                <div class="h-100">
                    <p class="pt-4 text-center"><b>Nom</b></p>
                    <p class="px-3">
                        INFO VISITE GUIDEE
                    </p>
                </div>
            </div>
        </div>

        <hr class="custom-hr-services" />

        <div>
            <h4 class="description-content text-center">Petit train</h4>
        </div>
        <div class="row gx-0 justify-content-center p-4">
            <div class="col-lg-6"><img class="img-fluid rounded-image" src="/public/img/petit train.png" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="h-100">
                    <p class="pt-4 text-center"><b>Nom</b></p>
                    <p class="px-3">
                        INFO PETIT TRAIN
                    </p>
                </div>
            </div>
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