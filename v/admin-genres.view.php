<a href="?page=add-genre">Ajouter une Catégorie</a>
<?php
$itemNb = 0;
while ($data = $genres->fetch()) {
    $itemNb++;
    ?>
    <div>
        <p>
            (<?= $itemNb ?>)
            <?= $data['name'] ?> ( de <?= $data['from_year'] ?> à
            <?php if ($data['to_year'] >= 2020) : ?>
                à nos jours
            <?php else : ?>
                <?= $data['to_year'] ?>
            <?php endif ?>)<br>
            <!--            <em><a href="--><?//=$data['native_country']?><!--">vers les articles</a></em>-->
            <em>Pays : <?= $data['native_country'] ?></em>
        </p>

        <p>
            <button><em><a href="?page=genre&id=<?= $data['id'] ?>">Modifier</a></em></button>
        <form method="POST" action="?page=delete-genre&id=<?= $data['id'] ?>"
              onSubmit="return confirm('Voulez-vous vraiment supprimer la Catégorie \n\n <?= strtoupper($data['name']); ?> \n\n ???');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
        </p>
    </div>
    <?php
}
$genres->closeCursor();
$pageTitle = 'Magasins';
$h2 = 'Gestion des Magasins';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';




