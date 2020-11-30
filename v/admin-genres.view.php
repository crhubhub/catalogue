<a href="?page=add-genre">Ajouter une Catégorie</a><br>
<?php
$itemNb = 0;
while ($data = $genres->fetch()) {
    $itemNb++;
    ?>
    <br>
    <div>
    <div>
        (<?= $itemNb ?>)
        <?= $data['name'] ?> ( de <?= $data['from_year'] ?> à
        <?php if ($data['to_year'] >= 2020) : ?>
            à nos jours
        <?php else : ?>
            <?= $data['to_year'] ?>
        <?php endif ?>)<br>
        <p><?=$data['about']?></p>
        <em>Pays : <?= $data['native_country'] ?></em>
    </div>

    <div>
        <button><em><a href="?page=genre&id=<?= $data['id'] ?>">Modifier</a></em></button>
        <form method="POST" action="?page=delete-genre&id=<?= $data['id'] ?>"
              onSubmit="return confirm('Voulez-vous vraiment supprimer la Catégorie \n\n <?= strtoupper($data['name']); ?> \n\n ???');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
    </div>
    <br>
    <?php
}
$genres->closeCursor();
$pageTitle = 'Catégories';
$h2 = 'Gestion des Catégories';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';




