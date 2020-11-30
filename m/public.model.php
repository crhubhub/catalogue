<?php

function sendMessage($contactName, $email, $subject) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: "Clovis"<"clovis.reuss@yahoo.com">' . "\r\n".'Reply-To: '
            .$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
        $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Dear</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$subject.'</span>
				<div class="container">
                    Regards <br>Send by '.$contactName.'<br/>
				</div>
			</body>
			</html>';
        mail($email, $subject, $headers);
}

function countItems()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

//with genre
//    $sql = "SELECT item.*, genre.name FROM item INNER JOIN genre INNER JOIN item_genre
//ON item_genre.item_id = item.id && item_genre.genre_id = genre.id;";

//    with promo
//    $sql = "SELECT i.*, p.* FROM item i NATURAL JOIN promotion p;";
//    $sql = "SELECT * FROM item i INNER JOIN promotion p ON i.id = p.item_id;";
    $sql = "SELECT * from item;";
    $req = $db->query($sql);
    return $req;
}
function countItemsWithPromo()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

//with genre
//    $sql = "SELECT item.*, genre.name FROM item INNER JOIN genre INNER JOIN item_genre
//ON item_genre.item_id = item.id && item_genre.genre_id = genre.id;";

//    with promo
//    $sql = "SELECT i.*, p.* FROM item i NATURAL JOIN promotion p;";


    $sql = "SELECT * FROM item i INNER JOIN promotion p ON i.id = p.item_id;";
//    $sql = "SELECT * from item;";
    $req = $db->query($sql);
    return $req;
}
function getItemsWithOffset($offset, $itemsPerPage)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

//with genre
//    $sql = "SELECT item.*, genre.name FROM item INNER JOIN genre INNER JOIN item_genre
//ON item_genre.item_id = item.id && item_genre.genre_id = genre.id;";

//    with promo
//    $sql = "SELECT i.*, p.* FROM item i NATURAL JOIN promotion p;";
//    $sql = "SELECT * FROM item i INNER JOIN promotion p ON i.id = p.item_id;";
    $sql = "SELECT * from item LIMIT $offset, $itemsPerPage;";
    $req = $db->query($sql);
    return $req;
}

function getItemsWithOffsetAndPromo($offset, $itemsPerPage)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

//with genre
//    $sql = "SELECT item.*, genre.name FROM item INNER JOIN genre INNER JOIN item_genre
//ON item_genre.item_id = item.id && item_genre.genre_id = genre.id;";

//    with promo
//    $sql = "SELECT i.*, p.* FROM item i NATURAL JOIN promotion p;";
    $sql = "SELECT * FROM item i INNER JOIN promotion p ON i.id = p.item_id LIMIT $offset, $itemsPerPage;";
//    $sql = "SELECT * from item;";
    $req = $db->query($sql);
    return $req;
}

function getItemsByDetails($categ, $min, $max)
{
    if ($categ == 'Choisissez une catégorie') {
        $sql = "SELECT * FROM item WHERE price BETWEEN '$min' AND '$max'";
    } else {
        $sql = "SELECT * FROM item WHERE type = '$categ' AND price BETWEEN '$min' AND '$max'";
    }
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $db->query($sql);
    if (($req->rowCount()) === 0) {
        header(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php');
    };

    return $req;
}

function getShops()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM shop";
    $req = $db->query($sql);
    return $req;
}

function getGenres()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT DISTINCT type FROM item ORDER BY name";
    $req = $db->query($sql);
    return $req;
}

function getRadicalsPrices()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT FLOOR(MIN(price)) as min, CEILING(MAX(price)) as max FROM item";
    $req = $db->query($sql);
    return $req;
}


function getItemByReference($reference)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM item WHERE reference = '$reference'";
    $req = $db->query($sql);
    var_dump($req);
    return $req;
}


function getUserByLoginDatas($pseudo, $password)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM user WHERE pseudo LIKE '" . $pseudo . "' AND password = " . $password;
    $req = $db->query($sql);
    return $req;
}