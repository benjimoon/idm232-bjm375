<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<br>
<br>
<div class="home-all">
<p class="home-title">Welcome to Bibimbook</p>
<p class="home-desc"> dive into korean home cooking and become an expert</p>
<img class="home-food-img" src="<?php echo site_url(); ?>/dist/images/homefoodimg.png" alt="">
<form action="<?php echo site_url(); ?>/admin/recipes/user-view.php" class="home-button-link">
          <button class="home-button"type="submit">Get started</button>
        </form>
        </div>

<?php include_once __DIR__ . '/_components/footer.php';