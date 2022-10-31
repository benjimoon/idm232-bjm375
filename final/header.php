<?php

$main_navigation = [];

$page_name = 'Home';
if (! isset($page_name)) {
    $page_name = 'MISSING TITLE';
}
isset($checkifVariableExist);
$site_name = 'IDM 232';
$document_title = $page_name . ' | ' . $site_name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title ?></title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<header class="main-head" id="intro">
    <nav>
      <div id="logo">
        <a href="index.php">
          <img src="graphics/logo.png" alt="">
        </a>
      </div>
      <ul class="nav_links">
        <li><a href="index.php">Home</a></li>
        <li><a href="recipedetail.php">Single Recipe</a></li>
        <li><a href="#">All Recipes</a></li>
        <li><a href="#">Categories</a></li>
      </ul>
      <div class="hamburger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </nav>
  </header>

<!-- <header>
        <nav class="header-nav">
            <ul>
                <li>
                <a href="#">
                    <img class="nav-logo" src="graphics/logo.png" alt="image-logo"/> </a>
                    <a href="#" class="n-link"> Categories</a>
                    <a href="#" class="n-link"> All Recipes</a>
                    <a href="index.php" class="n-link"> Home</a>
                    <a href="dashboard/users/create.php" class="n-link"> Dashboard</a>
                </li>
            </ul>
        </nav>
    </header> -->