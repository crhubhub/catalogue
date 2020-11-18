<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/public.style.css">
    <title><?= $pageTitle ?? 'Antiques Dealer' ?> (public)</title><!--(public) is to del-->
</head>
<body>
<header>
    <div id="logo">
        <a href="?page=home"><img src="icon/AD@2x.png" alt=""></a>
    </div>
    <nav>
        <ul>
            <li><a href="?page=items">Articles</a></li>
            <li><a href="?page=genres">Catégories</a></li>
            <li><a href="?page=shops">Magasins</a></li>
        </ul>
    </nav>
</header>
<main>
    <h2><?= $h2 ?? ' ' ?></h2>
    <?php
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    echo $pageContent;
    ?>
</main>
<footer>
    <br><br><a href="?page=login" style="">Log In</a>
</footer>
</body>
</html>