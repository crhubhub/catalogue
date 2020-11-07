<form action="" method="post">
    <p><label for="pseudo">Pseudo :<input type="text" name="pseudo" value="formateur" id="pseudo" required></label></p>
    <p><label for="password">Password :<input type="password" name="password" value="1234" id="password" required></label></p>
    <p><label for="auto-connect"><input type="checkbox" checked name="auto-connect" id="auto-connect">Connection automatique</label></p>
    <br><button type="submit">Valider</button>

</form>
<?php
$pageTitle = 'Log in';
$h2 = 'Log in';
$pageContent = ob_get_clean();
require dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'public.template.php';