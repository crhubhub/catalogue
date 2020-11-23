<?php
$itemNb = 0;
?>
    <div style="">
        <div>
            <h3 class="h-dark">Notre catalogue :</h3>
        </div>
        <form action="get">
            <select name="category">
                <option value=""></option>
            </select>
        </form>
        <div id="items-box">
        </div>

        <?php
        $itemNb = 0;
        while ($data = $items->fetch()) {
            $itemNb++;
            ?>
            <div class="dark-card">
                <p>
                    (Objet <?= $itemNb ?>)
                    <?= $data['name'] ?> (<?= $data['year'] ?>, <?= $data['country'] ?>)
                    <br>
                    <em><a href="?page=item&reference=<?= $data['reference'] ?>">+ détails</a></em>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
<?php
$items->closeCursor();
$pageTitle = 'AD - Articles';
$h2 = 'Liste des articles disponibles (' . $items->rowCount() . ')';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';