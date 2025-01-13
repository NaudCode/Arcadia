import Route from "./Route.js";

// Chemin de base pour les fichiers de vues
const BASE_PATH = "./app/View/";

// Définir les routes avec des rôles et des alias
export const allRoutes = [
    new Route(`${BASE_PATH}home`, "Accueil", `${BASE_PATH}home.php`, "public", "home"),
    new Route(`${BASE_PATH}habitats`, "Habitats", `${BASE_PATH}habitats.php`, "public", "habitats"),
    new Route(`${BASE_PATH}avis`, "Avis", `${BASE_PATH}avis.php`, "public", "avis"),
    new Route(`${BASE_PATH}user/login`, "Connexion", `${BASE_PATH}user/login.php`, "guest", "login"),
    new Route(`${BASE_PATH}admin/dashboard`, "Admin Dashboard", `${BASE_PATH}admin/dashboard.php`, "admin", "admin-dashboard")
];

// Nom du site
export const websiteName = "Arcadia";

// Fonction pour générer le titre complet d'une page
export const getFullTitle = (route) => `${route.titre || "Page"} - ${websiteName}`;
