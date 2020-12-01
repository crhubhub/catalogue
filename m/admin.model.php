<?php

/*******************************************************/
/*                      ARTICLES                        /
/*******************************************************/
function countItems()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT COUNT(*) AS counted_items FROM item";
    $req = $db->query($sql);
    return $req;
}

function getItems()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM item";
    $req = $db->query($sql);
    return $req;
}


function getItemById($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM item WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    var_dump($req);
    return $req;
}

function modifyItemById($id, $name, $reference, $year, $country, $price, $proof_of_tracing, $type, $material, $description, $height, $width, $depth, $good_condition, $delivery_possible, $shop_id, $seller_id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "UPDATE item SET name = '$name', reference= '$reference', year = $year, country = '$country', price = $price, proof_of_tracing = '$proof_of_tracing', type = '$type', material = '$material', description = '$description', height = $height, width = $width, depth = $depth, good_condition = $good_condition, delivery_possible = $delivery_possible, shop_id = $shop_id, seller_id = $seller_id WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}

function deleteItem($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "DELETE FROM item WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}

function addItem($id, $name, $reference, $year, $country, $price, $proof_of_tracing, $type, $material, $description, $height, $width, $depth, $good_condition, $delivery_possible, $shop_id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
//    $sql = "INSERT INTO shop VALUES name = '$name', street_name = '$street_name', street_number = $num_street, postal_code = $postal, city = '$city', country = '$country', phone = '$phone', vta = $vta";
    $sql = "INSERT INTO genre (name, native_country, from_year, to_year, about) VALUES ('$name', '$native_country', $from_year, $to_year, '$about');";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}

/********************************************************/
/*                     CATEGORIES                        /
/********************************************************/
function countGenres()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT COUNT(*) AS counted_genres FROM genre";
    $req = $db->query($sql);
    return $req;
}

function getGenres()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM genre ORDER BY name";
    $req = $db->query($sql);
    return $req;
}

function getGenreById($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM genre WHERE id = '$id'";
    $req = $db->query($sql);
    return $req;
}

function modifyGenreById($id, $name, $native_country, $from_year, $to_year, $about)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "UPDATE genre SET name = '$name', native_country = '$native_country', from_year = $from_year, to_year = $to_year, about = '$about' WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}

function deleteGenre($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "DELETE FROM genre WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}

function addGenre($name, $native_country, $from_year, $to_year, $about)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
//    $sql = "INSERT INTO shop VALUES name = '$name', street_name = '$street_name', street_number = $num_street, postal_code = $postal, city = '$city', country = '$country', phone = '$phone', vta = $vta";
    $sql = "INSERT INTO genre (name, native_country, from_year, to_year, about) VALUES ('$name', '$native_country', $from_year, $to_year, '$about');";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}


/*******************************************************/
/*                      MAGASINS                        /
/*******************************************************/

function countShops()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT COUNT(*) AS counted_shops FROM shop";
    $req = $db->query($sql);
    return $req;
}

function getShops()
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM shop ORDER BY city";
    $req = $db->query($sql);
    return $req;
}

function getShopById($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "SELECT * FROM shop WHERE ID = '$id'";
    $req = $db->query($sql);
    return $req;
}

function modifyShopById($id, $name, $street_name, $num_street, $postal, $city, $country, $phone, $vta, $latitude, $longitude)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "UPDATE shop SET name = '$name', street_name = '$street_name', street_number = $num_street, postal_code = $postal, city = '$city', country = '$country', phone = '$phone', vta = $vta, latitude = $latitude, longitude = $longitude WHERE id = $id";
    $req = $db->query($sql);
    return $req;
}

function deleteShop($id)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "DELETE FROM genre WHERE id = $id";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}






function addImageToNewShop($file, $repertoire)
{
    var_dump($file);
    var_dump($repertoire);

    if (!isset($file['name']) || empty($file['name']))
        throw new Exception("Vous devez indiquer une image");

    if (!file_exists($repertoire)) mkdir($repertoire, 0777);
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    var_dump($extension);
    $random = rand(0, 999999);
    $target_file = $repertoire . $random . "_" . $file['name'];

    if (!getimagesize($file["tmp_name"]))
        throw new Exception("Le fichier n'est pas une image");
    if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
        throw new Exception("L'extension du fichier n'est pas reconnue");
    if (file_exists($target_file))
        throw new Exception("Le fichier existe déjà");
    if ($file['size'] > 20000000)
        throw new Exception("Le fichier est trop gros");
    if (!move_uploaded_file($file['tmp_name'], $target_file))
        throw new Exception("l'ajout de l'image n'a pas fonctionné");
    else  {
        $nomImageAjoutee =  $random . "_" . $file['name'];
        return $nomImageAjoutee;
    }

}

function addShop($name, $street_name, $num_street, $postal, $city, $country, $phone, $vta, $latitude, $longitude, $image_url)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $sql = "INSERT INTO shop (name, street_name, street_number, postal_code, city, country, phone, vta,latitude, longitude, image) VALUES ('$name', '$street_name', $num_street, $postal, '$city', '$country', '$phone', $vta, $latitude, $longitude, '$image_url');";
    var_dump($sql);
    $req = $db->query($sql);
    return $req;
}
















function modifyShopByIdSECURED($idTEST, $name, $street, $num_street, $postal, $city, $country, $phone, $vta)
{
    try {
        $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = "UPDATE shop SET name = :name, street_name = :street, street_number = :num_street, postal_code = :postal, city = :city, country = :country, phone = :phone, vta = :vta WHERE id = :id";
    $stmt = $db->prepare($req);
    $stmt->bindValue(":id", $idTEST, PDO::PARAM_INT);
    $stmt->bindValue(":name", $name, PDO::PARAM_STR);
    $stmt->bindValue(":street_name", $street, PDO::PARAM_STR);
    $stmt->bindValue(":street_number", $num_street, PDO::PARAM_INT);
    $stmt->bindValue(":postal", $postal, PDO::PARAM_INT);
    $stmt->bindValue(":city", $city, PDO::PARAM_STR);
    $stmt->bindValue(":country", $country, PDO::PARAM_STR);
    $stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
    $stmt->bindValue(":vta", $vta, PDO::PARAM_INT);
    $resultat = $stmt->execute();
    $stmt->closeCursor();


/*
         $sql = "update link set name = :name, num = :, des = :des where id = :id";
    $stmt = $this->getBdd()->prepare($req);
         $stmt->bindValue(":id", $id, PDO::PARAM_INT);
         $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
         $stmt->bindValue(":ad", $ad, PDO::PARAM_STR);
         $stmt->bindValue(":des", $des, PDO::PARAM_STR);
    $resultat = $stmt->execute();
    $stmt->closeCursor();

    if ($resultat > 0) {
        $this->getLienById($id)->setTitre($titre);
        $this->getLienById($id)->setAd($ad);
        $this->getLienById($id)->setDes($des);
    }*/

}
