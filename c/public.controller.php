<?php

require('../m/public.model.php');


if (isset($url)) {
    var_dump($url);
}

//remplacer par switch ?
if (empty($_GET['page'])) {
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
    if($_GET['page'] === 'login') {

        if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            $users = getUserByLoginDatas($_POST['pseudo'], $_POST['password']);
            if ($data = $users->fetch()) {
                echo 'is admin';
                $_SESSION['connect'] = (int) $data['id'];
                header('location: ../public/');
            } else {
                echo 'erreur de connection';
            }

        }
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'v'.DIRECTORY_SEPARATOR.'public-login.view.php';
    }
    if ($_GET['page'] === 'shops') {
        $shops = getShops();
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'v'.DIRECTORY_SEPARATOR.'public-shops.view.php';
    }
    if ($_GET['page'] === 'items') {
        $items = getItems();
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'v'.DIRECTORY_SEPARATOR.'public-items.view.php';
    }
    if ($_GET['page'] === 'genres') {
        $genres = getGenres();
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'v'.DIRECTORY_SEPARATOR.'public-genres.view.php';
    }
}