

<?php 
function site_url() {
    $protocol = 'http';
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https';
    }

$domain = $_SERVER['HTTP_HOST'];
if ($domain === 'benjaminmoon.com') {
    return $protocol . '://' . $domain . '/idm232/final';
}
return $protocol . '://' . $domain . '';
}

function project_path()
{
    $domain = $_SERVER['HTTP_HOST'];
    if ($domain === 'benjaminmoon.com') {
        return $_SERVER['DOCUMENT_ROOT'] . '/idm232/final';
    } else {
        return $_SERVER['DOCUMENT_ROOT'] . '/final';
    }
}
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// if (mysqli_connect_errno()) {
//     die('Database connection failed: ' . 
//     mysqli_connect_error() .
//     '(' . mysqli_connect_errno() . ')'
// );
// }
// $query = 'SELECT * FROM users';
// $result = mysqli_query($connection, $query);

// if (!$result) {
//     die('Database query failed.' . mysqli_error($connection));
// }

// while ($user = mysqli_fetch_array($result)) {
//     echo '<pre>';
//     var_dump($user);
//     echo '<pre>';
//     echo '<h2>' . $user['first_name'] . '' . $user['last_name'] . '</h2>';
//     echo '<hr>';
// }

// $query = 'SELECT * FROM users';
// $result = mysqli_query($connection, $query);


$page_name = 'Home';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<?php $welcome = 'Hey Professor, check out the Single Recipe tab in my header to reach the designed template page'; ?>

<?php echo $welcome; ?>


<!-- <h2>Create a user</h2>
  <form action="<?php echo site_url(); ?>/process_users.php" method="POST">
    <label for="">First Name</label>
    <input class="main-form" type="text" name="first_name">

    <label for="">Last Name</label>
    <input class="main-form" type="text" name="last_name">

    <label for="">Email</label>
    <input class="main-form" type="email" name="email">

    <label for="">Phone Number</label>
    <input class="main-form" type="text" name="phone">
    <input type="submit" value="Submit">
  </form> -->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';?>

