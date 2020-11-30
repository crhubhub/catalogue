<a href="?page=add-item">Ajouter un article</a><br>
<?php
$itemNb = 0;
while ($data = $items->fetch()) {
    $itemNb++;
    ?>
    <br>
    <div>
    <div>
        (<?= $itemNb ?>)
        <?= $data['name'] ?> ( de <?= $data['name'] ?> à
        <?php if ($data['name'] >= 2020) : ?>
            à nos jours
        <?php else : ?>
            <?= $data['name'] ?>
        <?php endif ?>)<br>
        <p><?=$data['name']?></p>
        <em>Pays : <?= $data['name'] ?></em>
    </div>

    <div>
        <button><em><a href="?page=item&id=<?= $data['id'] ?>">Modifier</a></em></button>
        <form method="POST" action="?page=delete-item&id=<?= $data['id'] ?>"
              onSubmit="return confirm('Voulez-vous vraiment supprimer cet article \n\n <?= strtoupper($data['name']); ?> \n\n ???');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
    </div>
    <br>
    <?php
}
$items->closeCursor();
$pageTitle = 'AD - Articles';
$h2 = 'Gestion des articles';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

