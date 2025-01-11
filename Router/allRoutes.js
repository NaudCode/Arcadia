import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("Pages/", "Accueil", "/Pages/index.php"),
    new Route("Pages/habitats", "Habitats", "/Pages/habitats.php"),
    new Route("Pages/avis", "Avis", "/Pages/avis.php")
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";