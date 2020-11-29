<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>CRUD Shops</h1>
<p></p>

<?php
while ($data = $shop->fetch())
{
    ?>
    <div>
        <form method="POST" action="?page=modifyShop&id=<?=$data['id']?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
            </div>
            <div class="form-group">
                <label for="street">Rue : </label>
                <input type="text" class="form-control" id="street" name="street" value="<?= $data['street_name'] ?>">
            </div>
            <div class="form-group">
                <label for="number_street">n° dans la rue : </label>
                <input type="text" class="form-control" id="number_street" name="number_street" value="<?= $data['street_number']?>">
            </div>
            <div class="form-group">
                <label for="postal">Code postal : </label>
                <input type="text" class="form-control" id="postal" name="postal" value="<?= $data['postal_code'] ?>">
            </div>
            <div class="form-group">
                <label for="city">Ville : </label>
                <input type="text" class="form-control" id="city" name="city" value="<?= $data['city'] ?>">
            </div>
            <div class="form-group">
                <label for="country">Pays : </label>
                <input type="text" class="form-control" id="country" name="country" value="<?= $data['country'] ?>">
            </div>
            <div class="form-group">
                <label for="phone">n° de téléphone : </label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?= $data['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="vta">n° de TVA : </label>
                <input type="text" class="form-control" id="vta" name="vta" value="<?= $data['vta'] ?>">
            </div>
            <div class="form-group">
                <label for="latitude">Latitude : </label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $data['latitude'] ?>">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude : </label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $data['longitude'] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php
}
$shop->closeCursor();
$pageTitle = 'Magasin';
$h2 = 'Gestion du magasin : ';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';
