<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="main-table">
  <thead class="sub-table">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Prep Time</th>
      <th scope="col" >Ingredients</th>
      <th scope="col" >Instructions</th>
      <th scope="col" >Cook Time</th>
      <th scope="col" >Serving Size</th>
      <th scope="col" >
        <span class="sr-only">Edit/Delete</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td class='table_main'>{$recipe['id']}</td>
            <td class='table_main'>{$recipe['title']}</td>
            <td class='table_main'>{$recipe['prep_time']}</td>
            <td class='table_main'>{$recipe['ingredients']}</td>
            <td class='table_main'>{$recipe['instructions']}</td>
            <td class='table_main'>{$recipe['cook_time']}</td>
            <td class='table_main'>{$recipe['serving_size']}</td>
            <td class='table_main'>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='edit_button'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class='delete_button'>Delete</a>
            </td>
          </tr>";
    }
?>
  </tbody>
</table>