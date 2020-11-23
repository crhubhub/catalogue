<div class="wrapper">
    <div class="h-left">
        <div style="background: aliceblue" class="h-left-nogap">
            <div style="background: cadetblue" id="h-news"><a href=""><h3 class="lightened-txt">Nouveauté</h3></a></div>
            <div style="background: red" class="wrapper-nogap">
                <div style="background: burlywood"><a href=""><h4 class="lightened-txt">promos</h4></a></div>
                <div style="background: darkgoldenrod"><a href=""><h4 class="lightened-txt">promos</h4></a></div>
            </div>
        </div>
        <div id="h-categories"><a href=""><h3 class="lightened-txt">Catégories</h3></a></div>
    </div>
    <div class="" id="h-right">
        <div id="h-articles"><a href=""><h3 class="lightened-txt">Articles</h3></a></div>
        <div id="h-shops"><a href=""><h3 class="lightened-txt">Magasins</h3></a></div>
    </div>


</div>

<form action="" id="h-form" style="display: flex; flex-direction: column">
    <h3>Contactez-nous</h3>
    <div class="box-x">
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="Votre nom">

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Votre email">
    </div>
    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="Votre message ... (max. 150 mots)" style="height:200px"></textarea>
    <div style="display: flex; justify-content: flex-end">
        <input type="submit" value="Envoyer">
    </div>
</form>
<?php
$pageTitle = 'AD - Promotions';
$h2 = 'Bienvenue';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';
