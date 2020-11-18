<?php

function getShops()
{
    try {
                $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql="SELECT * FROM shop";
    $req = $db->query($sql);
    return $req;
}
function countShops() {
    try {
               $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql="SELECT COUNT(*) AS counted_shops FROM shop";
    $req = $db->query($sql);
    return $req;
}

function countItems() {
    try {
                $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql="SELECT COUNT(*) AS counted_items FROM item";
    $req = $db->query($sql);
    return $req;
}

function countGenres() {
    try {
               $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql="SELECT COUNT(*) AS counted_genres FROM genre";
    $req = $db->query($sql);
    return $req;
}

function getShopById($id)
{
    try {
               $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM shop WHERE ID = '$id'";
    $req = $db->query($sql);
    var_dump($req);
    return $req;
}

function modifyShopById($id, $name, $phone, $city)
{
    try {
                $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM shop WHERE ID = ' . $id . '";
    $req = $db->query($sql);
    return $req;
}

function getItems()
{
    try {
               $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM items";
    $req = $db->query($sql);
    return $req;
}

