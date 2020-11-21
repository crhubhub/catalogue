<div class="wrapper">
    <div class="h-left">
        <div style="background: aliceblue" class="h-left-nogap">
            <div style="background: cadetblue" id="h-news">News</div>
            <div style="background: red" class="wrapper-nogap">
                <div style="background: burlywood">promos</div>
                <div style="background: darkgoldenrod">promos</div>
            </div>
        </div>
        <div id="h-categories">Une div</div>
    </div>
    <div class="" id="h-right">
        <div id="h-articles">ARTS</div>
        <div id="h-shops">SHOPS</div>
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
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <div style="display: flex; justify-content: flex-end">
        <input type="submit" value="Submit">
    </div>
</form>
<?php
$pageTitle = 'Accueil';
$h2 = 'Bienvenue';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';
