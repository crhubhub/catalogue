<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'config.php'; // inutilisé pour le moment
try
{
    $bdd = new PDO('mysql:host=localhost;port:3308;dbname=antiques_dealer;charset=utf8', 'root', '');
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
