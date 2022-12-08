<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/../../_components/header.php';
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR cook_time LIKE '%{$search}%'";
$query .= " OR prep_time LIKE '%{$search}%'";
$query .= " OR serving_size LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

        <h1 class="search-results">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET" class="search_bar">
          <input class="search_input" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button class="search-button" type="submit">Search</button>
        </form>
        <h2 class="the-results">You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p class="the-results">No results found</p>';
        }
?>
        <?php
        $site_url = site_url();
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="">' . $_GET['error'] . '</p>';
  }?>

    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo "<h2 class='the-results'><a class='the-results-link' href='{$site_url}/admin/recipes/view.php?id={$recipes_results['id']}'>{$recipes_results['title']}</a></h2>";
          }
      }
?>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>