<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="custom.css">
  </head>

  <body>

<!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-background">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="#">Arcadia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
          <a class="navbar-brand d-none d-lg-block" href="#">Arcadia</a>
            <li class="nav-item">
              <a class="nav-link" href="#">Animaux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Avis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Hero Video -->
    <div class="hero">
      <video autoplay muted loop id="hero-video-desktop" class="hero-video">
        <source src="./img/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture ou la vidéo.
      </video>
      <video autoplay muted loop id="hero-video-mobile" class="hero-video">
        <source src="./img/header_smartphone.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture ou la vidéo.
      </video>
      <div class="hero-content">
        <h1>Bienvenue chez Arcadia.</h1>
      </div>
    </div>

<!-- Arcadia Presentation -->
    <section class="description-section">
      <div class="description-content">
        <h2>Où chaque animal est une priorité.</h2>
        <p>Niché au cœur de la forêt de Brocéliande en Bretagne, le zoo Arcadia vous invite à une aventure unique depuis 1960. 
          Découvrez une variété d'animaux répartis dans des habitats naturels soigneusement recréés : savane, jungle et marais. 
          Notre priorité absolue est le bien-être de nos résidents, avec des contrôles vétérinaires quotidiens et une alimentation précisément calculée. 
          Sous la direction de José, notre zoo prospère et continue d'innover pour offrir une expérience inoubliable et éducative. 
          Venez vivre la magie de la faune et de la flore dans un cadre enchanteur !</p>
      </div>
      <div class="container mt-4">
      <div class="row">
        <div class="col-md-10 mx-auto text-center">
          <img src="./img/zoo.JPEG" class="img-fluid rounded-image" alt="Photo du zoo mettant en avant l'espace du parc avec une girafe et rhynocéros qui se promènent">
        </div>
      </div>
    </div>
  </section>

<!-- Habitat presentation -->
    <section>
      <div class="description-content text-center">
        <h3>Notre Zoo</h3>
        <p>Chez Arcadia, la nature prend vie sous vos yeux ! <br>
        Nous avons recréé avec soin trois habitats naturels uniques pour offrir à nos animaux un environnement aussi proche que possible de leur milieu naturel. 
        Explorez la Savane, le Marais et la Jungle, et découvrez les merveilles de chaque écosystème.</p>
      </div>

      <div class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="p-4">
          <a href="jungle.html" class="circle-button d-inline-block text-center">
            <img src="./img/jungle.jpg" alt="Jungle" class="img-fluid rounded-circle">
            <span class="button-text">Jungle</span>
          </a>
        </div>
        <div class="p-4">
          <a href="marais.html" class="circle-button d-inline-block text-center">
            <img src="./img/marais.jpg" alt="Marais" class="img-fluid rounded-circle">
            <span class="button-text">Marais</span>
          </a>
        </div>
        <div class="p-4">
          <a href="savane.html" class="circle-button d-inline-block text-center">
            <img src="./img/savane.jpg" alt="Savane" class="img-fluid rounded-circle">
            <span class="button-text">Savane</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section>
        <div class="description-content text-center">
            <h3>Nos services</h3>
        </div> 

        <div class="container">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="./img/resto.jpg" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-theme h-100">
                      <h4 class="pt-4 text-center">Restaurant</h4>
                      <p class="px-3">Situé au cœur d'un magnifique parc, notre restaurant vous offre une vue imprenable sur la nature et les animaux qui y vivent. 
                        Profitez d'un cadre enchanteur tout en savourant des plats délicieux préparés avec soin.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="./img/guide.jpg" alt="Vue d'un guide qui présente des lémuriens (singles) dans leurs enclos." /></div>
                <div class="col-lg-6 order-lg-2">
                    <div class="bg-theme h-100">
                      <h4 class="pt-4 text-center">Visites guidées</h4>
                      <p class="px-3">Envie d'en savoir plus sur les habitants du parc ? 
                        Rejoignez notre visite guidée gratuite avec un expert des animaux. 
                        Apprenez des faits fascinants et découvrez les secrets de la faune locale dans une ambiance conviviale et éducative.
                      <br><i>Durée entre 2 et 3 heures.</i>
                      </p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="./img/petit train.png" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-theme h-100">
                      <h4 class="pt-4 text-center">Petit train</h4>
                      <p class="px-3">Pour une expérience complète, embarquez à bord de notre petit train qui fait le tour du parc. 
                        Accessible à tous, y compris aux personnes à mobilité réduite et aux poussettes, ce tour vous permettra de découvrir les merveilles du parc dans un confort optimal.
                      </p>
                    </div>
                </div>
            </div>
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <button class="btn text-center custom-btn-teal">
                    <a href="lien nos services" target="_blank">Accéder à tous nos services</a>
                  </button>
                </div>
              </div>
            </div>
           
    </section>

<!-- Avis -->
    <section class="container">
      <div class="description-content text-center">
        <h3>Avis visiteurs</h3>
      </div>
      <div class="text-center">
        <p>#arcadia</p>
      </div>
      <div class="card-container">
          <div class="card card-custom small-card">
              <div class="card-body d-flex flex-column justify-content-between">
                  <p class="card-title">Commentaire</p>
                  <p class="card-text">Nom de la personne</p>
              </div>
          </div>
          <div class="card card-custom large-card">
              <div class="card-body d-flex flex-column justify-content-between">
                  <p class="card-title">Commentaire<p/>
                  <p class="card-text">Nom de la personne</p>
              </div>
          </div>
          <div class="card card-custom small-card">
              <div class="card-body d-flex flex-column justify-content-between">
                  <p class="card-title">Commentaire<p/>
                  <p class="card-text">Nom de la personne</p>
              </div>
          </div>
      </div>
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <button class="btn text-center custom-btn-teal">
                    <a href="lien avis" target="_blank">Accéder à tous nos avis</a>
                  </button>
                </div>
              </div>
            </div>
    </section>




<!-- Contact -->
    <div class="bg-contact" id="Contact">
      <div class="description-content container text-center h3-slate mt-5">
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

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery et Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Ton script externe -->
    <script src="./carousel.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
</html>