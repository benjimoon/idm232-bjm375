<?php
include_once __DIR__ . '/../app.php';
$page_title = 'All Recipes';


echo '</pre>';

$title = sanitize_value($_POST['title']);
$prep_time = sanitize_value($_POST['prep_time']);
$ingredients = sanitize_value($_POST['ingredients']);
$instructions = sanitize_value($_POST['instructions']);
$cook_time = sanitize_value($_POST['cook_time']);
$serving_size = sanitize_value($_POST['serving_size']);
$image_path = sanitize_value($_POST['image_path']);

$query = "INSERT INTO recipes (title, prep_time, ingredients, instructions, cook_time, serving_size, image_path) VALUES ('$title', '$prep_time', '$ingredients', '$instructions', '$cook_time', '$serving_size', '$image_path')";
$query_results = mysqli_query($db_connection, $query);

if ($query_results) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the user ' . mysqli_error($db_connection);
    redirect_to('/admin/users?error=' . $error_message);
}

return $query_results;