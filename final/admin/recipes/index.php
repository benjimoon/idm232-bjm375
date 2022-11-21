<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/../../_components/header.php';
$recipes = get_recipes();
?>
<div class="">
  <div class="">
    <div class="">
      <div class="">
        <h1 class="form-title edit">Recipes</h1>
        <p class="table_desc">A list of all the recipes on the site including their Title, Prep Time, Ingredients, Instructions, Cook Time, and Serving Size.</p>
        <form action="<?php echo site_url();?>/admin/search" method="GET" class="search_bar">
          <input type = "text" name="search" id="search" placeholder="Search" class="search_input">
          <button type="submit">Search</button>
        </form>
        
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }

?>
      </div>
      <div class="button-div">
        <button type="button"
          class="add_user_button">
          <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <?php include __DIR__ . '/../../_components/table-recipes.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';