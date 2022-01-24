<?php


        try
        {
            $database= new PDO('mysql:host=localhost;dbname=locationvoiture','root','');
            $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            die('ERROR: '.$e->getMessage());
        }
            $results = $database->query('SELECT tab_voitures FROM table');

            while($row = $results->fetch())
            {
                echo $row['tab_voitures'].'<br>';
            }

?>