<?php

function getShops()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM shop');
    return $req;
}
function countShops() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT COUNT(*) AS counted_shops FROM shop');
    return $req;
}

function countItems() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT COUNT(*) AS counted_items FROM item');
    return $req;
}

function countGenres() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT COUNT(*) AS counted_genres FROM genre');
    return $req;
}

function getShopById($id)
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM shop WHERE ID = ' . $id . ';');
    return $req;
}

function modifyShopById($id, $name, $phone, $city)
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM shop WHERE ID = ' . $id . ';');
    return $req;
}

function getItems()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM items');
    return $req;
}

