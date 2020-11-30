<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/public.style.css">
    <link rel="stylesheet" media="screen and (min-width: 1600px)" href="style/l-public.style.css"/>
    <link rel="stylesheet" media="screen and (min-width: 2000px)" href="style/xl-public.style.css"/>
    <link rel="stylesheet" media="screen and (max-width: 850px)" href="style/m-public.style.css"/>
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="style/s-public.style.css"/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>



    <title><?= $pageTitle ?? 'Antiques Dealer' ?></title><!--(public) is to del-->
</head>
<body>
<div id="background"></div>
<div id="background-dark"></div>
<header>
    <nav>
        <ul>
            <li><a href="?page=presentation">Présentation</a></li>
            <li><a href="?page=catalog&pagi=1">Catalogue<em> &#9660</em></a></li>
            <li><a href="?page=promos&pagi=1">Promotions</a></li>
            <li><a href="?page=shops">Magasins</a></li>
            <li><a href="?page=home#h-form">Contact</a></li>

        </ul>
    </nav>
    <div id="logo">
        <a href="?page=home"><img src="icon/AD@2x.png" alt=""></a>
    </div>
<!--    <a href="?page=home">-->
<!--        <h1>Antiques</h1>-->
<!--        <h1>Dealer</h1>-->
<!--    </a>-->
<!--    <div id="support">-->
<!--        <div>-->
<!--            <h4>"Trouvez la pièce d'<em class="italic-bold">exeption</em><br>et de <em-->
<!--                        class="italic-bold">collection</em> qui vous manque"</h4>-->
<!--            <p class="gold-txt"><a class="gold-txt" href="">Voir les articles disponibles</a></p>-->
<!--        </div>-->
<!--    </div>-->

</header>

<main>
    <?php
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    echo $pageContent;
    ?>
</main>
<footer>
    <a href="?page=login" style="">Connect as administrator</a>
</footer>
<script>

</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>