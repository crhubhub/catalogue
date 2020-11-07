<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$pageTitle ?? 'Antiques Dealer'?> | ADMIN</title>
</head>
<body>
<h1>Antiques Dealer</h1>
<h2><?=$h2 ?? ''?></h2>
<?php
if (isset($_GET['error'])) {
    echo $_GET['error'];
}
echo $pageContent;
?>
<a href="?page=end-session"> -> Je me déconnecte</a>
</body>
</html>