<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<section class="all-admin-recipes">
    <?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          
            <div class='recipe-card'>
            <div class='recipe-title'>
            {$recipe['title']}
            </div>
            <br>
            <img class='image_path' src =' {$site_url}{$recipe['image_path']}'>
        <br>
        <div class='view-recipe-button'>
        <a href='{$site_url}/admin/recipes/view.php?id={$recipe['id']}' class='view_recipe'>View Recipe</a>
        </div>
        <div class='recipe-buttons'>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='edit_button'>Edit</a>
      
              <br>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class='delete_button'>Delete</a>
             

          </div>
          </div>
          ";
    }
?>
</section>