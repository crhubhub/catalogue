<div>
    <form method="POST" action="?page=add-item" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom : </label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="form-group">
            <label for="reference">Réference : </label>
            <input type="text" class="form-control" id="reference" name="reference" value="">
        </div>
        <div class="form-group">
            <label for="year">Année de l'objet : </label>
            <input type="text" class="form-control" id="year" name="year"
                   value="">
        </div>
        <div class="form-group">
            <label for="country">Pays d'origine : </label>
            <input type="text" class="form-control" id="country" name="country" value="">
        </div>
        <div class="form-group">
            <label for="price">Prix : </label>
            <input type="text" class="form-control" id="price" name="price" value="">
        </div>
        <div class="form-group">
            <label for="proof_of_tracing">Certificat d'authenticité : </label>
            <input type="text" class="form-control" id="proof_of_tracing" name="proof_of_tracing" placeholder="1 (oui), 0 (non)">
        </div>
        <div class="form-group">
            <label for="type">Type : </label>
            <input type="text" class="form-control" id="type" name="type" value="">
        </div>
        <div class="form-group">
            <label for="material">Matière : </label>
            <input type="text" class="form-control" id="material" name="material" value="">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <input type="text" class="form-control" id="description" name="description" value="">
        </div>
        <div class="form-group">
            <label for="height">Hauteur : </label>
            <input type="text" class="form-control" id="height" name="height"
                   value="">
        </div>
        <div class="form-group">
            <label for="width">Largeur : </label>
            <input type="text" class="form-control" id="width" name="width"
                   value="">
        </div>
        <div class="form-group">
            <label for="depth">Profondeur : </label>
            <input type="text" class="form-control" id="depth" name="depth"
                   value="">
        </div>
        <div class="form-group">
            <label for="good_condition">Bon état : </label>
            <input type="text" class="form-control" id="good_condition" name="good_condition" placeholder="1 (oui), 0 (non)">
        </div>
        <div class="form-group">
            <label for="delivery_possible">Possibilité de livraison : </label>
            <input type="text" class="form-control" id="delivery_possible" name="delivery_possible"
                   placeholder="1 (oui), 0 (non)">
        </div>
        <div class="form-group">
            <label for="shop_id">code magasin : </label>
            <input type="text" class="form-control" id="shop_id" name="shop_id"
                   value="">
        </div>
        <div class="form-group">
            <label for="seller_id">code vendeur : </label>
            <input type="text" class="form-control" id="seller_id" name="seller_id"
                   value="">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
"</div>
"
$pageTitle = 'Ajouter un article';
$h2 = 'Ajouter un article';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'admin.template.php';

