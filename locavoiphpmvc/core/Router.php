<?php

use Locavoiphpmvc\Autoloader;
use Locavoiphpmvc\Controller\HomepageController;
use Locavoiphpmvc\Controller\SalutController;

if (!isset($_SESSION)) {
    session_start();
}

//on intègre le fichier de configuration
require_once('./config/config.php');

//on ajoute l'autoloader dans le fichier de la class afin
//d'avoir des require_once dynamique
require_once('./core/Autoloader.php');

//on appelle la méthode statique de la class pour l'autoloader
//dans lemoteur PHP (serveur) pour rappelle les méthode statique ne sont
//pas appelé avec la -> mais avec ::
Autoloader::register();

//on définit la class router
class Router
{
    //Propriétés
    //on déclare un tableau associatif qui sera de ta sorte $routes[nomDeRoute] = function;
    private $routes;
    //on déclare une propriété pour mémorisé le controller concerné par l'action
    private $currentController;

    //le constructeur
    public function __construct()
    {
        //on ajoute les routes disponibles dans le projet
        //la route de la page d'accueil
        $this->add_route('/', function ($params) {
            $this->currentController = new HomepageController();
            $this->currentController->voirToutesLesVoitures();
        });
        $this->add_route('/salut', function ($params)
        {
            $this->currentController = new SalutController();
            $this->currentController->salut();
        });
    }

    //les méthodes
    //fonction qui ajoute  des routes dans l'appli et les associe à une fonction
    //$route: la chaine de caractèrecorrespond à la route dans le projet
    //$closure: une fonction que le routeur va déclancher si la route est appelée
    //$closure = appele la fonction{{ echo.......;}}
    private function add_route(string $route, callable $closure): void
    {
        $this->routes[$route] = $closure;
    }

    //méthode qui sera lancé depuis la page index.php, elle analyse le chemin
    //(la route) dans la barre d'adresse du navigateur url et déclanche la fonction
    //associé à la route lors de l'ajout des routes dans le constructeur
    public function execute(): void
    {
        //on récupère l'adresse demandée
        $path = $_SERVER['REQUEST_URI'];
        //on cherche et remplace par du vide la constante BASE_FOLDER dans le chemin
        //récupéré dans la barre d'adresse. cad le /
        $finalPath = str_replace(BASE_FOLDER, "", $path);
        //avec la méthode strrpost on cherche dans l'adresse retenu($finalPath) le caractère /
        //pour déterminer si on a à faire une route à plusieurs niveaux comme exemple admin/voiture/new
        //qui différe avec une adresse de 1ère niveau comme le /admin
        $lastIndex = strrpos($finalPath, '/');

        //si le $lastIndex de / n'est pas 0 alors on est sur une route de plusieurs niveaux
        $arg = [];
        if ($lastIndex > 0) :
            //on éclate la chaine de caratères $finalPath aà l'aide de la méthode native de php explode()
            $array = explode('/', $finalPath);
            //on met à jour le finalPath de tel sorte que l'on ait l'adresse /admin
            $finalPath = '/' . $array[1];
            //comme on est sur une route à plusieurs niveaux, on stock les appelations des niveaux (en dehors du 1er)
            //le tableau des arguments $arg
            //on crée un tableau qui recevra comme entrée les "argument" de la route,
            //c'est à dire qui est après le 1er niveau voiture, update, 8 dans le cas de notre route (admin/voiture/update/8)
            for ($i = 2; $i < count($array); $i++) :
                //on met le mot issu de la route dans le tableau
                array_push($arg, $array[$i]);
            endfor;
        endif;
        //on vérifie si le chemin ($finalPath) existe dans le tableau des routes prises en charge dans le MVC array_key("NomColonne",
        //tableau dans lequel chercher), cette méthode renvoie true si existe ou false 
        if (array_key_exists($finalPath, $this->routes)) {
            $this->routes[$finalPath]($arg);
        } else {
            require_once('view/adminView/404.php');
        }
    }

    //les getter et setter
}