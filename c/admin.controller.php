<?php

require('../m/admin.model.php');


if (isset($url)) {
    var_dump($url);
}

//remplacer par switch ?

$countedShops = countShops();
$countedItems = countItems();
$countedGenres = countGenres();
if ((empty($_GET['page'])) || ($_GET['page'] === 'home')) {
    require('../v/admin-home.view.php');
} else {


    if (($_GET['page']) === 'shops') {
        $shops = getShops();
        require('../v/admin-shops.view.php');
    }
    if (($_GET['page']) === 'shop') {
        $shop = getShopById($_GET['id']);
        require('../v/admin-shop.view.php');
    }
    if (($_GET['page']) === 'modifyShop') {
        $shop = modifyShopById($_POST['id'], $_POST['name'], $_POST['street'], $_POST['number_street'], $_POST['postal'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['vta'], $_POST['latitude'], $_POST['longitude']);
        echo 'les données ont été mises à jour<br>';
        echo '<a href="?shops">Retour à l\'accueil</a>';
        require('../v/admin-shop.view.php');
    }
    if (($_GET['page']) === 'delete-shop') {
        $shop = deleteShop($_GET['id']);
        $_GET['page'] = 'shops';
        echo 'Magasin supprimé<br>';
        echo '<a href="?page=shops">Retour aux magasins</a>';

    }
    if (($_GET['page']) === 'add-shop') {
        if (isset($_POST['name'])) {
            $shop = addShop($_POST['name'], $_POST['street'], $_POST['number_street'], $_POST['postal'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['vta']);
            echo 'Magasin ajouté<br>';
        }
        require('../v/admin-add_shop.view.php');
    }

    if (($_GET['page']) === 'genres') {
        $genres = getgenres();
        require('../v/admin-genres.view.php');
    }
    if (($_GET['page']) === 'genre') {
        $genre = getShopById($_GET['id']);
        require('../v/admin-genre.view.php');
    }
    if (($_GET['page']) === 'items') {
        $shops = getShops();
        require('../v/admin-items.view.php');
    }
    if (($_GET['page']) === 'item') {
        $shop = getShopById($_GET['id']);
        require('../v/admin-item.view.php');
    }
    if (($_GET['page']) === 'end-session') {
        session_destroy();
        header('location: ../public');
    }

}

