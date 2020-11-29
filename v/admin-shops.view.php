<?php
while ($data = $shops->fetch())
{
    ?>
    <div>
        <h3>
            <?= $data['name'] ?>
            <em><br>phone : <?= $data['phone'] ?></em>
        </h3>

        <p>
            <?= $data['street_name']?>, <?= $data['street_number']?>.<br><?= $data['city']?>
            <br />
            <em><a href="?page=shop&id=<?=$data['id']?>">Modifier</a></em>
            <em><a href="#">Supprimer</a></em>
        </p>
    </div>
    <?php } ?>
    <a href="?page=add-shop">Ajouter un Magasin</a>
<?php
$shops->closeCursor();
$pageTitle = 'Magasins';
$h2 = 'Gestion des Magasins';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

