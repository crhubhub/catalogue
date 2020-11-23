<div id="shop-box">
    <h3 class="h-dark">Nos Magasins :</h3>
    <?php
    while ($data = $shops->fetch()) {
    ?>
    <div class="dark-card one-shop">
        <div>
            <div>
                <h4>
                    <a href="" class="gold-txt"><?= $data['name'] ?></a>
                    <br><em><?= $data['street_name'] ?>, <?= $data['street_number'] ?><br><?= $data['city'] ?>
                </h4>

                <p>
                    <br>
                    <br>
                    <a onclick="call(0o32<?= (int)($data['phone']) ?>)" class="gold-txt" style="font-size: 1.3em">+32
                        (0) <?= (int)($data['phone']) ?></a>
                <h4 style="opacity: 0.7; font-size: 1.1em"><em>tva : <?= $data['vta'] ?></em></h4>
            </div>
            <div style="width: 35vw; height: 22vw; background: #EBCFB2">

            </div>
        </div>
        <div style=" margin-top:1em; height: 7vw; display: flex; justify-content: flex-start;  border: /*#222222 1px solid*/">
            <img src="img/samples/bocaux.jpg" class="img-in-banderole" alt=""><img src="img/samples/bocaux.jpg" class="img-in-banderole" alt=""><img src="img/samples/bocaux.jpg" alt="" class="img-in-banderole">  ici      <- images d'articles dispos
        </div>
    </div>
</div>
<?php
}
?>
<script>
    function call($number) {
        window.open('tel:$number');
    }
</script>
<?php
$shops->closeCursor();
$pageTitle = 'AD - Magasins';
$h2 = 'Nos magasins :';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';