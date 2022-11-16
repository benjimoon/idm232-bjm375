<?php
include_once __DIR__ . '/../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../_components/header.php';


var_dump($_POST);
echo '</pre>';

$title = $_POST['title'];
$prep_time = $_POST['prep_time'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$cook_time = $_POST['cook_time'];
$serving_size = $_POST['serving_size'];

$query = "INSERT INTO recipes (title, prep_time, ingredients, instructions, cook_time, serving_size) VALUES ('$title', '$prep_time', '$ingredients', '$instructions', '$cook_time', '$serving_size')";
var_dump($query);
$query_results = mysqli_query($db_connection, $query);

if ($query_results) {
    redirect_to('/../final/admin/recipes');
} else {
    return 'L';
}

return $query_results;