<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'m'.DIRECTORY_SEPARATOR.'connectToDB.model.php';
ob_start();
try {
    if(isset($_SESSION['connect']) && true) {
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'c'.DIRECTORY_SEPARATOR.'admin.controller.php';
    } else {
        require dirname(__DIR__).DIRECTORY_SEPARATOR.'c'.DIRECTORY_SEPARATOR.'public.controller.php';
    }

} catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

