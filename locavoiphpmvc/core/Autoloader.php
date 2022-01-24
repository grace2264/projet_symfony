<?php

namespace Locavoiphpmvc;

class Autoloader
{   //la fonction register permet de sauvegarder notre autoloader auprès du moteur PHP
    // cette méthode enregistre le fait que si notre code appelle une class, lors d'une instanciation de controleur par exemple, la méthode autoload est automatiquement lancée
    static function register():void
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    // la fct remplace le namespace de la class chargée et le remplace par le vrai chemin (physique) d'accés à la class

    static function autoload($className):void
    {
        //avec une condition on vérifie si on traite un controleur ou bien un modèle
        if(strpos($className, '\Controller')):
            //on remplace le nom du namespace par rien pour isoler le nom
            $className = str_replace('Locavoiphpmvc\\Controller\\','',$className);
            //on déclanche un require de ce fichier dans la structure physique du projet
            require SITE_ROOT . '\controller\\' . $className . '.php';
            elseif(strpos($className, '\Model')):
                $className = str_replace('Locavoiphpmvc\\Model\\', '', $className);
                require SITE_ROOT . '\model\\' . $className . '.php';
            endif;
    }


}