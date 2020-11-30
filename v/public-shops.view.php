<div id="shop-box">
    <h3 class="h-dark">Nos Magasins :</h3>
    <div id="mapid" style="z-index: 0;width: 60vw; margin: 5em auto; height: 60vw; border: 1px saddlebrown solid"></div>

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
            <img style="width:29vw; height: 18vw"
                 src="img/shop/<?= $data['image'] ?? 'default_shop.jpg' ?>" alt="">
        </div>
        <h5 style="color: #FFFFFF">Les articles disponibles :</h5>
        <div style=" margin-top:1em; height: 7vw; display: flex; justify-content: flex-start;  border: /*#222222 1px solid*/">
            <img src="img/item/default_item.jpg" class="img-in-banderole" alt="">
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

    window.onload = function () {
        console.log('page chargée')
        var mymap = L.map('mapid').setView([50.82, 4.37], 13);

        var tileStreets = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiY2xvNzM4NzciLCJhIjoiY2tpNTFqcmEwM2d4MTJ5cDVhbjBqOW02NyJ9.rLidEZcblBsL4WqKDO7ByA'
        })
        tileStreets.addTo(mymap);

        var marker = L.marker([50.82, 4.37]).addTo(mymap);
    }
</script>
<?php
$shops->closeCursor();
$pageTitle = 'AD - Magasins';
$h2 = 'Nos magasins :';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';