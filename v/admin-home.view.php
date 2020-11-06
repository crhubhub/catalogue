<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>ADMIN</h1>
<p></p>


<?php
while ($data = $countedShops->fetch())
{
    ?>
    <div>
        <h1>Bienvenue <?=$_SESSION['pseudo']?></h1>  // TODO : nom
        <a href="?page=shops"><h2>Je souhaite gérer les magasins (<?= $data['counted_shops'] ?>)</h2></a>
        <a href="?page=end-session"> -> Je me déconnecte</a>

    <?php
}
$countedShops->closeCursor();
?>
</body>
</html>
