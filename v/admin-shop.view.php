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
                <label for="phone">Téléphone : </label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?= $data['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="city">Ville : </label>
                <input type="text" class="form-control" id="city" name="city" value="<?= $data['city']?>">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php
}
$shop->closeCursor();
?>
</body>
</html>
