<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'View Recipe';
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
 <div class="recipe-header">
<?php echo $recipe['title']?>
 </div>
 <p class="recipe-desc">
Prep Time:
<?php echo $recipe['prep_time']?> |
Cooking Time:
 <?php echo $recipe['cook_time']?> |
 Serving Size:
 <?php echo $recipe['serving_size']?>
</p>
<?php
    $site_url = site_url();
        echo "
<img class='chicken-img' src =' {$site_url}{$recipe['image_path']}'>
";
?>
<div class='recipe-stuff'>
<div class='recipe-title'>Ingredients
</div>
<div class='ingredient-list'>
<?php echo $recipe['ingredients']?>
</div>
<div class='recipe-title'>Instructions
</div>
<div class='recipe-number'>
<?php echo $recipe['instructions']?>
</div>
</div>
<?php include_once __DIR__ . '/../../_components/footer.php';