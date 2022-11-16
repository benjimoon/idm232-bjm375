<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<br>
<br>
<p class="home-title">welcome to bibimbook</p>
<p class="home-desc">dive into korean home cooking</p>
<section class="home-all">
<div class="category-layout1">
<img class="category-img" src="dist/images/kalbi.jpeg">
<p class="category-desc">
Kalbi or galbi refers to a variety of grilled beef short ribs dishes popular in"...</p>
</div>
<br>
<div class="category-layout2">
<img class="category-img" src="dist/images/bibimbap.jpeg">
<p class="category-desc">
Bibimbap simply translates to “mixed rice with meat and assorted vegetables“...</p>
</div>
<br>
<div class="category-layout3">
<img class="category-img" src="dist/images/japchae.jpeg">
<p class="category-desc">
Japchae, sweet potato starch noodles stir fried with vegetables and meat"..</p>
</div>
<br>
<div class="category-layout4">
<img class="category-img" src="dist/images/tteok.jpeg">
<p class="category-desc">
Tteokbokki is chewy rice cakes cooked in a red, spicy broth. It’s a popular Korean"...</p>
</div>
</section>
<?php include_once __DIR__ . '/_components/footer.php';