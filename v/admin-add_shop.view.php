<div>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom : </label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="form-group">
            <label for="street">Rue : </label>
            <input type="text" class="form-control" id="street" name="street" value="">
        </div>
        <div class="form-group">
            <label for="number_street">n° dans la rue : </label>
            <input type="number" class="form-control" id="number_street" name="number_street" value="">
        </div>
        <div class="form-group">
            <label for="postal">Code postal : </label>
            <input type="number" class="form-control" id="postal" name="postal" value="">
        </div>
        <div class="form-group">
            <label for="city">Ville : </label>
            <input type="text" class="form-control" id="city" name="city" value="">
        </div>
        <div class="form-group">
            <label for="country">Pays : </label>
            <input type="text" class="form-control" id="country" name="country" value="">
        </div>
        <div class="form-group">
            <label for="phone">n° de téléphone : </label>
            <input type="text" class="form-control" id="phone" name="phone" value="">
        </div>
        <div class="form-group">
            <label for="vta">n° de TVA : </label>
            <input type="number" class="form-control" id="vta" name="vta" value="">
        </div>
        <input type="hidden" name="id" value="">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
<?php
$pageTitle = 'Ajouter un magasin';
$h2 = 'Ajouter un magasin';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

