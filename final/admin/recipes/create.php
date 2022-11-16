<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<h2 class="form-title">Create a Recipe</h2>
  <form action="<?php echo site_url(); ?>/_includes/process_create_recipes.php" method="POST" class="top-form">
    <label for=""> Title</label>
    <input class="main-form" type="text" name="title">
<br>
<br>
    <label for="">Prep Time</label>
    <input class="main-form" type="text" name="prep_time">
<br>
<br>
<label for="">Cook Time</label>
    <input class="main-form" type="text" name="cook_time">
<br>
<br>
<label for="">Serving Size</label>
    <input class="main-form" type="text" name="serving_size">
<br>
<br>
    <label for="">Ingredients</label>
    <textarea class="main-textarea" name="ingredients">
</textarea>
<br>
    <label for="">Instructions</label>
    <br>
    <textarea class="main-textarea" name="instructions">
</textarea>
<br>
    <input type="submit" value="Submit" class="submit-button">


  </form>
<?php include_once __DIR__ . '/../../_components/footer.php';
