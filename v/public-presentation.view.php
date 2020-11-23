<h3 class="centered-txt h-dark">Qui sommes-nous ?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat, lorem sit amet sollicitudin dapibus, est
    tortor elementum erat, nec ornare est felis dictum ligula. Sed aliquet nec mi ut semper. Etiam egestas ipsum euismod
    dolor rutrum, eu varius orci venenatis. In volutpat maximus turpis, a interdum ex tincidunt eget. Maecenas accumsan
    mattis mauris id porta. Nunc in consequat risus. Maecenas vulputate cursus accumsan.</p>
<img src="img/samples/print.jpg" alt="impression" class="centered-media"">
<h3 class="centered-txt h-dark" style="margin-top: 2em">Titre 2</h3>
<p>Nam rhoncus, elit lobortis porttitor dictum, quam lacus auctor ex, nec vehicula ante est vitae ex. Phasellus fringilla molestie leo at accumsan. Sed est enim, luctus vel efficitur sed, dignissim eu turpis. Morbi a urna a velit ullamcorper dictum sit amet cursus velit. Nam sit amet nulla vitae lacus commodo fringilla eu nec purus. Aenean interdum, dui sed scelerisque ultricies, sapien arcu mollis arcu, ac posuere elit lacus ac metus. Maecenas a augue interdum, varius nunc et, bibendum tellus. Sed varius magna sit amet odio vestibulum placerat. In et massa vulputate, vulputate diam non, vestibulum sapien. Aliquam ut sagittis ligula. Suspendisse ac interdum enim, pharetra hendrerit lectus. Praesent tempus porta ante. Maecenas ornare nec nunc auctor dictum. Nullam bibendum pulvinar ligula a pharetra. Nulla nec justo quis est rutrum lacinia. Sed gravida pretium volutpat.</p>

<h3 class="centered-txt h-dark" style="margin-top: 2em">Titre 3</h3>
<p>Duis vel ipsum consequat, gravida nunc eget, euismod urna. Nullam ante diam, venenatis sed rutrum id, faucibus nec ex. Morbi neque massa, vehicula accumsan justo vel, rhoncus sollicitudin urna. Fusce et gravida dui. Quisque eu magna et lorem pretium ornare eget ac dui. In ut rutrum metus, quis tincidunt odio. Sed finibus lobortis eros, non fringilla tellus maximus ac. Sed accumsan massa nisi, vel imperdiet libero sagittis ornare. Cras rutrum nulla non eros pretium, sit amet vehicula sem consequat. Morbi sit amet sodales sapien. Proin urna est, consectetur nec convallis a, consequat a dolor.</p>
<video controls="controls" src="video/sample.mp4" autoplay class="centered-media">video sample</video>
<?php
$pageTitle = 'Antiques Dealer - Bienvenue';
$h2 = 'Bienvenue';
$pageContent = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'public.template.php';
