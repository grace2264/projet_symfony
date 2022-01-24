<?php
    include 'assets/inc/front/head.inc.php';
    ?>
        <title>HomepageController</title>

    <main>
        <table class="table table-light">
           <thead class="thead-light">
               <tr>
                   <th>MARQUE</th>
                   <th>MODELE</th>
                   <th>COULEUR</th>
                   <th>IMAGE</th>
               </tr>
           </thead>
           <tbody>
               <?php
               foreach($voiture as $voitures);
               ?>
               <tr>
                   <!-- = correspond à php + echo -->
                   <td><?php $voiture->marque ?></td>
                   <td><?php $voiture->modele ?></td></td>
                   <td><?php $voiture->couleur ?></td></td>
               </tr>
               <?php
                    endforeach;
                ?>
           </tbody>
       </table>
       <form action="" method="post" enctype="multipart/form-data">
           <input
           <button type="submit" >enregistrer</button>
       </form>
    </main>
<?php
    include 'assets/inc/front/footer.inc.php';
?>
</html>




