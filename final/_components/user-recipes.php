<?php
if (!isset($result)) {
    echo '$result variable is not defined. Please check the code.';
}
?>
<h2 class="home-title">All Recipes</h2>
<p class="all-rec-desc">browse through all the delicious korean recipes that bibimbook provides!</p>

<form action="<?php echo site_url();?>/admin/search" method="GET" class="all_search_bar">
          <input type = "text" name="search" id="search" placeholder="Search" class="all_search_input">
          <button class="search-button"type="submit">Search</button>
        </form>
<p class="swipe-text">swipe left to browse all recipes!</p>
<section class="all-recipes">
    <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        <div class='single-recipe-card'>
        <a class='recipe-link' href='{$site_url}/admin/recipes/view.php?id={$recipe['id']}'>
            <p class='recipe-card-title'>
            {$recipe['title']}
            </p>
        </a>
            <br>
            <img class='image_path' src ='{$site_url}{$recipe['image_path']}'>
            <br>
          </div>
          ";
    }
?>

</section>