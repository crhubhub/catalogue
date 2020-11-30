<?php
while ($data = $item->fetch()) {
    ?>
    <div>
        <form method="POST" action="?page=modifyItem&id=<?= $data['id'] ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
            </div>
            <div class="form-group">
                <label for="reference">Réference : </label>
                <input type="text" class="form-control" id="reference" name="reference" value="<?= $data['reference'] ?>">
            </div>
            <div class="form-group">
                <label for="year">Année de l'objet : </label>
                <input type="text" class="form-control" id="year" name="year"
                       value="<?= $data['year'] ?>">
            </div>
            <div class="form-group">
                <label for="country">Pays d'origine : </label>
                <input type="text" class="form-control" id="country" name="country" value="<?= $data['country'] ?>">
            </div>
            <div class="form-group">
                <label for="price">Prix : </label>
                <input type="text" class="form-control" id="price" name="price" value="<?= $data['price'] ?>">
            </div>
            <div class="form-group">
                <label for="proof_of_tracing">Certificat d'authenticité : </label>
                <input type="text" class="form-control" id="proof_of_tracing" name="proof_of_tracing" value="<?= $data['proof_of_tracing'] ?>">
            </div>
            <div class="form-group">
                <label for="type">Type : </label>
                <input type="text" class="form-control" id="type" name="type" value="<?= $data['type'] ?>">
            </div>
            <div class="form-group">
                <label for="material">Matière : </label>
                <input type="text" class="form-control" id="material" name="material" value="<?= $data['material'] ?>">
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <input type="text" class="form-control" id="description" name="description" value="<?= $data['description'] ?>">
            </div>
            <div class="form-group">
                <label for="height">Hauteur : </label>
                <input type="text" class="form-control" id="height" name="height"
                       value="<?= $data['height'] ?>">
            </div>
            <div class="form-group">
                <label for="width">Largeur : </label>
                <input type="text" class="form-control" id="width" name="width"
                       value="<?= $data['width'] ?>">
            </div>
            <div class="form-group">
                <label for="depth">Profondeur : </label>
                <input type="text" class="form-control" id="depth" name="depth"
                       value="<?= $data['depth'] ?>">
            </div>
            <div class="form-group">
                <label for="good_condition">Bon état : </label>
                <input type="text" class="form-control" id="good_condition" name="good_condition"
                       value="<?= $data['good_condition'] ?>">
            </div>
            <div class="form-group">
                <label for="delivery_possible">Possibilité de livraison : </label>
                <input type="text" class="form-control" id="delivery_possible" name="delivery_possible"
                       value="<?= $data['delivery_possible'] ?>">
            </div>
            <div class="form-group">
                <label for="shop_id">code magasin : </label>
                <input type="text" class="form-control" id="shop_id" name="shop_id"
                       value="<?= $data['shop_id'] ?>">
            </div>
            <div class="form-group">
                <label for="seller_id">code vendeur : </label>
                <input type="text" class="form-control" id="seller_id" name="seller_id"
                       value="<?= $data['seller_id'] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php
}
$item->closeCursor();
$pageTitle = 'Article';
$h2 = "Gestion d'un article :";
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';
