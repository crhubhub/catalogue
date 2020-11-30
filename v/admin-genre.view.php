<?php
while ($data = $genre->fetch()) {
    ?>
<form method="POST" action="?page=modifyGenre&id=<?= $data['id'] ?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nom : </label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
    </div>
    <div class="form-group">
        <label for="native_country">Pays d'origine : </label>
        <input type="text" class="form-control" id="native_country" name="native_country" value="<?= $data['native_country'] ?>">
    </div>
    <div class="form-group">
        <label for="from_year">Année de début : </label>
        <input type="text" class="form-control" id="from_year" name="from_year"
               value="<?= $data['from_year'] ?>">
    </div>
    <div class="form-group">
        <label for="to_year">Année de fin : </label>
        <input type="text" class="form-control" id="to_year" name="to_year" value="<?= $data['to_year'] ?>">
    </div>
    <div class="form-group">
        <label for="about">Description : </label>
        <input type="text" class="form-control" id="about" name="about" value="<?= $data['about'] ?>">
    </div>
    </div>
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
    </div>
    <?php
}
$genre->closeCursor();
$pageTitle = "Gestion d'une catégorie";
$h2 = "Gestion d'une catégorie : ";
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';
