<?php

require('../m/public.model.php');

if (isset($_POST['public-category'])) {
    $items = getItemsByDetails($_POST['public-category'], $_POST['min'], $_POST['max']);
    $totalItems = getItemsByDetails($_POST['public-category'], $_POST['min'], $_POST['max'])->rowCount();
    $genres = getGenres();
    $prices = getRadicalsPrices();
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-catalog.view.php';
    exit;
}
if (isset($url)) {
    var_dump($url);
}

//remplacer par switch ?
if ((empty($_GET['page'])) || ($_GET['page'] === 'home')) {
//    $countedShops = countShops();
    require '../v/public-home.view.php';
} else {
//    if($_GET['page'] === 'login') {
//
//        if (isset($_POST['pseudo']) && isset($_POST['password'])) {
//            $isTheReqRespondingForAdminUser = checkIfAdmin($_POST['pseudo'], $_POST['password']);
//        }
//        require dirname(__DIR__).DIRECTORY_SEPARATOR.'v'.DIRECTORY_SEPARATOR.'public-login.view.php';
//    }
    if ($_GET['page'] === 'login') {

        if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            $users = getUserByLoginDatas($_POST['pseudo'], $_POST['password']);
            if ($data = $users->fetch()) {
                echo 'is admin';
                $_SESSION['connect'] = (int)$data['id'];
                header('location: ../public/');
            } else {
                echo 'erreur de connection';
            }

        }
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-login.view.php';
    }
    if ($_GET['page'] === 'shops') {
        $shops = getShops();
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-shops.view.php';
        exit;
    }


    if ($_GET['page'] === 'presentation') {
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-presentation.view.php';
        exit;
    }
    if ($_GET['page'] === 'promos') {
        $items = getItemsWithPromo();
        $totalItems = getItemsWithPromo()->rowCount();
        $currentPage = (int)($_GET['pagi'] ?? 1);
//        if ($currentPage === 0) { throw new Exception('num de page invalide');};
        $genres = getGenres();
        $prices = getRadicalsPrices();
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-catalog.view.php';
        exit;
    }


    if ($_GET['page'] === 'catalog') {
        $items = getItems();
        $totalItems = getItems()->rowCount();
        $currentPage = (int)($_GET['pagi'] ?? 1);
//        if ($currentPage === 0) { throw new Exception('num de page invalide');};
        $genres = getGenres();
        $prices = getRadicalsPrices();
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-catalog.view.php';
        exit;
    }
    if (($_GET['page']) === 'item') {
        $item = getItemByReference($_GET['reference']);
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-item.view.php';
    }

    if ($_GET['page'] === 'genres') {
        $genres = getGenres();
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . 'public-genres.view.php';
        exit;
    } else {
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'v' . DIRECTORY_SEPARATOR . '404.view.php';
    }
}