<?php
while ($data = $item->fetch())
{
    $title = $data['name'];
    ?>
    <?= $data['name'] ?> (<?=$data['year']?>, <?=$data['country']?>)
    <br>TODO: tout lister <br> <!--TODO: Tout lister-->
    référence : <?=$data['reference']?>
    <br>Cet article est <em>disponible</em><br><a href="">Contacter le magasin</a>
<?php
}
$item->closeCursor();
$pageTitle = 'Magasin';
$h2 = $title;
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';
