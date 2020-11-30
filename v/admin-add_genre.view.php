<div>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom : </label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="form-group">
            <label for="native_country">Pays d'origine : </label>
            <input type="text" class="form-control" id="native_country" name="native_country" value="">
        </div>
        <div class="form-group">
            <label for="from_year">Année de début : </label>
            <input type="number" class="form-control" id="from_year" name="from_year" value="">
        </div>
        <div class="form-group">
            <label for="to_year">Année de fin : </label>
            <input type="number" class="form-control" id="to_year" name="to_year" value="">
        </div>
        <div class="form-group">
            <label for="about">Description : </label>
            <textarea id="about" name="about" placeholder="" style="height:200px"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
<?php
$pageTitle = 'Ajouter un magasin';
$h2 = 'Ajouter un magasin';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

