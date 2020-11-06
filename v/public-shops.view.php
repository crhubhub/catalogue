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
while ($data = $shops->fetch())
{
    ?>
    <div>
        <h3>
            <?= $data['name'] ?>
            <em><br>phone : <?= $data['phone'] ?></em>
        </h3>

        <p>
            <?= $data['street_name']?>, <?= $data['street_number']?>.<br><?= $data['city']?>
            <br />
            <em><a href="">Appeller</a></em>

        </p>
    </div>
    <?php
}
$shops->closeCursor();
?>
</body>
</html>
