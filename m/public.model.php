<?php

function getItems()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM item');
    return $req;
}

function getShops()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM shop');
    return $req;
}


function getItemByReference($reference)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query("SELECT * FROM item WHERE reference = '$reference';");
    var_dump($req);
    return $req;
}

function getGenres()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM genre');
    return $req;
}


function getUserByLoginDatas($pseudo, $password)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query("SELECT * FROM user WHERE pseudo LIKE '" . $pseudo . "' AND password = " . $password);
    return $req;
}