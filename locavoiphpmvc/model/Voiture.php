<?php
    namespace Locavoiphpmvc\Model;

use PDO;
use Locavoiphpmvc\Controller\ConnexionController;

class Voiture
{

        //propriétés
        //on déclare des propriétés privées corespondant aux colonnes de la table voiture dans la bdd
        private $id_voiture;
        private $modele;
        private $marque;
        private $couleur;
        private $image;
        //propriété conexion bdd
        private $cBdd;

        //constructeur
        public function __construct()
        {
            //instanciation de la classe ConnexionController
            $this->cBdd = new ConnexionController;
        }


        //méthodes
        //liste des voitures + CRUD
        //liste des voitures
        public function viewAllCars()
        {
            //1- écriture en langage SQL de la requête que l'on place dans une variable $sql
            $sql = 'SELECT * FROM voiture ';

            //2- préparation de la requête $sql avec les paramétres de connexion
            $query = $this->cBdd->connexion->prepare($sql);

            //3- execution de la requête
            $query->execute();

            //4- gestion du retour pour avoir une seule ligne par élément dans l'objet de retour
            $voitures = $query->fetchAll(PDO::FETCH_OBJ);

            //5- // 5- on retourne l'objet
            return $voitures;

        }


        //getters & setters


}