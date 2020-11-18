<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/public.style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,600&display=swap"
          rel="stylesheet">
    <title><?= $pageTitle ?? 'Antiques Dealer' ?> (public)</title><!--(public) is to del-->
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="">Présentation</a></li>
            <li><a href="?page=items">Catalogue<em> &#9660</em></a></li>
            <li><a href="">Promotions</a></li>
            <li><a href="?page=shops">Magasins</a></li>
            <li><a href="">Contact</a></li>

        </ul>
    </nav>
    <div id="logo">
        <a href="?page=home"><img src="icon/AD@2x.png" alt=""></a>
    </div>
    <h1>Antiques</h1>
    <h1>Dealer</h1>
    <div id="hook">
        <h4>Trouvez la pièce d'exeption et de collection qui vous manque</h4>
        <p>Voir les articles disponibles</p>
    </div>

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