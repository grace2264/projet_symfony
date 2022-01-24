<html>
  <head>
    <title>insertion de données</title>
  </head>
<body>
<div>
<form name="insertion" action="interface_insertion.php" method="POST" enctype="multipart/form-data"  >
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>Nom de produit</td>
      <td><input type="text" name="Nom_de_produit"></td>
    </tr>
    <tr align="center">
      <td>Prix</td>
      <td><input type="text" name="prix"></td>
    </tr>
    <tr align="center">
      <td>Description</td>
      <td><textarea type="text" name="description"></textarea></td>
    </tr>
    <tr align="center">
      <td>Inserer image</td>
      <td><input type="file" name="img"></td>
    </tr>
   
    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer" name="inserer"></td>
    </tr>
 
  </table>
</form>
</div>


</body>
</html>

<?php


  


//connexion à la BDD
require_once "cnxBdd.php";
 
 if(isset($_POST['inserer'])) {
if (isset($_POST['Nom_de_produit']) AND isset($_POST['prix']) AND isset($_POST['description']) AND isset($_FILES['img']['tmp_name'] )) 

 extract($_POST);
 extract($_FILES);
 if (!empty($Nom_de_produit) && !empty($prix) && !empty($description) && !empty($img))
 
 
{
$req = $bdd->prepare("INSERT INTO produits( Nom_de_produit, prix, description,img ) VALUES(?,?,?,?)"); 
     
$req->execute(array(
 $_POST['Nom_de_produit'] ,
 $_POST['prix'],
 $_POST['description'],
 $_FILES['img']['tmp_name']
 
 ));
    echo 'Le produit a bien été ajouté !';
}
 else 
 {
  echo "Vous n'aver pas remplit tous les champs ";
  } 
 }
?>


<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>