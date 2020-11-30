<div style="">
    <div>
        <h3 class="h-dark">Notre catalogue :</h3>
    </div>
    <form action="" method="post" class="box-x" style="justify-content: space-around">
        <div>
            <label>
                <p>Catégorie :</p>
                <select name="public-category">

                    <option value="Choisissez une catégorie"
                            style="background: lightgreen"><?= $_POST['public-category'] ?? " - Make a choice - " ?></option>
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
        if (isset($_POST['min'])) {
            $min = ($_POST['min']);
            $max = ($_POST['max']);
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
            <label for="promo">
                <input name="promo" type="checkbox" style="justify-content: space-between">
                en promotion
            </label>
            <label for="new">
                <input name="new" type="checkbox" style="justify-content: flex-end">
                nouveauté
            </label>
        </div>

        <div style="display: flex; flex-direction: column">
            <button type="submit" class="button1">Valider</button>
            <a href="?page=catalog" class="button2">Reset</a>
        </div>

    </form>


    <!--                ARTICLES CI-DESSOUS                   -->
    <?php if ($totalItems == 0) : ?>
        <h4 style="background: darkorange; width: 60%; text-align: center; margin: auto">Aucun article trouvé</h4>
    <?php endif ?>
</div>
<aside id="items-box">
    <?php
    $itemNb = 0;
    while ($data = $items->fetch()) {
        $itemNb++;
        ?>
        <script>var promo = 0;</script>
        <div>


            <div class="box-x promo">
                <div>
                    <!--            tri, promotions-->
                    <?php if ((isset($data['end_date']) && ($data['end_date'] != null))) : ?>
                    <!--                    --><?php //if (0) :?>
                    <!--    AVEC date de fin-->

                    <div class="promo-around">
                        <div class="promo-display">
                            <h4>-20%</h4>
                            <script>
                                promo = 30;
                            </script>
                        </div>
                        <div class="promo-details">
                            <h6>jusqu'au <?= $data['end_date'] ?></h6>
                        </div>
                    </div>
                </div>
                <!--                --><?php //elseif ) : ?>
                <?php elseif (isset($data['end_date']) && ($data['end_date'] == null)) : ?>
                <!--                --><?php //elseif (0) : ?>
                <!--     SANS date de fin -->

                <div class="promo-around">
                    <div class="promo-display">
                        <h4><?= $data['end_date'] ?></h4>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <!--                SANS PROMO              -->
            <div class="promo-around">
                <h4>ELSE:</h4>
            </div>
        </div>
    <?php endif ?>
        </div>

        <div class="dark-card item-card">
<div>
            <h4><em><?= $itemNb ?></em>. <?= $data['name'] ?> (<?= $data['country'] ?>, <?= $data['year'] ?>)
            </h4>
            <h5>" <em><?= $data['description'] ?></em> "</h5>
            <h4 class="<?php if(isset($data['start_date'])) :?>
                red-price
<?php endif;?>"><?= $data['price'] ?> <em>€</em>
                <?php if(isset($data['start_date'])) :?>


                <h4 class="new-price-tag">Nouveau prix :
                <script>
                    if (promo != 0) {
                        var newPrice = (<?= $data['price'] ?> * 0.8);
                        document.write(newPrice);
                    }
                </script> €</h4>
                <?php endif;?>
            </h4>
            <h4><?= $data['type'] ?> <span style="font-weight: lighter">/ Art Culinaire cru</span></h4>
            <h4><em>(REF: <?= $data['reference'] ?>) <a class="gold-txt"
                                                        href="?page=item&reference=<?= $data['reference'] ?>"><br>more
                        détails</a></em></h4>
</div>
            <img style="width: 20vw; height: 14vw" src="img/item/default_item.jpg" alt="">
        </div>
        </div>
        </div>
        <?php
    }
    ?>
</aside>
<?php if($totalPages > 1) :?>
<div style="text-align: center; color: #FFFFFF; margin: 1em">Page actuelle : <?=$currentPage?></div>

    <div style="text-align: center">
        <?php
        for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <a><?= $i ?></a>
            <?php else : ?>
                <a style="background: #EBCFB2; border-radius: 5em; color: #FFFFFF; padding: 0 0.5em; margin: 0.5em" href="?page=<?= $_GET['page'] ?>&pagi=<?= $i ?>"><?= $i ?></a>
            <?php endif ?>
        <?php endfor ?>
    </div>

<?php endif?>

<?php
$items->closeCursor();
$pageTitle = 'AD - Articles';
$h2 = 'Liste des articles disponibles (' . $items->rowCount() . ')';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';