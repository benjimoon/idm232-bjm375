<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'IDM 232';
$document_title = $page_title . ' | ' . $site_title; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
    <script src="https://cdn.tiny.cloud/1/p8opgc7jxg954rynue6vw5uinwx5hve6yl6cu7t708978lab/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
<body>
<header class="main-head" id="intro">
    <nav>
      <div class=logo id="logo">
      <a href="<?php echo site_url(); ?>/index.php">
          <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="">
        </a>
      </div>
      <ul class="nav_links">
        <div class="text-underline-2">
        <li><a href="<?php echo site_url(); ?>/index.php" class="text">Home</a></li>
</div>
<div class="text-underline-2">
  <li><a href="<?php echo site_url(); ?>/recipedetail.php" class="text">Single Recipe</a></li>
</div>
  <div class="text-underline-2">
  <li><a href="<?php echo site_url(); ?>/admin/recipes/index.php" class="text">All Recipes</a></li>
</div>
</ul>
      <div class="hamburger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </nav>
  </header>

<body>
  <!-- Main Content Begins -->