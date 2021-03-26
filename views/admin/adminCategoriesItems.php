<?php ob_start();?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th colspan="2" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($allCat as $cat){

            
        ?>
            <tr>
                <td><?=$cat->getId_cat();?></td>
                <td><?=$cat->getNom_cat();?></td>
                <td class="text-center">
                    <a class="btn btn-success" href="index.php?action=edit_cat&id=<?=$cat->getId_cat();?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-danger" href="index.php?action=delete_cat&id=<?=$cat->getId_cat();?>" onclick="return confirm('Êtes vous sûr de vouloir supprimer')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>       
        </tbody>
    </table>

<?php

    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php')

?>