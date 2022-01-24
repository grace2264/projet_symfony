<?php

namespace Locavoiphpmvc\Controller;

use mysqli;
use PDO;

class ConnexionController
{
    //Propriétés
    private $host;
    private $user;
    private $password;
    private $bdd;
    public $connexion;

    //constructeur
    public function __construct()
    {
        //on détermine le jeu de variables de connexion a utiliser d'après la configuration (!IS_ONLINE)
        if(!IS_ONLINE):
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->bdd = "locavoiphpmvc";
        else:
            $this->host = "";
            $this->user = "";
            $this->password = "";
            $this->bdd = "";
        endif;
        //Connexion au serveur (en PDO)
        //si la variable de connexion n'est pas définie
        if(!isset($this->connexion)):
            try
            {
                $this->connexion = new PDO("mysql:host=$this->host; dbname=$this->bdd", $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->connexion->query("SET NAMES 'utf8'");
            }
            catch(\PDOException $e)
            {
                throw new \PDOException($e->getMessage(), (int)$e->getCode() );
            }
        endif;
        //on renvoi la connexion
        return $this->connexion;

    }
}