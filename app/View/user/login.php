<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/public/css/custom.css">
    <style>
      html, body {
        height: 100%; /* Ensure html and body take full height of the viewport */
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column; /* Arrange content in a column */
        min-height: 100vh; /* Ensure body takes at least the full height of the viewport */
      }

      .content { /* Wrap all content except the footer in a "content" div */
        flex: 1; /* Allow main content to take available space */
      }

      .header {
        background-color: #ccc;
        height: 150px; /* Adjusted height to avoid overlapping the navbar */
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .header h1 {
        font-size: 4rem;
        color: #333;
        text-align: center;
      }

      .label-left {
        text-align: left !important; 
      }

    </style>
  </head>
  <body>

    <div class="content">  

    <nav class="navbar navbar-expand-lg navbar-background">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" onclick="window.route(event)">Arcadia</a>
        </div>
    </nav>

      <header class="header">
        <div class="container">
          <h1>Espace personnel</h1> 
        </div>
      </header>

      <section class="content-connexion">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <form>
                <div class="mb-3">
                  <label for="pseudo" class="form-label label-left">Identifiant</label>
                  <input type="text" class="form-control" id="pseudo" name="pseudo" maxlength="50" required placeholder="Entrez votre identifiant">
                </div>
                <div class="mb-3">
                  <label for="motdepasse" class="form-label label-left">Mot de passe</label>
                  <input type="password" class="form-control" id="motdepasse" name="motdepasse" required placeholder="Entrez votre mot de passe">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn custom-btn-yellow">Connexion</button> 
                </div>
                <div class="mt-2 text-center">
                  <small>Mot de passe oublié ? Merci de contacter votre administrateur.</small> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>  

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
    <script src="/Scripts/habitats.js"></script>  
  </body>
</html>