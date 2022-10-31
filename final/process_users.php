<?php echo '<pre>';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    die('Database connection failed: ' . 
    mysqli_connect_error() .
    '(' . mysqli_connect_errno() . ')'
);
}



var_dump($_POST);
echo '</pre>';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO users (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";

$query_results = mysqli_query($connection, $query);

if ($query_results) {
    echo 'IT WORKED';
} else {
    return 'NO WORK';
}