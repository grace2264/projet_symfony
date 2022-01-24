<!----------------------- Arborescence 

  Arborescence
    Config (Folder)
      - bdd.php (file)
    Controller (Folder)
      - auth.php (file) (bonus)
      - article.php (file)
    View (Folder)
      - pageArticle.php (file)
    index.php

------------------------- BDD 
   Name BDD => Boutique

    Table Article
      product_id
      product_name VARCHAR(50)
      content TEXT
      category enum(f,h)
      path TEXT
      price DECIMAL
      is_active INT
      date

    Table Admin (bonus)
      admin_id
      pseudo
      password
      role INT OR enum("")

------------------------- SUJET    

  Créer une app qui permet d'enregistrer des produits (articles) pour une boutique de vêtement.
  Vous devriez avoir une page qui permettra de post (enregistrer) des produits (articles)
  Une page qui affiche les produits (articles) disponible.
 
------------------------- FUNCTION A IMPLEMENTER   

  POST (ajouter un article)
  GET (Récupérer les articles)
  DELETE (Supprimer un article)
  PUT (modifier un article) Bonus

------------------------- BONUS 

  Une page ou modal (bootstrap or tailwind css) de connexion (Bonus)
  Une page ou modal (bootstrap or tailwind css) d'inscription (Bonus)

  Template Header & Footer (Bonus)

  Une page qui donne un peu plus d'information sur un article que l'on sélectionne. (Bonus)
  Une page qui nous permet de modifier les informations d'un article sélectionné. (Bonus)

 -->