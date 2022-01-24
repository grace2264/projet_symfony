Avant tout installez l'extension BETTER COMMENTS dans Visual Studio pour avoir des commentaires en couleur!

Pour utiliser ce mini crud, vous devez importer la base de donnée dans PhpMyAdmin.
le fichier doranco.sql se trouve dans le dossier config.
Dans PhpMyAdmin ne selectionnez pas de base de donnée.
Allez directement dans l'onglet IMPORTER, sur le bandeau supérieur.
Importer le fichier doranco.sql en cliquant sur parcourir.
Puis appuyez sur executer en bas à droite.
Une nouvelle base qui se nomme doranco devrait être créée.
Elle contient une table Personne, avec 4 champs (id_personne, nom, prenom, mot_de_passe).

Allez ensuite modifier config/bdd.php pour modifier le mot de passe si besoin.

Le fichier contient un minimun de style pour ne pas encombrer le code et parfaitement comprendre le CRUD.
Chaque page est commenté, lisez chacun des commentaires des fichiers PHP en même temps que vous êtes sur le navigateur.

Ce mini projet implemente un CRUD en utilisant la POO et le design Pattern MVC.