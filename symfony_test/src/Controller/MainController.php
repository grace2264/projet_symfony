<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    private $tableau_articles = [
        1 => [
            'titre' => "Vive la Bretagne",
            "contenu" => "La Bretagne c'est magnifique",
            "id" => 1
        ],
        2 => [
            'titre' => "Vive la Corse",
            "contenu" => "La Corse c'est magnifique",
            "id" => 2
        ],
        3 => [
            'titre' => "Vive la Normandie",
            "contenu" => "La Normandie c'est magnifique",
            "id" => 3
        ],

    ];

    private $tableau_categorie = [
        1 => [
            "nom" => "Politique",
            "description" => "Tous savoir sur la politique",
            "id" => 1
        ],
        2 => [
            "nom" => "Economie",
            "description" => "Tous savoir sur l'économie",
            "id" => 2
        ],
        3 => [
            "nom" => "Technologie",
            "description" => "Tous savoir sur la technologie",
            "id" => 3
        ],
        4 => [
            "nom" => "Obi-wan Kenobi",
            "description" => "Tous savoir sur Obi-wan Kenobi",
            "id" => 4
        ]
    ];
    

    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        var_dump('Bonjour');
        die;
    }

    // Créer une route qui affiche le message "Bienvenue" sur le site de la mort qui tue.

    /**
     * @Route("/welcome", name="welcome")
     */
    public function welcome()
    {
        var_dump('Bienvenue sur site  de la mort qui tue.');
        die;
    }


    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return new Response("Test de Response");
    }

    // faire une route qui affichera une réponse qui dira "Mentions Légales du site"

    
     // Classe Response permet de créer une réponse à la fonction

     /**
      * @Route("/Legal", name="Legal")
      */
     
    public function legal()
    {
        return new Response("Mentions Légales du site");
    }

    /**          // Wildcard : qui permet de mettre un paramètre à la route et
     *          //  personnaliser le contenu de la page
     * @Route("/number/{id}", name="number")
     */
    public function number($id)
    {
        return new Response($id);
    }

    // créer une route qui va afficher le contenu d'un article en particulier
    // grâce à une wildcard

    /**
     * @Route("/article/{id}", name="article")
     */
    public function articleShow($id)
    {
        return new Response($this->tableau_articles[$id]['titre'] . "<br>" . $this->tableau_articles[$id]['contenu']);
    }

    // créer une route poker avec une wildcard qui correspond à l'âge
    // si l'âge est inférieur à 18 la réponse est "accès interdit"
    // si l'âge est supérieur ou égale à 18 la réponse est "accès autorisé"

    /**
     * @Route("/poker/{age}", name="poker")
     */
    public function poker($age)
    {
        if ($age < 18) {
            return new Response("Accès interdit");
        } else {
            return new Response("Accès autorisé");
        }

    }


        /**
         * @Route("/vue", name="vue")
         */
        public function vue()
        {
            return $this->render("vue.html.twig");
        }

        // refaire la fonction poker mais remplacer new Response par render
        // pour afficher une vue avec du texte dans un h1
        // et avec une image.



        /**
         * @Route("/articles", name="article_List")
         */
        public function articleList()
        {
            $articles = $this->tableau_articles;

            return $this->render("articles.html.twig" , ['articles' => $articles]);
        }


        // créer une route qui affiche dans un fichier twig toutes
        // les catégories (nom et description)

        /**
         * @Route("/categories", name="categories_List")
         */
        public function categoriesList()
        {
            $categories = $this->tableau_categorie; 
            
            return $this->render("categories.html.twig", ['categories' => $categories]);
        }

        // créer une route qui affiche une catégorie grâce à une wildcard
        // on affiche le nom et la description de la catégorie

       
}

