<?php

require('../m/admin.model.php');


if (isset($url)) {
    var_dump($url);
}

//remplacer par switch ?


if (empty($_GET['page'])) {
    $countedShops = countShops();
    $countedItems = countItems();
    $countedGenres = countGenres();
    require('../v/admin-home.view.php');
} else  {


    if (($_GET['page']) === 'shops') {
        $shops = getShops();
        require('../v/admin-shops.view.php');
    }
    if (($_GET['page']) === 'shop') {
        $shop = getShopById($_GET['id']);
        require('../v/admin-shop.view.php');
    }
    if (($_GET['page']) === 'end-session') {
        session_destroy();
        header('location: ../public');
    }
    if (($_GET['page']) === 'modifyShop') {

//        TODO: modifier requete SQL dans modifyShopById pour modification
        $shop = modifyShopById($_GET['id'], $_POST['name'], $_POST['phone'], $_POST['city']);
        echo '<a href="?shops">Voir les shops</a>';
        echo 'les données ont été mises à jour';
        require('../v/admin-shop.view.php');
    }
//if ('wantToSeeCrudForItems_url') {
//    $items = getItems();
//    require('../v/admin-items.view.php');
//}


//$shop = getShopById(1);
//require('../v/admin-shop.view.php');
}


