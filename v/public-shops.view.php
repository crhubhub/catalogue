<div id="shop-box">
    <h3 class="h-dark">Nos Magasins :</h3>
    <?php
    while ($data = $shops->fetch()) {
        ?>
        <div class="one-shop">
            <h4>
                <?= $data['name'] ?>
                <em><br>phone : <?= $data['phone'] ?></em>
            </h4>

            <p>
                <?= $data['street_name'] ?>, <?= $data['street_number'] ?>.<br><?= $data['city'] ?>
                <br/>
                <em><a href="">Appeller</a></em>

            </p>
        </div>
        <?php
    }
    ?>
</div>
<?php
$shops->closeCursor();
$pageTitle = 'AD - Magasins';
$h2 = 'Nos magasins :';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';