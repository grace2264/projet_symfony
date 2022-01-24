<?php require_once('../controller/articleController.php'); ?>
<?php require_once('../template/header.inc.php'); ?> 
   <section>
    <form method="POST">
      <label>Product Name : </label>
      <input type="text" name="product_name" placeholder="product name">
      <label>Content : </label>
      <input type="text" name="content" placeholder="content">
      <label>Category : </label>
      <select name="category">
        <option>select a category</option>
        <option value="f">Femme</option>
        <option value="h">Homme</option>
      </select>
      <label>URL Picture : </label>
      <input type="text" name="url_picture" placeholder="url picture">
      <label>Price : </label>
      <input type="number" name="price" placeholder="price">
      <button name="valider">Valider</button>
    </form>
  </section>
