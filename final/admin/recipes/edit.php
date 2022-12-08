<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipes';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div class="">
  <div class="">
    <div class="">
      <div class="">
        <h1 class="form-title">Edit Recipe</h1>
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="">
          <div class="">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST" class="top-form">
              <div class="">
                <label for="">Title</label>
                <input class="main-form" type="text" name="title"
                  value="<?php echo $recipe['title']?>">
              </div>
              <br>

              <div class="">
                <label for="">Prep Time</label>
                <input class="main-form" type="text" name="prep_time"
                  value="<?php echo $recipe['prep_time']?>">
              </div>
              <br>

              <div class="">
                <label for="">Cook Time</label>
                <input class="main-form" type="text" name="cook_time" value="<?php echo $recipe['cook_time']?>">
              </div>
              <br>

              <div class="">
                <label for="">Serving Size</label>
                <input class="main-form" type="text" name="serving_size" value="<?php echo $recipe['serving_size']?>">
              </div>
              <br>

              <div class="">
                <label for="">Ingredients</label>
                <textarea class="main-textarea" type="text" name="ingredients">
                <?php echo $recipe['ingredients']; ?>
                </textarea>
              </div>
              <br>
              <div class="">
                <label for="">Instructions</label>
                <textarea class="main-textarea" type="text" name="instructions">
                <?php echo $recipe['instructions']; ?>
                </textarea>
                <br>
                <div class="">
                <label for="">Image Path</label>
                <input class="main-form" type="text" name="image_path" value="<?php echo $recipe['image_path']?>">
              </div>
              <br>
              </div>
              <br>
              <div class="">
              <input class="submit-button" type="submit" value="Submit">

              <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';