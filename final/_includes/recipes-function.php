<?php

/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $results = mysqli_query($db_connection, $query);
    return $results;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_recipe($title, $prep_time, $ingredients, $cook_time, $serving_size, $image_path)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (title, prep_time, ingredients, cook_time, serving_size, image_path)';
    $query .= " VALUES ('$title', '$prep_time', '$ingredients', '$cook_time', '$serving_size','$image_path')";

    $results = mysqli_query($db_connection, $query);
    return $results;
}