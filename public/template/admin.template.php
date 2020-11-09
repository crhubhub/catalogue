<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$pageTitle ?? 'Antiques Dealer'?> | ADMIN</title>
</head>
<body><header>
    <nav style="display: flex; flex-direction: row">
        <div>
            <h1>Antiques Dealer</h1>
        </div>
        <div class="links">
            <ul>
                <li><a href="?page=items">Gérer les Articles</a></li>
                <li><a href="?page=genres">Gérer les Catégories</a></li>
                <li><a href="?page=shops">Gérer les Magasins</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
<h2><?=$h2 ?? ''?></h2>
<?php
if (isset($_GET['error'])) {
    echo $_GET['error'];
}
echo $pageContent;
?>
</main>
<footer>
<br>
<a href="?page=end-session"> -> Je me déconnecte</a>
</footer>
</body>
</html>