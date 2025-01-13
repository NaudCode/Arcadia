<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <!-- Inclure le CSS de GLightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css">
    <!-- Add the slick-theme.css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/custom.css">
    <link rel="stylesheet" href="/public/css/home.css">
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
              <a class="nav-link" href="/avis" onclick="window.route(even)">Avis</a>
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

<!-- Hero Video -->
    <div class="hero">
      <video autoplay muted loop id="hero-video-desktop" class="hero-video">
        <source src="/public/img/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture ou la vidéo.
      </video>
      <video autoplay muted loop id="hero-video-mobile" class="hero-video">
        <source src="/public/img/header_smartphone.mp4" type="video/mp4">
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
          <img src="/public/img/zoo.JPEG" class="img-fluid rounded-image" alt="Photo du zoo mettant en avant l'espace du parc avec une girafe et rhynocéros qui se promènent">
        </div>
      </div>
    </div>
  </section>

<!-- Habitat presentation -->
    <section>
      <div class="description-content text-center">
        <i class="fas fa-paw"></i><br>
        <h3>Notre Zoo</h3>
        <p>Explorez nos habitats naturels uniques et rencontrez nos animaux incroyables</p>
        <p>Chez Arcadia, la nature prend vie sous vos yeux !<br> 
        Nous avons recréé avec soin trois habitats naturels uniques pour offrir à nos animaux un environnement aussi proche que possible de leur milieu naturel. Chaque habitat est conçu pour reproduire fidèlement les conditions de vie des animaux, leur permettant de s'épanouir et de se comporter comme ils le feraient dans la nature.</p>
        <p><u>Cliquer sur l'un des habitats pour en savoir plus.</u></p>
      </div>

      <div class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="p-4">
          <a href="/habitats" onclick="window.route(even)" class="circle-button d-inline-block text-center">
            <img src="/public/img/jungle.jpg" alt="Jungle" class="img-fluid rounded-circle">
            <span class="button-text">Jungle</span>
          </a>
        </div>
        <div class="p-4">
          <a href="/habitats" onclick="window.route(even)" class="circle-button d-inline-block text-center">
            <img src="/public/img/marais.jpg" alt="Marais" class="img-fluid rounded-circle">
            <span class="button-text">Marais</span>
          </a>
        </div>
        <div class="p-4">
          <a href="/habitats" onclick="window.route(even)" class="circle-button d-inline-block text-center">
            <img src="/public/img/savane.jpg" alt="Savane" class="img-fluid rounded-circle">
            <span class="button-text">Savane</span>
          </a>
        </div>
      </div>

      <div class="description-content text-center">
      <p>Plongez dans la luxuriante Jungle, explorez les vastes étendues de la Savane et découvrez les mystères des Marais. Chaque écosystème est une aventure en soi, pleine de merveilles à découvrir. Que vous soyez passionné par les grands félins, les éléphants majestueux ou les oiseaux exotiques, notre zoo vous offre une expérience immersive et inoubliable.</p>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="owl-carousel owl-theme col-lg-6">
                    <div class="item"><a href="/public/img/CarouselDSC_0394.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0394.JPG" alt="Photo de notre espace jungle" class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0400.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0400.JPG" alt="Photo des lions qui se reposent sur leur rochers dans leur environnement savane." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0403.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0403.JPG" alt="Suricat debout faisant le guet." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0416.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0416.JPG" alt="Deux éléphants si ce promènent." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0433.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0433.JPG" alt="Rhinocéros qui mange vu de profil droit." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0462.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0462.JPG" alt="Grorille assis grimacant." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0443.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0443.JPG" alt="Panda vu de haut qui mange." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0499.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0499.JPG" alt="Girafe vu de profil." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0504.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0504.JPG" alt="Guépard marchant vu de face." class="img-fluid"></a></div>
                    <div class="item"><a href="/public/img/CarouselDSC_0559.JPG" class="glightbox"><img src="/public/img/CarouselDSC_0559.JPG" alt="Boa enroulé sur lui nous regardant." class="img-fluid"></a></div>
                </div>
            </div>
        </div>
      </div>

 

    </section>

    <!-- Services -->
<!-- Services -->
<section>
        <div class="description-content text-center">
            <i class="fas fa-utensils"></i><br>
            <h3>Nos services</h3>
        </div> 

        <div class="container">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="/public/img/resto.jpg" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-theme h-100">
                      <h4 class="pt-4 text-center">Restaurant</h4>
                      <p class="px-3">Situé au cœur d'un magnifique parc, notre restaurant vous offre une vue imprenable sur la nature et les animaux qui y vivent. 
                        Profitez d'un cadre enchanteur tout en savourant des plats délicieux préparés avec soin.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="/public/img/guide.jpg" alt="Vue d'un guide qui présente des lémuriens (singles) dans leurs enclos." /></div>
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
                <div class="col-lg-6"><img class="img-fluid" src="/public/img/petit train.png" alt="Vue d'une table en terasse du restaurant sur le parc." /></div>
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
        <i class="fas fa-comments"></i><br>
        <h3>Avis visiteurs</h3>
      </div>
      <div class="reviews" id="reviews">
        <div class="review">
            <p>J'ai passé une journée incroyable au Restaurant du Parc ! La vue sur les animaux pendant le repas était magique, et la nourriture était délicieuse. Le petit train était parfait pour faire le tour du parc, surtout avec ma poussette. Merci pour cette belle expérience !</p>
            <p><b>MarieL23</b></p>
        </div>
        <div class="review">
            <p>Je recommande vivement le Restaurant du Parc ! La visite guidée gratuite avec l'expert des animaux était fascinante et très instructive. Le petit train est un plus, surtout pour les personnes à mobilité réduite comme moi. Une journée parfaite en famille !</p>
            <p><b>PailD54</b></p>
        </div>
        <div class="review">
            <p>Quelle belle découverte que le Restaurant du Parc ! La vue sur le parc et les animaux est magnifique, et le repas était excellent. Le petit train est une super idée pour explorer le parc confortablement. La visite guidée était un vrai bonus. Je reviendrai sans hésiter !</p>
            <p><b>SophieR12</b></p>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <a href="lien avis" class="easy-link" target="_blank">Découvrez tous nos avis</a>
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

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery et Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Includ  JS GLightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

    <!-- Includ JS Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <!-- Ton script externe -->
    <script src="./public/js/carousel.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
</html>