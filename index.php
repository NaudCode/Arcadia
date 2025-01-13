<?php

// Chargement automatique via Composer (si tu utilises des dépendances)
require_once __DIR__ . '/vendor/autoload.php';

// Définir les en-têtes HTTP pour forcer le navigateur à ne pas cacher le contenu
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: text/html; charset=utf-8");

// Points d'entrée principaux de l'application
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue chez Arcadia">
    <title>Arcadia</title>

    <!-- Fichiers CSS globaux -->
    <link rel="stylesheet" href="/public/css/custom.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li><a href="/home" onclick="window.route(event)">Accueil</a></li>
            <li><a href="/habitats" onclick="window.route(event)">Habitats</a></li>
            <li><a href="/avis" onclick="window.route(event)">Avis</a></li>
            <li><a href="/user/login" onclick="window.route(event)">Connexion</a></li>
        </ul>
    </nav>

    <!-- Contenu principal -->
    <div id="main-page">
        <!-- Le contenu sera injecté ici par le JavaScript -->
    </div>

    <!-- Scripts -->
    <script type="module" src="./app/Controller/Router.js"></script>
</body>
</html>
