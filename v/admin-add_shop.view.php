<form method="POST" action="<?= URL ?>liens/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre : </label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group">
        <label for="ad">URL Complète : </label>
        <input type="text" class="form-control" id="ad" name="ad">
    </div>
    <div class="form-group">
        <label for="des">Description : </label>
        <input type="text" class="form-control" id="des" name="des">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$pageTitle = 'Ajouter un magasin';
$h2 = 'Ajouter un magasin';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

