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


    <!-- Hero Firefox -->
    <div class="hero">
      <img src="./img/header firefox.jpg" alt="Panda roux vue de face.">
      <div class="hero-content">
        <h1>Bienvenue chez Arcadia.</h1>
      </div>
    </div>


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

      <div class="description-content text-center">
      <p>Plongez dans la luxuriante Jungle, explorez les vastes étendues de la Savane et découvrez les mystères des Marais. Chaque écosystème est une aventure en soi, pleine de merveilles à découvrir. Que vous soyez passionné par les grands félins, les éléphants majestueux ou les oiseaux exotiques, notre zoo vous offre une expérience immersive et inoubliable.</p>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="owl-carousel owl-theme col-lg-6">
                    <div class="item"><a href="./img/CarouselDSC_0394.JPG" class="glightbox"><img src="./img/CarouselDSC_0394.JPG" alt="Photo de notre espace jungle" class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0400.JPG" class="glightbox"><img src="./img/CarouselDSC_0400.JPG" alt="Photo des lions qui se reposent sur leur rochers dans leur environnement savane." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0403.JPG" class="glightbox"><img src="./img/CarouselDSC_0403.JPG" alt="Suricat debout faisant le guet." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0416.JPG" class="glightbox"><img src="./img/CarouselDSC_0416.JPG" alt="Deux éléphants si ce promènent." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0433.JPG" class="glightbox"><img src="./img/CarouselDSC_0433.JPG" alt="Rhinocéros qui mange vu de profil droit." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0462.JPG" class="glightbox"><img src="./img/CarouselDSC_0462.JPG" alt="Grorille assis grimacant." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0443.JPG" class="glightbox"><img src="./img/CarouselDSC_0443.JPG" alt="Panda vu de haut qui mange." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0499.JPG" class="glightbox"><img src="./img/CarouselDSC_0499.JPG" alt="Girafe vu de profil." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0504.JPG" class="glightbox"><img src="./img/CarouselDSC_0504.JPG" alt="Guépard marchant vu de face." class="img-fluid"></a></div>
                    <div class="item"><a href="./img/CarouselDSC_0559.JPG" class="glightbox"><img src="./img/CarouselDSC_0559.JPG" alt="Boa enroulé sur lui nous regardant." class="img-fluid"></a></div>
                </div>
            </div>
        </div>
      </div>

 

    </section>

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