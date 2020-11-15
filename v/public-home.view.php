<br><a href="?page=items">Voir les articles</a>
<br><a href="?page=genre">Voir les catégorie</a>
<br><a href="?page=shops">Voir les magasins</a>
<?php
$pageTitle = 'Accueil';
$h2 = 'Bienvenue';
$pageContent = ob_get_clean();
require dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'public.template.php';
