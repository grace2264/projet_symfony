<?php

function inclusionAutomatique($nomDeLaClass)
{
    include_once($nomDeLaClass . '.php' );
                // include_once(A.php)
    echo "on passe dans inclusionAutomatique()";
    echo "require($nomDeLaClass.php);<br>";
}

spl_autoload_register('inclusionAutomatique');

/*******
 * spl_autoload_register est une fonction predefinie qui permet d'executer une fonction lorsque
 * l'interpreteur voit passer un "new"  dans le code
 * le mot à côté du new sera recupéré et transmis automatiquement à la fonction
 * inclusionAutomatique()
 * - Il est indispensable de respecter une convention de nommage
 * 
 * 
 */