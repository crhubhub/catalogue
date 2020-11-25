<div style="">
    <div>
        <h3 class="h-dark">Notre catalogue :</h3>
    </div>
    <form action="" method="post" class="box-x" style="justify-content: space-between">
        <div>
            <label>
                <p>Catégorie :</p>
                <select name="public-category">

                    <option value="Choisissez une catégorie"><?=$_POST['categorie'] ?? "- Make a choice -"?></option>
                    <?php
                    while ($data = $genres->fetch()) {
                        ?>
                        <option value="<?= $data[0] ?>"><?= $data[0] ?></option>
                    <?php } ?>
                </select>
            </label>
        </div>

        <?php
        while ($data = $prices->fetch()) {
            $min = $data['min'];
            $max = $data['max'];
        }
        if(isset($_POST['min'])) {
            $min =  ($_POST['min']);
            $max =  ($_POST['max']);
        };
        $slice = (($max - $min) / 3);
        $step1 = ceil($min + $slice);
        $step2 = ceil($min + ($slice * 2));
        ?>
        <div>
            <p style="">prix minimum (<?= $min ?>€) :</p>
            <label for="min">
                <input type="range" name="min" class="slider" id="min" min="<?= $min ?>" max="<?= $max ?>"
                       value="<?= $min ?>">
            </label>
            <div class="box-x sliiide" style="justify-content: space-between">
                <div style="width: 1em; height: 1em">&#9650</div>
                <div style="width: 1em; height: 1em">&#9650</div>
                <div style="width: 1em; height: 1em">&#9650</div>
                <div style="width: 1em; height: 1em">&#9650</div>
            </div>
            <div class="box-x sliiide" style="justify-content: space-between">
                <div style="width: 1em; height: 1em"><?= $min ?></div>
                <div style="width: 1em; height: 1em">~<?= $step1 ?></div>
                <div style="width: 1em; height: 1em">~<?= $step2 ?></div>
                <div style="width: 1em; height: 1em">max</div>
            </div>
        </div>
        <div>
            <p style="">prix maximum (<?= $max ?>€) :</p>
            <label for="max">
                <input type="range" name="max" class="slider" id="max" min="<?= $min ?>" max="<?= $max ?>"
                       value="<?= $max ?>">
                <div class="box-x sliiide" style="justify-content: space-between">
                    <div style="width: 1em; height: 1em">&#9650</div>
                    <div style="width: 1em; height: 1em">&#9650</div>
                    <div style="width: 1em; height: 1em">&#9650</div>
                    <div style="width: 1em; height: 1em">&#9650</div>
                </div>
                <div class="box-x sliiide" style="justify-content: space-between">
                    <div style="width: 1em; height: 1em">mix</div>
                    <div style="width: 1em; height: 1em">~<?= $step1 ?></div>
                    <div style="width: 1em; height: 1em">~<?= $step2 ?></div>
                    <div style="width: 1em; height: 1em"><?= $max ?></div>
                </div>
        </div>
        <div style="display: flex; flex-direction: column">
            <button type="submit" class="button1">Valider</button>
            <a href="?page=catalog" class="button2">Reset</a>
        </div>

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