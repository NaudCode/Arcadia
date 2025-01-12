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
    <link rel="stylesheet" href="../Styles/custom.css">
    <link rel="stylesheet" href="../Styles/habitats.css">
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
              <a class="nav-link active" href="/habitats" onclick="window.route(even)">Habitats</a>
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


    <!-- Hero Firefox -->
    <div class="hero-image-container">
      <img src="../img/header firefox.jpg" alt="Panda roux vue de face." class="hero-image">
    </div>


    <!-- Habitat presentation -->
    <section class="description-section">
      <div class="description-content text-center">
        <h3>Bienvenue chez Arcadia, où la nature prend vie sous vos yeux !</h3>
        <p>
        Nous avons recréé avec soin trois habitats naturels uniques pour offrir à nos animaux un environnement aussi proche que possible de leur milieu naturel. 
        Explorez la Savane, le Marais et la Jungle, et découvrez les merveilles de chaque écosystème.
        </p>
      </div>

      <div class="d-flex justify-content-center align-items-center flex-wrap mb-4">
        <div class="p-4">
          <a href="#" class="circle-button d-inline-block text-center" data-habitat="jungle">
            <img src="../img/jungle.jpg" alt="Jungle" class="img-fluid rounded-circle">
            <span class="button-text">Jungle</span>
          </a>
        </div>
        <div class="p-4">
          <a href="#" class="circle-button d-inline-block text-center" data-habitat="marais">
            <img src="../img/marais.jpg" alt="Marais" class="img-fluid rounded-circle">
            <span class="button-text">Marais</span>
          </a>
        </div>
        <div class="p-4">
          <a href="#" class="circle-button d-inline-block text-center" data-habitat="savane">
            <img src="../img/savane.jpg" alt="Savane" class="img-fluid rounded-circle">
            <span class="button-text">Savane</span>
          </a>
        </div>
      </div>

      <!-- Habitats description -->
      <div class="description-content text-center text-slate">
        <p id="description"></p>
      </div>

    </section>


    <!-- Animals presentation -->
    <section>

      <div class="container">
          <div class="row gx-0 justify-content-center animal-row" data-habitat="jungle">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/Roxy.jpg" alt="description image" data-name="Roxy" />
              <span class="animal-name">Roxy</span>
            </div>
            <div class="col-lg-6 order-lg-first ml-3 ">
              <div class="h-100 animal-info" id="info-roxy">
                <p class="px-3">
                  <ul>
                  <li><b>Prénom :</b> Roxy</li>
                  <li><b>Race :</b> Panda roux (Ailurus fulgens)</li>
                  <li><b>Habitat :</b> Jungle</li> 
                  <li><b>État de l’animal :</b>En bonne santé</li>
                  <li><b>Nourriture proposée :</b> Bambou, fruits, insectes, œufs</li>
                  <li><b>Grammage de la nourriture :</b> 1.5 kg par jour</li>
                  <li><b>Date de passage :</b> 5 janvier 2024</li>
                  <li><b>Détail de l’état de l’animal :</b> Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="jungle">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/Polly.webp" alt="description image" data-name="Polly" />
              <span class="animal-name">Polly</span>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="h-100 animal-info" id="info-Polly">
                <p class="px-3">
                <ul>
                  <li><b>Prénom :</b> Polly</li>
                  <li><b>Race :</b> Perroquet amazone</li>
                  <li><b>Habitat :</b> Jungle</li> 
                  <li><b>État de l’animal :</b>En bonne santé</li>
                  <li><b>Nourriture proposée :</b> Fruits, graines, noix</li>
                  <li><b>Grammage de la nourriture :</b> 200g par jour</li>
                  <li><b>Date de passage :</b> 5 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal :</b> Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="jungle">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/Jade.webp" alt="description image" data-name="Jade" />
              <span class="animal-name">Jade</span>
            </div>
            <div class="col-lg-6 order-lg-first">
              <div class="h-100 animal-info" id="info-jade">
                <p class="px-3">
                <ul>
                  <li><b>Prénom :</b> Jade</li>
                  <li><b>Race :</b> Jaguar d'Amérique du Sud</li>
                  <li><b>Habitat :</b> Jungle</li> 
                  <li><b>État de l’animal :</b>En bonne santé</li>
                  <li><b>Nourriture proposée :</b> Viande crue (boeuf, poulet)</li>
                  <li><b>Grammage de la nourriture :</b> 4kg par jour</li>
                  <li><b>Date de passage :</b> 10 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal :</b> Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="jungle">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/bongo.jpg" alt="description image" data-name="Bongo" />
              <span class="animal-name">Bongo</span>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="h-100 animal-info" id="info-bongo">
                <p class="px-3">
                <ul>
                  <li><b>Prénom :</b> Bongo</li>
                  <li><b>Race :</b> Singe capucin</li>
                  <li><b>Habitat :</b> Jungle</li> 
                  <li><b>État de l’animal :</b>En bonne santé</li>
                  <li><b>Nourriture proposée :</b> Fruits, noix, insectes</li>
                  <li><b>Grammage de la nourriture :</b> 1kg par jour</li>
                  <li><b>Date de passage :</b> 10 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal :</b> Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
      </div>

      <div class="container">
          <div class="row gx-0 justify-content-center animal-row" data-habitat="savane">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/lion desc.jpg" alt="description image" data-name="Simba" />
              <span class="animal-name">Simba</span>
            </div>
            <div class="col-lg-6 order-lg-first ml-3 ">
              <div class="h-100 animal-info" id="info-simba">
                <p class="px-3">
                  <ul> 
                  <li><b>Prénom : </b>Simba </li>
                  <li><b>Race : </b>Lion d'afrique</li>
                  <li><b>Habitat : </b>Savane</li> 
                  <li><b>État de l’animal : </b>En bonne santé</li>
                  <li><b>Nourriture proposée : </b>Viande crue (boeuf, poulet)</li>
                  <li><b>Grammage de la nourriture : </b>5 kg par jour</li>
                  <li><b>Date de passage : </b>12 décembre 2024</li>
                  <li><b>Détail de l’état de l’animal : </b>Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="savane">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/daisy.webp" alt="description image" data-name="Daisy" />
              <span class="animal-name">Daisy</span>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="h-100 animal-info" id="info-daisy">
                <p class="px-3">
                <ul>
                  <li><b>Prénom : </b>Daisy</li>
                  <li><b>Race : </b>Perroquet amazone</li>
                  <li><b>Habitat : </b>Savane</li> 
                  <li><b>État de l’animal : </b>En bonne santé</li>
                  <li><b>Nourriture proposée : </b>Feuilles d'acacia, branches</li>
                  <li><b>Grammage de la nourriture : </b>30kg par jour</li>
                  <li><b>Date de passage : </b>5 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal : </b>Excellent</li>
                  </ul>
                </p> 
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="savane">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/zebre.jpg" alt="description image" data-name="Ziggi" />
              <span class="animal-name">Zigi</span>
            </div>
            <div class="col-lg-6 order-lg-first">
              <div class="h-100 animal-info" id="info-ziggi">
                <p class="px-3">
                <ul>
                  <li><b>Prénom : </b>Ziggi</li>
                  <li><b>Race : </b>Zebre de plaine</li>
                  <li><b>Habitat : </b>Savane</li> 
                  <li><b>État de l’animal : </b>En bonne santé</li>
                  <li><b>Nourriture proposée : </b>Herbe foin</li>
                  <li><b>Grammage de la nourriture : </b>20kg par jour</li>
                  <li><b>Date de passage : </b>10 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal : </b>Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
      </div>

      <div class="container">
          <div class="row gx-0 justify-content-center animal-row" data-habitat="marais">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/Alligator.webp" alt="description image" data-name="Al" />
              <span class="animal-name">Al</span>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="h-100 animal-info" id="info-al">
                <p class="px-3">
                  <ul>
                  <li><b>Prénom : </b>Al </li>
                  <li><b>Race : </b>Alligator américain</li>
                  <li><b>Habitat : </b>Marais</li> 
                  <li><b>État de l’animal : </b>En bonne santé</li>
                  <li><b>Nourriture proposée : </b>Viande crue (poisson, poulet)</li>
                  <li><b>Grammage de la nourriture : </b>3 kg par jour</li>
                  <li><b>Date de passage : </b>12 décembre 2024</li>
                  <li><b>Détail de l’état de l’animal : </b>Excellent</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="row gx-0 justify-content-center animal-row" data-habitat="marais">
            <div class="col-lg-6 animal-image-container">
              <img class="img-fluid animal-image rounded-image" src="../img/Shelly.webp" alt="description image" data-name="Sheely" />
              <span class="animal-name">Sheely</span>
            </div>
            <div class="col-lg-6 order-lg-first">
              <div class="h-100 animal-info" id="info-shelly">
                <p class="px-3">
                <ul>
                  <li><b>Prénom : </b>Shelly</li>
                  <li><b>Race : </b>Tortue d'eau douce</li>
                  <li><b>Habitat : </b>Marais</li> 
                  <li><b>État de l’animal : </b>En bonne santé</li>
                  <li><b>Nourriture proposée : </b>Légumes, insectes</li>
                  <li><b>Grammage de la nourriture :</b> 500g par jour</li>
                  <li><b>Date de passage : </b>5 janvier 2025</li>
                  <li><b>Détail de l’état de l’animal : </b>Excellent</li>
                  </ul>
                </p>
              </div>
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
    <script src="../Scripts/habitats.js"></script>  
  </body>
</html>