<?php
while ($data = $items->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= $data['name'] ?>
            <em>le <?= $data['phone'] ?></em>
        </h3>

        <p>
            <?= $data['latitude'] ?>
            <br />
            <em><a href="#">Commentaires</a></em>
        </p>
    </div>
    <?php
}
$items->closeCursor();
$pageTitle = 'Articles';
$h2 = 'Gestion des Articles';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';
