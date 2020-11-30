<div>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom : </label>
            <input type="text" class="form-control" id="name" name="name" value="<?=substr(  (int)(time() ), -4)?>">
        </div>
        <div class="form-group">
            <label for="street">Rue : </label>
            <input type="text" class="form-control" id="street" name="street" value="<?=substr(  (int)(time() ), -4)?>">
        </div>
        <div class="form-group">
            <label for="number_street">n° dans la rue : </label>
            <input type="number" class="form-control" id="number_street" name="number_street" value="<?=substr( (int)(time() ),-2)?>">
        </div>
        <div class="form-group">
            <label for="postal">Code postal : </label>
            <input type="number" class="form-control" id="postal" name="postal" value="<?=substr( ( (int)(time() )), -2)?>">
        </div>
        <div class="form-group">
            <label for="city">Ville : </label>
            <input type="text" class="form-control" id="city" name="city" value="<?=substr(  (int)(time() ), -4)?>">
        </div>
        <div class="form-group">
            <label for="country">Pays : </label>
            <input type="text" class="form-control" id="country" name="country" value="<?=substr(  (int)(time() ), -4)?>">
        </div>
        <div class="form-group">
            <label for="phone">n° de téléphone : </label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?=substr(  (int)(time() ), -4)?>">
        </div>
        <div class="form-group">
            <label for="vta">n° de TVA : </label>
            <input type="number" class="form-control" id="vta" name="vta" value="<?=substr(  (int)(time() ), -2)?>">
        </div>
        <div class="form-group">
            <label for="longitude">Latitude : </label>
            <input type="number" class="form-control" id="longitude" name="longitude" value="<?=substr(  (int)(time() ), -2)?>">
        </div>
        <div class="form-group">
            <label for="latitude">Longitude : </label>
            <input type="number" class="form-control" id="latitude" name="latitude" value="<?=substr(  (int)(time() ), -2)?>">
        </div>
        <div class="form-group">
            <label for="image">Image : </label>
            <input type="file" class="form-control-file" id="image" name="image">
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

