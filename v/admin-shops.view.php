<a href="?page=add-shop">Ajouter un Magasin</a>
<?php
while ($data = $shops->fetch()) {
    ?>
    <div>
        <h3>
            <?= $data['name'] ?>
            <em><br>phone : <?= $data['phone'] ?></em>
        </h3>

        <p>
            <?= $data['street_name'] ?>, <?= $data['street_number'] ?>.<br><?= $data['city'] ?>
            <br/>
            <button><em><a href="?page=shop&id=<?= $data['id'] ?>">Modifier</a></em></button>
        <form method="POST" action="?page=delete-shop&id=<?= $data['id'] ?>"
              onSubmit="return confirm('Voulez-vous vraiment supprimer le magasin \n\n <?=strtoupper($data['name']);?> \n\n ???');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>

        </p>
    </div>
<?php } ?>
<?php
$shops->closeCursor();
$pageTitle = 'Magasins';
$h2 = 'Gestion des Magasins';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

