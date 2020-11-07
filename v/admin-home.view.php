<?php
while ($dataShops = $countedShops->fetch())
while ($dataItems = $countedItems->fetch())
while ($dataGenres = $countedGenres->fetch())
{
    ?>
    <div>
        <h1>Vous êtes connecté.e en tant qu'administrateur, Formateur<!--<?=$_SESSION['pseudo']?>--></h1>  <!-- TODO : nom -->
        <a href="?page=shops"><h2>Gérer les magasins (<?= $dataShops['counted_shops'] ?>)</h2></a>
        <a href="?page=items"><h2>Gérer les articles (<?= $dataItems['counted_items'] ?>)</h2></a>
        <a href="?page=genres"><h2>Gérer les catégories (<?= $dataGenres['counted_genres'] ?>)</h2></a>
<!--        <a href="?page=end-session"> -> Je me déconnecte</a>-->
    <?php
}
$countedShops->closeCursor();
$pageTitle = 'Accueil';
$h2 = 'Bienvenue - Admin';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';
