<?php

require("config/commandes.php");

$mesProduits=afficher();

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <title>Site Location _formulaire_Admin</title>
</head>
<body>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"><.
            <form>
       <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Titre de l'image</label>
          <input type="name" class="form-control"  require>
       </div> 
       
       <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
         <input type="text" class="form-control"  require>
      </div> 

      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Prix</label>
         <input type="number" class="form-control"  require>
      </div> 

      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Prix</label>
         <textarea class="form-control" require></textarea>
      </div> 


      <button type="submit" class="btn btn-primary">Ajouter un nouveau produit</button> 
    </form>
        
            </div></div></div>
</body>
</html>
    
<?php

if()

?>
</body>
</html> 

<?php

   if(isset($_POST['valider']))
   {
      if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['desc']) AND isset($_POST['prix']))
      {
      if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['desc']) AND !empty($_POST['prix'])
      )
      }
         $image = htmlspecialchars(strip_tags($_POST['image']));
         $nom = htmlspecialchars(strip_tags($_POST['nom']));
         $desc = htmlspecialchars(strip_tags($_POST['desc']));
         $prix = htmlspecialchars(strip_tags($_POST['prix']));

         ajouter($nom, $desc,$image, $prix)

      }
   }

?>