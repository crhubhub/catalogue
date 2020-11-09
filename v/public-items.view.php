<?php
$itemNb = 0;
while ($data = $items->fetch())
{
    $itemNb ++;
    ?>
    <div>
        <p>
            (Objet <?=$itemNb?>)
            <?= $data['name'] ?> (<?=$data['year']?>, <?=$data['country']?>)
            <br>
            <em><a href="<?=$data['reference']?>">+ détails</a></em>
        </p>
    </div>
    <?php
}
$items->closeCursor();
$pageTitle = 'Articles';
$h2 = 'Liste des articles disponibles';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';