<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = sanitize_value($_POST['title']);
$prep_time_value = sanitize_value($_POST['prep_time']);
$cook_time_value = sanitize_value($_POST['cook_time']);
$serving_size_value = sanitize_value($_POST['serving_size']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$instructions_value = sanitize_value($_POST['instructions']);
$image_path = sanitize_value($_POST['image_path']);
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title_value}', prep_time = '{$prep_time_value}', cook_time = '{$cook_time_value}', serving_size = '{$serving_size_value}', ingredients = '{$ingredients_value}' , instructions = '{$instructions_value}', image_path = '{$image_path}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}