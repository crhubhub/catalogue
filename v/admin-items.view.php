<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>CRUD Items</h1>
<p></p>


<?php
while ($data = $items->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= $data['name'] ?>
            <em>le <?= $data['phone'] ?></em>
        </h3>

        <p>
            <?= $data['latitude'] ?>
            <br />
            <em><a href="#">Commentaires</a></em>
        </p>
    </div>
    <?php
}
$items->closeCursor();
?>
</body>
</html>
