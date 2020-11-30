<?php

require('../m/admin.model.php');
$shopDir = "img/shop/";
$shopDefaultImageName = 'default_shop.jpg';
$itemDir = "img/item/";
$itemDefaultImageName = 'default_item.jpg';
$countedShops = countShops();
$countedItems = countItems();
$countedGenres = countGenres();

if ((empty($_GET['page'])) || ($_GET['page'] === 'home')) {
    require('../v/admin-home.view.php');
} else {

    /*******************************************************/
    /*                      ARTICLES                        /
    /*******************************************************/


    if (($_GET['page']) === 'items') {
        $items = getItems();
        require('../v/admin-items.view.php');
    }

    if (($_GET['page']) === 'item') {
        $item = getItemById($_GET['id']);
        require('../v/admin-item.view.php');
    }


    if (($_GET['page']) === 'end-session') {
        session_destroy();
        header('location: ../public');
    }

    if (($_GET['page']) === 'modifyItem') {
        $item = modifyItemById($_POST['id'], $_POST['name'], $_POST['reference'], $_POST['year'], $_POST['country'], $_POST['price'], $_POST['proof_of_tracing'], $_POST['type'], $_POST['material'], $_POST['description'], $_POST['height'], $_POST['width'], $_POST['depth'], $_POST['good_condition'], $_POST['delivery_possible'], $_POST['shop_id'], $_POST['seller_id']);
        echo 'les données ont été mises à jour<br>';
        echo '<a href="?page=items">Retour aux Articles</a>';
        require('../v/admin-item.view.php');
    }
    if (($_GET['page']) === 'delete-item') {
        $item = deleteItem($_GET['id']);
        echo 'Article supprimé<br>';
        echo '<a href="?page=items">Retour aux Articles</a>';

    }
    if (($_GET['page']) === 'add-item') {
        if (isset($_POST['name'])) {
            $item = addItem($_POST['name'], $_POST['reference'], $_POST['year'], $_POST['country'], $_POST['price'], $_POST['proof_of_tracing'], $_POST['type'], $_POST['material'], $_POST['description'], $_POST['height'], $_POST['width'], $_POST['depth'], $_POST['good_condition'], $_POST['delivery_possible'], $_POST['shop_id'], $_POST['seller_id']);
            echo 'Article ajouté<br>';
            echo '<a href="?page=items">Retour aux Articles</a>';
        }
        require('../v/admin-add_item.view.php');
    }
}

/********************************************************/
/*                     CATEGORIES                        /
/********************************************************/
if (($_GET['page']) === 'genres') {
    $genres = getgenres();
    require('../v/admin-genres.view.php');
}
if (($_GET['page']) === 'genre') {
    $genre = getGenreById($_GET['id']);
    require('../v/admin-genre.view.php');
}
if (($_GET['page']) === 'modifyGenre') {
    $genre = modifyGenreById($_POST['id'], $_POST['name'], $_POST['native_country'], $_POST['from_year'], $_POST['to_year'], $_POST['about']);
    echo 'les données ont été mises à jour<br>';
    echo '<a href="?genres">Retour aux Catégories</a>';
    require('../v/admin-genre.view.php');
}
if (($_GET['page']) === 'delete-genre') {
    $genre = deleteShop($_GET['id']);
    echo 'Catégorie supprimés<br>';
    echo '<a href="?page=genres">Retour aux Catégories</a>';

}
if (($_GET['page']) === 'add-genre') {
    if (isset($_POST['name'])) {
        $genre = addGenre($_POST['name'], $_POST['native_country'], $_POST['from_year'], $_POST['to_year'], $_POST['about']);
        echo 'Catégorie ajoutée<br>';
    }
    require('../v/admin-add_genre.view.php');
}

/*******************************************************/
/*                      MAGASINS                        /
/*******************************************************/
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
    if (isset($_FILES['image'])) {
        try {
            $shopDefaultImageName = addImageToNewShop($_FILES['image'], $dir);
        } catch (Exception $e) {
        }
    }else {
        $shopDefaultImageName = 'def_shop.jpg';
        }


    if (isset($_POST['name'])) {
        $shop = addShop($_POST['name'], $_POST['street'], $_POST['number_street'], $_POST['postal'], $_POST['city'], $_POST['country'], $_POST['phone'], $_POST['vta'], $_POST['latitude'], $_POST['longitude'], $shopDefaultImageName);
        echo 'Magasin ajouté<br>';
    }
    require('../v/admin-add_shop.view.php');
}






