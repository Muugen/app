<?php ob_start();?>

<div class="container">
     <div class="row">
         <div class="col-6 offset-3">
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <label for="">Identifiant</label>
                 <input type="text" class="form-control"  value="<?=$cat->getId_cat();?>" readonly>
                 <label for="categorie">Catégorie</label>
                 <input type="text" id="categorie" name="categorie" class="form-control" value="<?=$cat->getNom_cat();?>">
                <button type="submit" class="btn btn-warning col-12 mt-2" name="soumis">Modifier</button>
                </form>
         </div>
     </div>
 </div>

<?php

    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php')

?>