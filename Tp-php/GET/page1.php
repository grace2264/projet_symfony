<!-- // Faites une page1 qui pointe vers la page2
// article = jean, couleur = bleu, prix = 42
Envoyer des variables via l'url : 
article = jean
couleur = bleu
prix = 42

Dans la page2
Afficher grace au GET la valeur des variables reçu par l'url seulement si les
variables existent

-->
<a href="page2.php">lien vers la page2</a>
<a href="page2.php?param=<?php echo $valeur;?>">Lien</a>

// ou echo '<a href="page2.php?param='.$valeur.'">Lien</a>';

<a href="page2.php?article=jean&couleur=bleu&prix=42">lien vers la page2</a>