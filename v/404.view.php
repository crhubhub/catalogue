404 error page
<?php
$pageTitle = 'Accueil';
$h2 = 'Bienvenue';
$pageContent = ob_get_clean();
require dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'public.template.php';