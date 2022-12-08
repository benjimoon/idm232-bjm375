<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Admin Recipes';
include_once __DIR__ . '/../../_components/header.php';
$recipes = get_recipes();
?>

        <h1 class="form-title edit">Admin Recipes</h1>
        <p class="table_desc">A list of all the recipes on the site including their Title, Prep Time, Ingredients, Instructions, Cook Time, and Serving Size.</p>
        <form action="<?php echo site_url();?>/admin/search" method="GET" class="search_bar">
          <input type = "text" name="search" id="search" placeholder="Search" class="search_input">
          <button class="search-button"type="submit">Search</button>
        </form>
        
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }

?>
      <div class="button-div">
        <button type="button"
          class="add_recipe_button">
          <a class="add_recipe" href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
        </div>

            <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>


<?php include_once __DIR__ . '/../../_components/footer.php';