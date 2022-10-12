<?php

$page_name = 'Home';
if (! isset($page_name)) {
    $page_name = 'MISSING TITLE';
}
isset($checkifVariableExist);
$site_name = 'IDM 232';
$document_title = $page_name . ' | ' . $site_name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>