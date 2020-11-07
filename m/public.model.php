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

function getItems()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM item');
    return $req;
}

function getGenres()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query('SELECT * FROM genre');
    return $req;
}













function getUserByLoginDatas($pseudo, $password)
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=antiques_dealer;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query("SELECT * FROM user WHERE pseudo LIKE '".$pseudo."' AND password = ".$password);
    return $req;
}