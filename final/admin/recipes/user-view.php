
<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../../_components/header.php';
$query = 'SELECT * FROM recipes ORDER BY title';
$result = mysqli_query($db_connection, $query);

?>





<?php include __DIR__ . '/../../_components/user-recipes.php'; ?>


<?php include_once __DIR__ . '/../../_components/footer.php';