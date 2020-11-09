<?php
$itemNb = 0;
while ($data = $genres->fetch())
{
    $itemNb ++;
    ?>
    <div>
        <p>
            (<?=$itemNb?>)
            <?= $data['name'] ?> (de <?=$data['from_year']?> à <?=$data['to_year']?>) <!-- TODO: 'à nos jours' -->
            <br>
            <em><a href="<?=$data['native_country']?>">vers les articles</a></em>
        </p>
    </div>
    <?php
}
$genres->closeCursor();
$pageTitle = 'Catégories';
$h2 = 'Liste des catégories disponibles';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';